<?php
namespace MasoudMVC;

use MasoudMVC\Http\Request;
use MasoudMVC\Http\Response;
use MasoudMVC\Http\Route;
use MasoudMVC\Support\Config;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;
    protected Config $config;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->route = new Route($this->request, $this->response);
        $this->config = new Config($this->loadConfigurations());
    }

    private function loadConfigurations()
    {
        foreach (scandir(config_path()) as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $filename = explode('.', $file)[0];

            yield $filename => require config_path() . $file;
        }
    }

    public function run()
    {
        $this->route->resolve();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}
