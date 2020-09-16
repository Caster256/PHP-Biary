<?php
/*
 *  loginProcess：處理登入的資訊
 *  createProcess：建立帳號
 */

namespace App\Services;

use App\Repositories\adminRepository;

class loginService
{
    private $admin;

    public function __construct(adminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function loginProcess($data)
    {
        $account = htmlentities($data['login_act'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlentities($data['login_pwd'], ENT_QUOTES, 'UTF-8');
        $where = [['account', $account], ['password', CRC32($pwd)]];

        if($this->admin->checkProcess($where)) {
            $this->setSession($account);
            return true;
        } else {
            return false;
        }
    }

    public function createProcess($data)
    {
        $account = htmlentities($data['login_act'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlentities($data['login_pwd'], ENT_QUOTES, 'UTF-8');
        $ins_arr = array(
            'account' => $account,
            'password' => CRC32($pwd),
            'old_pwd' => $pwd,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        return $this->admin->insertData($ins_arr);
    }

    public function setSession($name)
    {
        $session = [
            'name' => $name
        ];

        session($session);
    }
}
