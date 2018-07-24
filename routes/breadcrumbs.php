<?php

// Error 404
Breadcrumbs::for('errors.404', function ($trail) {
    $trail->push('Página no encontrada');
});

/**
 *  Colegio migajas de pan
 */

// Colegio > Index
Breadcrumbs::for('colegio-index', function ($trail) {
    $trail->push('Inicio', route('colegio-index'));
});

// Colegio > Admission
Breadcrumbs::for('colegio-admission', function ($trail, $modality) {
    $trail->parent('colegio-index');
    $trail->push('Admisión alumno ' . ($modality), route('colegio-admission', $modality));
});

// Colegio > AboutUs
Breadcrumbs::for('colegio-aboutus', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Nosotros', route('colegio-aboutus'));
});

// Colegio > Contact
Breadcrumbs::for('colegio-contact', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Contáctenos', route('colegio-contact'));
});

// Colegio > Venue
Breadcrumbs::for('colegio-venue', function ($trail, $venue) {
    $trail->parent('colegio-index');
    $trail->push('Sede ' . ucwords($venue), route('colegio-venue', $venue));
});

// Colegio > FrequentQuestions
Breadcrumbs::for('colegio-frequentquestions', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Preguntas Frecuentes', route('colegio-frequentquestions'));
});

// Colegio > PaymentGuide
Breadcrumbs::for('colegio-paymentguide', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Guía de pagos en línea', route('colegio-paymentguide'));
});

// Colegio > Blog
Breadcrumbs::for('colegio-blog', function ($trail) {
    $trail->parent('colegio-index');
    $trail->push('Blog', route('colegio-blog'));
});

// Colegio > Blog > Post
Breadcrumbs::for('colegio-blogpost', function ($trail, $post) {
    $trail->parent('colegio-blog');
    $trail->push($post, route('colegio-blogpost', $post));
});

// Colegio > EducationalProposal
Breadcrumbs::for('colegio-educationalproposal', function ($trail) {
    $trail->push('Propuesta Educativa', route('colegio-educationalproposal'));
});


/**
 *  Academia migajas de pan
 */

// Academia > Index
Breadcrumbs::for('academia-index', function ($trail) {
   $trail->push('Inicio', route('academia-index'));
});

// Academia > AboutUs
Breadcrumbs::for('academia-aboutus', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Nosotros', route('academia-aboutus'));
});

// Academia > Preparation
Breadcrumbs::for('academia-preparation', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Preparación ' . ucwords($modality), route('academia-preparation', $modality));
});

// Academia > Venue
Breadcrumbs::for('academia-venue', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Sede ' . ucwords($modality), route('academia-venue', $modality));
});

// Academia > Simulacrum
Breadcrumbs::for('academia-simulacrum', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Simulacro ' . ucwords($modality), route('academia-simulacrum', $modality));
});

// Academia > Solutions
Breadcrumbs::for('academia-solutions', function ($trail, $modality) {
    $trail->parent('academia-index');
    $trail->push('Solucionarios ' . ucwords($modality), route('academia-solutions', $modality));
});

// Academia > Enrollment
Breadcrumbs::for('academia-enrollment', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Prematrícula en línea', route('academia-enrollment'));
});

// Academia > Math Olympics
Breadcrumbs::for('academia-matholympics', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Olimpiadas Matemáticas', route('academia-matholympics'));
});

// Academia > Contact
Breadcrumbs::for('academia-contact', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Contáctenos', route('academia-contact'));
});

// Academia > Blog
Breadcrumbs::for('academia-blog', function ($trail) {
    $trail->parent('academia-index');
    $trail->push('Blog', route('academia-blog'));
});

// Academia > Blog > Post
Breadcrumbs::for('academia-blogpost', function ($trail, $post) {
    $trail->parent('academia-blog');
    $trail->push($post, route('academia-blogpost', $post));
});


// Academia > Index
Breadcrumbs::for('academia-what-your-option', function ($trail) {
   $trail->push('Página en construccion', route('academia-what-your-option'));
});
