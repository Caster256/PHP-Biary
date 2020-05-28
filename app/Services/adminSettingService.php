<?php
/*
 *  getList：取得管理員清單
 *  storeData：儲存資料
 */

namespace App\Services;

use App\Repositories\adminRepository;

class adminSettingService
{
    private $admin;

    public function __construct(adminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function getList()
    {
        return $this->admin->getList();
    }

    public function storeData($data)
    {
        $action = $data['action'];

        if($action == 'insert') {
            $ins_arr = array(
                'name' => $data['account'],
                'password' => CRC32($data['password']),
                'old_pwd' => $data['password'],
                'expire_date' => '3000-01-01'
            );
            $tf = $this->admin->insertData($ins_arr);
        } else if($action == 'update') {
            $where = [['id', $data['id']]];
            $update_arr = array(
                'name' => $data['account'],
                'password' => CRC32($data['password']),
                'old_pwd' => $data['password']
            );
            $tf = $this->admin->updateData($where, $update_arr);
        } else if($action == 'delete') {
            $where = [['id', $data['id']]];
            $tf = $this->admin->deleteData($where);
        } else {
           $tf = false;
        }

        if($tf) {
            $ret['status'] = 'success';
        } else {
            $ret['status'] = 'failure';
            $ret['meg'] = $action;
        }

        return $ret;
    }
}
