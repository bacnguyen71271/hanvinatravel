<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Travel\Trangchu\Models\Place;
use Request;

class Tours extends ComponentBase
{
    public $posts;
    public $places;
    public $page;
    public $perPage;

    public function componentDetails()
    {
        return [
            'name'        => 'combo Tours Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $category_tour = $this->param('category-tour');
        $category_tour = $category_tour == "" ? ['combo-duong-bay', 'combo-duong-bo'] : [$category_tour];
        $this->posts = Posts::where('category_id', 4)->orderBy('id', 'desc')->whereIn('category_tour', $category_tour)->paginate(6);
        $this->page = "details-combo.htm";
        $this->places = Place::where('category_id', 4)->orderBy('id', 'desc')->get();
        $this->perPage = 1;
    }

    // public function onChangePlace()
    // {
    //     $category_tour = $this->param('category-tour');
    //     $data = Request::all();
    //     $places = isset($data['places']) ? $data['places'] : [];
    //     $posts = Posts::where('category_id', 4)->where('category_tour', $category_tour)->whereIn('place_id', $places)->take(6)->get();
    //     $count = Posts::where('category_id', 4)->where('category_tour', $category_tour)->whereIn('place_id', $places)->count();
    //     $totalPage = CEIL($count / 6);
    //     $page = "details-combo.htm";
    // }

    public function onChangePlace()
    {
        $category_tour = $this->param('category-tour');
        $data = Request::all();
        if (isset($data['places'])) {
            $places = $data['places'];
        } else {
            $places = Place::where('category_id', 4)->pluck('id');
        }
        \Log::info($places);
        $category_tour = $this->param('category-tour');
        $category_tour = $category_tour == "" ? ['combo-duong-bay', 'combo-duong-bo'] : [$category_tour];
        $posts = Posts::where('category_id', 4)->whereIn('category_tour', $category_tour)->whereIn('place_id', $places)->take(6)->get();
        $count = Posts::where('category_id', 4)->whereIn('category_tour', $category_tour)->whereIn('place_id', $places)->count();
        $totalPage = CEIL($count / 6);
        $page = "details-combo.htm";

        return $this->renderPartial("@tourfilter.htm",[
            'posts' => $posts,
            'page' => $page,
            'perPage' => 1,
            'totalPage' => $totalPage,
        ]);
    }

    public function onChangePage()
    {
        $category_tour = $this->param('category-tour');
        $data = Request::all();
        if (isset($data['places'])) {
            $places = $data['places'];
        } else {
            $places = Place::where('category_id', 4)->pluck('id');
        }
        $nextPage = isset($data['nextPage']) ? $data['nextPage'] : 1;
        $perPage = 6 * ($nextPage - 1);
        $category_tour = $this->param('category-tour');
        $category_tour = $category_tour == "" ? ['combo-duong-bay', 'combo-duong-bo'] : [$category_tour];
        $posts = Posts::where('category_id', 4)->whereIn('category_tour', $category_tour)->whereIn('place_id', $places)->skip($perPage)->take(6)->get();
        $count = Posts::where('category_id', 4)->whereIn('category_tour', $category_tour)->whereIn('place_id', $places)->count();
        $totalPage = CEIL($count / 6);
        $page = "details-combo.htm";

        return $this->renderPartial("@tourfilter.htm",[
            'posts' => $posts,
            'page' => $page,
            'totalPage' => $totalPage,
            'perPage' => $nextPage,
        ]);
    }
}
