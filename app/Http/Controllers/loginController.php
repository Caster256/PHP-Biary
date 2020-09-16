<?php
/*
 *  create：創建帳號
 *  createProcess：創帳號處理程序
 *  loginProcess：登入處理程序
 */
namespace App\Http\Controllers;

use App\Http\Requests\loginPost;
use App\Http\Requests\createPost;
use App\Services\loginService;

class loginController extends Controller
{
    private $login;

    public function __construct(loginService $login)
    {
        $this->login = $login;
    }

    public function create()
    {
        return View('user.create_account');
    }

    public function createProcess(createPost $createPost)
    {
        $data = $createPost->all();

        $ret = $this->login->createProcess($data);

        if($ret) {
            return redirect('biary');
        } else {
            return redirect()->back()->withErrors('建立帳號失敗，請稍後再試！')->withInput();
        }
    }

    public function loginProcess(loginPost $loginPost)
    {
        $data = $loginPost->all();

        $ret = $this->login->loginProcess($data);

        if($ret) {
            return redirect('biary');
        } else {
            return redirect()->back()->withErrors('帳號密碼錯誤！')->withInput();
        }
    }
}
