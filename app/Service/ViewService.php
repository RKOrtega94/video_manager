<?php

namespace App\Service;

use App\Models\Views;

class ViewService
{
    function store(array $data)
    {
        $view = Views::create($data);

        return $view;
    }

    function buildReport()
    {
    }
}
