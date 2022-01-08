<?php
namespace MasoudMVC\Http;

use MasoudMVC\View\View;

class Route
{
    public function __construct(protected Request $request, protected Response $response)
    {
    }

    protected static array $routes = [];

    public static function get(string $url, callable|array $action)
    {
        self::$routes['get'][$url] = $action;
    }

    public static function post(string $url, callable|array $action)
    {
        self::$routes['post'][$url] = $action;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false;

        if (!array_key_exists($path, self::$routes[$method])) {
            $this->response->getStatusCode(404);
            View::makeError('404');
        }

        if (is_callable($action)) {
            call_user_func_array($action, []);
        }

        if (is_array($action)) {
            call_user_func_array([new $action[0], $action[1]], []);
        }
    }
}