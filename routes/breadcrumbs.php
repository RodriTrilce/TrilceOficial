<?php

// Home
Breadcrumbs::for('colegio-index', function ($trail) {
    $trail->push('Inicio', route('colegio-index'));
});

// Home > About
Breadcrumbs::for('colegio-admission', function ($trail, $modality) {
    $trail->parent('colegio-index');
    $trail->push('Admision ' . ucwords($modality), route('colegio-admission', $modality));
});

// Home > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});




