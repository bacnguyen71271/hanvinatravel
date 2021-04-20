<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;

class HomePageComboTours extends ComponentBase
{
    public $posts;
    
    public function componentDetails()
    {
        return [
            'name'        => 'HomePageComboTours Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->posts = Posts::where('category_id', 4)->orderBy('id', 'desc')->where('show_on_home', 1)->get()->take(6);
    }
}
