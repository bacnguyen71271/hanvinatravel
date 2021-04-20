<?php namespace travel\Slide\Components;


use Cms\Classes\ComponentBase;

use Travel\Slide\Models\Slide as NewSlide;
use Db;
use Illuminate\Database\Eloquent\Model;


class Slides extends ComponentBase
{
    public  $slides;
    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'slides',
            'description' => 'Slide'
        ];
    }
    public  function defineProperties()
    {
        return [];
    }
    public  function onRun() 
    {
        $this->slides = NewSlide::orderBy('id','desc')->get();
        $this->page['slides'] = $this->slides;
   }
}