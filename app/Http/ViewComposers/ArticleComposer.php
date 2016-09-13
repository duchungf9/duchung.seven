<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

class ArticleComposer
{

    protected $articles;


    public function __construct(Post $articles)
    {
        // Dependencies automatically resolved by service container...
        $this->$articles = $articles;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('name', $this->$articles->count());
    }
}