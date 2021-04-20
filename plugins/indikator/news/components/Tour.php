<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Redirect;

class Tour extends ComponentBase
{
    
    public $tour;
    public $tourRelateds;

    public function componentDetails()
    {
        return [
            'name'        => 'Tour Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $slug = $this->param('slug');
        $tour = Posts::where('slug', $slug)->first();
        if (!$tour) {
            return Redirect::to('404');
        }
        $this->tourRelateds = Posts::where('category_id', $tour->category_id)->where('id', '!=', $tour->id)->take(4)->get();
        $this->tour = $tour;
	$this->page->title = $tour->seo_title ? $tour->seo_title : $tour->title;
        $this->page->meta_description = $tour->seo_desc ? $tour->seo_desc :  $tour->introductory;
        $this->page->meta_keyword = $tour->seo_keywords ? $tour->seo_keywords : '';
        $this->page->meta_image = $tour->seo_image ? $tour->seo_image : $tour->image;
        $this->page->canonical = $this->currentPageUrl();
    }
}
