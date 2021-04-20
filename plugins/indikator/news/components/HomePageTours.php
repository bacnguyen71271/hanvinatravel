<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;

class HomePageTours extends ComponentBase
{
    public $posts;

    public function componentDetails()
    {
        return [
            'name'        => 'HomePageTours Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->posts = Posts::where('category_id', 3)->orderBy('id', 'desc')->where('show_on_home', 1)->get()->take(8);
    }
}
