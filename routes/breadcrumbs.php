<?php

// Colegio > Index
Breadcrumbs::for('colegio-index', function ($trail) {
    $trail->push('Inicio', route('colegio-index'));
});

// Colegio > Admission
Breadcrumbs::for('colegio-admission', function ($trail, $modality) {
    $trail->parent('colegio-index');
    $trail->push('Admisión alumno ' . ucwords($modality), route('colegio-admission', $modality));
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
Breadcrumbs::for('colegio-venue', function ($trail, $data) {
    $trail->parent('colegio-index');
    $trail->push($data->name, route('colegio-venue'));
});

