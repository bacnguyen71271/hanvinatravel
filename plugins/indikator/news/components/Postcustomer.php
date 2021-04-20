<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Posts as Customer;
use Redirect;
use BackendAuth;

class Postcustomer extends ComponentBase
{
    public $postcustomer;
    public $tagpostcustomer;

    public function componentDetails()
    {
        return [
            'name'        => 'indikator.news::lang.component.post',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'indikator.news::lang.settings.slug_title',
                'description' => 'indikator.news::lang.settings.slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->postcustomer = $this->page['postcustomer'] = $this->loadPost();
        $tagpostcustomers = Customer::where('category_id', $this->postcustomer->category_id)->where('status', 1); 
        // //Bài viết liên quan
        $this->tagpostcustomer = $tagpostcustomers
                        ->inRandomOrder()
                        ->take(2)
                        ->get();


    }

    protected function loadPost()
    {
        $slug = $this->property('slug');

        $post = new Customer;

        $post = $post->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $post->transWhere('slug', $slug)
            : $post->where('slug', $slug);

        $post = $post->isPublished()->first();

        if (!$post) {
            return $post;
        }
        $post->tags = explode(',', $post->tags);

        $meta_description = strip_tags($post->introductory);
        if (strlen($meta_description) > 252) {
            $meta_description = substr($meta_description, 0, 252).'...';
        }

        $post->setUrl($this->postPage, $this->controller);

        // General SEO Tags
        $this->page->title = $post->title;
        $this->page->meta_title = $post->title;
        $this->page->meta_description = $meta_description;
        $this->page->meta_canonical = $post->url;
        $this->page->meta_image_src = $post->image;

        // Create keyword list, from category name and tag list.
        $post_keywords = $post->category->name.', ';
        foreach ($post->tags as $key => $tag) {
            $post_keywords .= $tag;
            if ($key != (count($post->tags) - 1)) {
                $post_keywords .= ', ';
            }
        }
        $this->page->meta_keywords = $post_keywords;
        return $post;
    }
}
