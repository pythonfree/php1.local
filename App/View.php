<?php


namespace App;


class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function display($template)
    {
        include $template;
    }
}