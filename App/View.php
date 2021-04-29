<?php


namespace App;


class View
{
    protected $data = []; //данные для отображения

    public function __set($name, $value)
    {
        $this->data[$name]  = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($name, $this->data[$name]);
    }

    public function display($template)
    {
        include $template;
    }
}