<?php

use MasoudMVC\Application;
use MasoudMVC\Http\Request;
use MasoudMVC\Http\Response;
use MasoudMVC\Support\Hash;
use MasoudMVC\View\View;

if (!function_exists('app')) {
    function app()
    {
        static $instance = null;

        if (!$instance) {
            $instance = new Application();
        }

        return $instance;
    }
}

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        return $_ENV[$key] ?? value($default);
    }
}

if (!function_exists('bcrypt')) {
    function bcrypt($password)
    {
        return Hash::password($password);
    }
}

if (!function_exists('class_basename')) {
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

if (!function_exists('old')) {
    function old($key)
    {
        if (app()->session->hasFlash('old')) {
            return app()->session->getFlash('old')[$key];
        }
    }
}

if (!function_exists('request')) {
    function request($key = null)
    {
        $instance = new Request;
        if ($key) {
            return $instance->get($key);
        }

        if (is_array($key)) {
            return $instance->only($key);
        }

        return $instance;
    }
}

if (!function_exists('response')) {
    function response(): Response
    {
        return new Response;
    }
}

if (!function_exists('back')) {
    function back()
    {
        return response()->back();
    }
}

if (!function_exists('value')) {
    function value($value)
    {
        return ($value instanceof Closure) ? $value() : $value;
    }
}

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return dirname(__DIR__) . '/../' . $path;
    }
}

if (!function_exists('view_path')) {
    function view_path()
    {
        return base_path('views/');
    }
}

if (!function_exists('config_path')) {
    function config_path()
    {
        return base_path('config/');
    }
}

if (!function_exists('config')) {
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app()->config;
        }

        if (is_array($key)) {
            return app()->config->set($key);
        }

        return app()->config->get($key, $default);
    }
}

if (!function_exists('view')) {
    function view($view, $params = [])
    {
        View::make($view, $params);
    }
}