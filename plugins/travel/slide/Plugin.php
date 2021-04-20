<?php namespace Travel\Slide;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Travel\Slide\Components\Slides' => 'slides',

    	];	
    }

    public function registerSettings()
    {
    } 
}
