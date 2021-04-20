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


class Tintuc extends ComponentBase
{
	 
    public $listcategory;
    public $postfornews;
    public $listrecents;
    public $newshomepage;
	public function componentDetails()
	{
		return [
            'name' =>'Tintuc',
            'description' =>'Tin Tức'
        ];
	}
	public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $categorys = Posts::where('category_id',1)->where('status', 1);
        $forpost = Posts::where('category_id',1)->where('status', 1);
        $recentspost = Posts::where('category_id',1)->where('status', 1);
        $homepage = Posts::where('category_id',1)->where('status', 1);

        //list all
        $this->listcategory = $categorys->orderBy('id','desc')->paginate(4)->setPath(url("tin-tuc"));
        //5 tin list home
        // $this->postnews = $news
        //                 ->orderBy('id','desc')
        //                 ->get()
        //                 ->take(6);
        // $this->page['postnews'] = $this->postnews;
        // //4 mới nhất
         $this->page['postfornews'] = $forpost
                        ->orderBy('id','desc')
                        ->get()
                        ->take(4);
        // //4 tin nổi bật
        $this->page['listrecents'] = $recentspost
                        ->orderBy('id','desc')
                        ->where('featured',1)
                        ->get()
                        ->take(4); 
        $this->page['newshomepage'] = $homepage
                        ->orderBy('id','desc')
                        ->get()
                        ->take(3); 
      
        

       
    }
}