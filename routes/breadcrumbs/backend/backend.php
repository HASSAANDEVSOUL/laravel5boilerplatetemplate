<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});



Breadcrumbs::register('admin.Mycrudroute', function ($breadcrumbs) {
    $breadcrumbs->push(__('THIS IS MY DEMO CRUD'), route('admin.Mycrudroute'));
});
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
