<?php

// Colegio > Index
Breadcrumbs::for('colegio-index', function ($trail) {
    $trail->push('Inicio', route('colegio-index'));
});

// Colegio > Admission
Breadcrumbs::for('colegio-admission', function ($trail, $modality) {
    $trail->parent('colegio-index');
    $trail->push('Admision ' . ucwords($modality), route('colegio-admission', $modality));
});

// Colegio > AboutUs
Breadcrumbs::for('colegio-aboutus', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Nosotros', route('colegio-aboutus'));
});

// Colegio > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category->id));
});

// Colegio > Blog > [Category] > [Post]
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('category', $post->category);
    $trail->push($post->title, route('post', $post->id));
});




