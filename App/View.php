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
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return null;
        }
    }

    public function display($template)
    {
        include $template;
    }
}