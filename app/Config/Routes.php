<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->add('product/(:any)/(:any)', 'Shop::product/$1/$2'); // example.com/shop/product to shorthand -> example.com/prodcut (REMOVING THE CONTROLLER ON THE ROUTE)

$routes->group('admin', function($routes) {   // Using the folder 'Admin'
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');
    $routes->add('product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');

    //Blog Routes

    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new', 'Admin\Blog::createNew');
    $routes->post('blog/new', 'Admin\Blog::saveBlog');
});



// $routes->get('/shop', 'Shop::index');
// $routes->get('/shop/product', 'Shop::product');

// Auto Routing -> Disable Auto Routes (Improved) in Feature.php -> Disable Auto Route in Routing.php

$routes->setAutoRoute(true);
