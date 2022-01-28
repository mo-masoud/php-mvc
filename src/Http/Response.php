<?php
namespace MasoudMVC\Http;

class Response
{
    public function getStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function back()
    {
        header('Location:' . $_SERVER['HTTP_REFERER']);

        return $this;
    }

    public function redirect(string $url)
    {
        header('Location:' . $url);

        return $this;
    }
}