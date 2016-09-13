<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

class ArticleComposer
{

    static $articles;


    public function __construct(Post $post)
    {
        // Dependencies automatically resolved by service container...
        $post = Post::get();
        self::$articles = $post;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        //dd($this->articles);
        //dd(self::$articles);
        $view->with('articles', self::$articles);
    }
}