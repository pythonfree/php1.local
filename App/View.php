<?php


namespace App;


class View
{
    protected $data = []; //данные для отображения

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function display($template)
    {
        include $template;
    }
}