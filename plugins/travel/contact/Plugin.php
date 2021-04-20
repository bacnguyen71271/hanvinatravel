<?php namespace Travel\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Travel\Contact\Components\Contacts'  =>'contact',
    	];
    }

    public function registerSettings()
    {
    }
}
