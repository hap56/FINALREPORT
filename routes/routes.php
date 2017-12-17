<?php
class routes
{
public static function getRoutes()
{
$route = new route();
$route->http_method = 'GET';
$route->page = 'homepage';
//specify the action that is in the URL to trigger this route index.php?page=index&action=show
$route->action = 'show';
//specify the name of the controller class that will contain the functions that deal with the requests
$route->controller = 'homepageController';
//name of the method that is called
$route->method = 'show';
//route array
$routes[] = $route;
$route = new route();
$route->http_method = 'POST';
$route->action = 'create';
$route->page = 'homepage';
$route->controller = 'homepageController';
$route->method = 'create';

$routes[] = $route;

$route = new route();
$route->http_method = 'GET';
$route->action = 'show';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'show';

$routes[] = $route;

$route = new route();
$route->http_method = 'GET';
$route->action = 'all';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'all';

$routes[] = $route;
$route = new route();
$route->http_method = 'GET';
$route->action = 'all';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'all';

$routes[] = $route;

$route = new route();
$route->http_method = 'GET';
$route->action = 'show';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'show';

$routes[] = $route;

$route = new route();
$route->http_method = 'POST';
$route->action = 'login';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'login';

$routes[] = $route;

$route = new route();
$route->http_method = 'POST';
$route->action = 'delete';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'delete';

$routes[] = $route;

$route = new route();
$route->http_method = 'POST';
$route->action = 'delete';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'delete';
$routes[] = $route;

$route = new route();
$route->http_method = 'GET';
$route->action = 'edit';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'edit';
$routes[] = $route;

$route = new route();
$route->http_method = 'POST';
$route->action = 'save';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'save';
$routes[] = $route;
//this is the route for the reg form
$route = new route();
$route->http_method = 'GET';
$route->action = 'register';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'register';
$routes[] = $route;
//this handles the reg post to create the user
$route = new route();
$route->http_method = 'POST';
$route->action = 'register';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'store';
$routes[] = $route;
		
$route = new route();
$route->http_method = 'POST';
$route->action = 'store';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'store';
$routes[] = $route;
		
$route = new route();
$route->http_method = 'POST';
$route->action = 'save';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'save';
$routes[] = $route;
		
$route = new route();
$route->http_method = 'GET';
$route->action = 'create';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'create';
$routes[] = $route;
		
$route = new route();
$route->http_method = 'GET';
$route->action = 'edit';
$route->page = 'tasks';
$route->controller = 'tasksController';
$route->method = 'edit';
$routes[] = $route;
		
$route = new route();
$route->http_method = 'GET';
$route->action = 'logout';
$route->page = 'accounts';
$route->controller = 'accountsController';
$route->method = 'logout';
$routes[] = $route;

 return $routes;
 }

public static function create($http_method,$action,$page,$controller,$method) 
{
      $route = new route();
      $route->http_method = $http_method;
      $route->action = $action;
      $route->page = $page;
      $route->controller = $controller;
      $route->method = $method;
}
}
class route
{
  public $page;
  public $action;
  public $method;
  public $controller;
}