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
        $name = htmlentities($data['login_name'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlentities($data['login_pwd'], ENT_QUOTES, 'UTF-8');
        $where = [['name', $name], ['password', CRC32($pwd)]];

        if($this->admin->checkProcess($where)) {
            return true;
        } else {
            return false;
        }
    }

    public function createProcess($data)
    {
        $name = htmlentities($data['login_name'], ENT_QUOTES, 'UTF-8');
        $pwd = htmlentities($data['login_pwd'], ENT_QUOTES, 'UTF-8');
        $ins_arr = array(
            'name' => $name,
            'password' => CRC32($pwd),
            'old_pwd' => $pwd,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        return $this->admin->insertData($ins_arr);
    }
}
