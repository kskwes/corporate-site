<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Service
Breadcrumbs::for('service', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Service', route('service'));
});

// Home > Company
Breadcrumbs::for('company', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Company', route('company'));
});

// Home > News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('News', route('news'));
});

// Home > Works
Breadcrumbs::for('works', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Works', route('works'));
});
