<?php
namespace MasoudMVC;

use MasoudMVC\Database\DB;
use MasoudMVC\Http\Route;
use MasoudMVC\Http\Request;
use MasoudMVC\Http\Response;
use MasoudMVC\Support\Config;
use MasoudMVC\Database\Managers\MySQLManager;
use MasoudMVC\Support\Session;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;
    protected Config $config;
    protected DB $db;
    protected Session $session;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->route = new Route($this->request, $this->response);
        $this->config = new Config($this->loadConfigurations());
        $this->db = new DB($this->getDatabaseDriver());
        $this->session = new Session;
    }

    protected function getDatabaseDriver()
    {
        return match ($this->config->get('database.driver')) {
            'mysql' => new MySQLManager,
            default => new MySQLManager,
        };
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
        $this->db->init();
        $this->route->resolve();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
}
