<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return $this->respondWith(message: 'Welcome to LekhakDB API 😃!');
    }
}
