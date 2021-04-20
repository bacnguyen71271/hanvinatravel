<?php namespace Travel\Trangchu\Components;


use Cms\Classes\ComponentBase;

use Travel\Trangchu\Models\Setting as NewSetting;
use Db;
use Illuminate\Database\Eloquent\Model;


class Setting extends ComponentBase
{
    public  $setting;
    public  function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'setting',
            'description' => 'Setting'
        ];
    }
    public  function defineProperties()
    {
        return [];
    }
    public  function onRun()
    {
        $this->setting = NewSetting::find(1);
        $this->page['setting'] = $this->setting;
   }
}