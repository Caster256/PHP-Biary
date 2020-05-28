<?php
/*
 *  index：起始頁
 */
namespace App\Http\Controllers;


class indexController extends Controller
{
    public function index()
    {
        $binding = [];

        return View('user.index', $binding);
    }
}
