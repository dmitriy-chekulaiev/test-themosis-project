<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('front', 'Page@front');
Route::get('page', 'Page@show');
Route::get('single', 'Page@singlePost');
Route::get('404', 'Page@notFound');