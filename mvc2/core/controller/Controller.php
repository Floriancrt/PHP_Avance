<?php

namespace Core\Controller;

class Controller{
    public function render($view, $values = NULL){

        $pathView = str_replace(".", "/", $view);

        ob_start();
        if($values != NULL)
        {
            extract($values);
        }
        require ROOT . '/app/view/' . $pathView . '.php';
        $content = ob_get_clean();
        require ROOT . '/app/view/' . $this->default . '.php';

    }

    public function renderview($view, $values = NULL)
    {
        $pathView = str_replace(".", "/", $view);

        ob_start();
        if($values != NULL)
        {
            extract($values);
        }
        require ROOT . '/app/view/' . $pathView . '.php';
    }
}