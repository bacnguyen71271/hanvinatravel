<?php namespace Indikator\News\Components;

use October\Rain\Exception\AjaxException;
use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Indikator\News\Models\Categories;
use Cms\Classes\Page;
use Redirect;
use BackendAuth;
use Lang;
use Input;
use Config;


class Customer extends ComponentBase
{
	 
    public $customers;
	public function componentDetails()
	{
		return [
            'name' =>'Customer',
            'description' =>'Khách hàng'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $customers = Posts::where('category_id',2)->where('status', 1);

        $this->listcustomer = $customers->orderBy('id','desc')->paginate(4)->setPath(url("khach-hang"));
        
      
        

       
    }
}