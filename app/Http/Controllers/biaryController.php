<?php
/*
 *  index：日記畫面
 */
namespace App\Http\Controllers;

use App\Services\biaryService;

class biaryController extends Controller
{
    private $biary;

    public function __construct(biaryService $biary)
    {
        $this->biary = $biary;
    }

    public function index()
    {
        $binding = [];

        return View('user.biary', $binding);
    }
}
