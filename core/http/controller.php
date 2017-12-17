<?php

namespace http;
//controller class to connect models with views and business logic
class controller
{
//getting the HTML template for the application and accepting the model.
static public function getTemplate($template, $data = NULL)
{
$template = 'pages/' . $template . '.php';
include $template;
}
}