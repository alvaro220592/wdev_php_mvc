<?php

namespace App\Controllers\Pages;

use \App\Utils\View;

class Home
{
    /**
     * Método responsável por retornar a view home
     * @return string
     */
    public static function getHome()
    {
        return View::render('pages/home');
    }
}