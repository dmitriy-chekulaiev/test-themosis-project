<?php

namespace Theme\Controllers;

use Nepchure\Test\Controllers\NPCController;
use Nepchure\Test\Models\ModelTrial;
use Theme\Models\Post;
use Themosis\Facades\Asset;
use Themosis\Facades\User;

class Page extends NPCController
{
    public function wellcome($post, $query)
    {
        return view('welcome', [
            'page' => $post,
            'query' => $query,
            'posts' => Post::all()->where('post_type', '=', 'post')->all()
        ]);
    }

    public function front($post, $query)
    {

        Asset::add('css-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        Asset::add('js-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js');
        Asset::add('js-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['js-jquery'],  true);
        Asset::add('js-theme', 'js/theme.min.js');

        $featuredTrials = ModelTrial::getFeaturedTrials();

        return view('front', [
            'page' => $post,
            'query' => $query,
            'featuredTrials' => $featuredTrials,
        ]);
    }

    public function show($post, $query)
    {
        return view('page', [
            'page' => $post,
            'query' => $query
        ]);
    }

    public function singlePost($post, $query)
    {
        $this->setDocumentTitle($post->post_title);
        return view('single', [
            'post' => $post,
            'query' => $query
        ]);
    }

    public function notFound()
    {
        return view('layout.not-found', [

        ]);
    }

    public function denied()
    {
        global $wp;
        return view('layout.denied', [
            'referrer' => home_url($wp->request),
        ]);
    }


}
