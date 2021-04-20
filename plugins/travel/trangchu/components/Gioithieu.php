<?php namespace Travel\Trangchu\Components;


use Cms\Classes\ComponentBase;
use Travel\Trangchu\Models\Gioithieu as NewGioithieu;
use Db;
use Illuminate\Database\Eloquent\Model;

class Gioithieu extends ComponentBase
{
    public  $gioithieu;
    public  function componentDetails()
    {
        
        // TODO: Implement componentDetails() method.
        return [
            'name' => 'gioithieu',
            'description' => 'Giới thiệu'
        ];
    }
    public  function defineProperties()
    {
        return [];
    }
    public  function onRun()
    {

        $this->gioithieu = NewGioithieu::find(1);
        $this->page['gioithieu'] = $this->gioithieu;

   }
}