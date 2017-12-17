<?php

namespace http;

class processRequest
{
public static function createResponse()
{
$requested_route = processRequest::getRequestedRoute();
$controller_name = $requested_route->controller;
//this determines the method to call for the controller
$controller_method = $requested_route->method;
//I use a static for the controller because it doesn't have any properties
$controller_name::$controller_method();
}
//this function matches the request to the correct controller
public static function getRequestedRoute()
{
$request_method = request::getRequestMethod();
$page = request::getPage();
$action = request::getAction();
$routes = \routes::getRoutes();
$foundRoute = NULL;
foreach ($routes as $route) {
if ($route->page == $page && $route->http_method == $request_method && $route->action == $action) 
{
$foundRoute = $route;
break;
}
}
if (is_null($foundRoute)) {
controller::getTemplate('notfound');
exit;
}
else
{
return $foundRoute;
}
}
}
