<?php

function launch()
{
    global $config;

    // Set our defaults
    $controller = $config['default_controller'];
    $action = 'index';
    $url = '';

    // Get request url and script url
    $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
    $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

    // Get our url path and trim the / of the left and the right
    if ($request_url != $script_url) $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '', $request_url, 1), '/');

    // Fix our Base URL
    $base = parse_url($config['base_url']);
    if ($base['path']) {
        $url = str_ireplace(ltrim($base['path'], '/'), '', $url);
    }

    // Save GET queries
    $parsedUrl = parse_url(($request_url));
	if(isset($parsedUrl['query']) && $parsedUrl['query']){
        $queries = explode('&', $parsedUrl['query']);
        foreach ($queries as $query) {
            $queryInfo = explode('=', $query);
            $_GET[$queryInfo[0]] = end($queryInfo);
        }
    }

    // Split the url into segments
    $segments = explode('/', $url);
    for ($i = 0; $i < count($segments); $i++) {
        if (stripos($segments[$i], '?') !== false) {
            $segments[$i] = substr($segments[$i], 0, stripos($segments[$i], '?'));
        }
    }

    // Do our default checks
    if (isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
    if (isset($segments[1]) && $segments[1] != '') $action = $segments[1];

    // Fix any reserved keywords
    if (isset($config['reserved_translate'][$action])) {
        $action = $config['reserved_translate'][$action];
    }

    // Get our controller file
    $path = APP_DIR . 'controllers/' . $controller . '.php';
    if (file_exists($path)) {
        require_once($path);
    } else {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/' . $controller . '.php');
    }

    // Check the action exists
    if (!method_exists($controller, $action)) {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/' . $controller . '.php');
        $action = 'index';
    }

    $config['controller'] = $controller;
    $config['action'] = $action;

    // Create object and call method
    $obj = new $controller;
    die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}
