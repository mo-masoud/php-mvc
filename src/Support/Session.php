<?php
namespace MasoudMVC\Support;

class Session
{
    public function __construct()
    {
        $flashMessages = $_SESSION['flash_messages'] ?? [];

        foreach ($flashMessages as $key => &$message) {
            $message['remove'] = true;
        }

        $_SESSION['flash_messages'] = $flashMessages;
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key)
    {
        return $_SESSION[$key] ?? false;
    }

    public function has(string $key)
    {
        return isset($_SESSION[$key]);
    }

    public function remove(string $key)
    {
        if ($this->has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function setFlash(string $key, $message)
    {
        $_SESSION['flash_messages'][$key] = [
            'remove' => false,
            'content' => $message,
        ];
    }

    public function getFlash(string $key)
    {
        return $_SESSION['flash_messages'][$key]['content'] ?? false;
    }

    public function hasFlash(string $key)
    {
        return (isset($_SESSION['flash_messages'][$key]));
    }

    private function removeFlashMessages()
    {
        $flashMessages = $_SESSION['flash_messages'] ?? [];

        foreach ($flashMessages as $key => &$message) {
            if ($message['remove']) {
                unset($flashMessages[$key]);
            }
        }

        $_SESSION['flash_messages'] = $flashMessages;
    }

    public function __destruct()
    {
        $this->removeFlashMessages();
    }
}