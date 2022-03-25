<?php

namespace App\Utils;

class View{

    /**
     * Metodo responsável por verificar se o arquivo da view chamada abaixo existe
     * @param string $view
     * @return string
     */
    public static function getViewContent($view)
    {
        // Aqui a view é referenciada com o nome da pasta em que está(pages/home)
        $file = __DIR__ . '/../../resources/views/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @param array (string/numeric)
     * @return string
     */
    public static function render($view, $vars)
    {
        $viewContent = self::getViewContent($view);

        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{ '.$item.' }}';
        }, $keys);

        return str_replace($keys, array_values($vars), $viewContent);
    }
}