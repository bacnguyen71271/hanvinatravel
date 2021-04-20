<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts;
use Travel\Trangchu\Models\Place;
use Request;

class Tours2 extends ComponentBase
{
    public $posts;
    public $places;
    public $page;
    public $perPage;

    public function componentDetails()
    {
        return [
            'name'        => 'Tours Component',
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
        $this->posts = Posts::where('category_id', 3)->paginate(6);
        $this->page = "details-tour.htm";
        $this->places = Place::where('category_id', 3)->get();
        $this->perPage = 1;
    }

    public function onChangePlace()
    {
        $category_tour = $this->param('category-tour');
        $data = Request::all();
        if (isset($data['places'])) {
            $places = $data['places'];
        } else {
            $places = Place::where('category_id', 3)->pluck('id');
        }
        $posts = Posts::where('category_id', 3)->orderBy('id', 'desc')->whereIn('place_id', $places)->take(6)->get();
        $count = Posts::where('category_id', 3)->orderBy('id', 'desc')->whereIn('place_id', $places)->count();
        $totalPage = CEIL($count / 6);
        $page = "details-tour.htm";

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
            $places = Place::where('category_id', 3)->pluck('id');
        }
        $nextPage = isset($data['nextPage']) ? $data['nextPage'] : 1;
        $perPage = 6 * ($nextPage - 1);
        $posts = Posts::where('category_id', 3)->whereIn('place_id', $places)->skip($perPage)->take(6)->get();
        $count = Posts::where('category_id', 3)->whereIn('place_id', $places)->count();
        $totalPage = CEIL($count / 6);
        $page = "details-tour.htm";

        return $this->renderPartial("@tourfilter.htm",[
            'posts' => $posts,
            'page' => $page,
            'totalPage' => $totalPage,
            'perPage' => $nextPage,
        ]);
    }
}
