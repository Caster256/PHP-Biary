<?php
/*
 *  checkProcess：判斷帳密是否正確
 *  insertData：新增資料
 *  updateData：修改資料
 *  deleteData：刪除資料
 */

namespace App\Repositories;

use App\Entities\admin;

class adminRepository
{
    public function checkProcess($where)
    {
        return admin::query()->where($where)->count();
    }

    public function insertData($ins_arr)
    {
        return admin::query()->insert($ins_arr);
    }

    public function updateData($where, $update_data)
    {
        return admin::query()->where($where)->update($update_data);
    }

    public function deleteData($where)
    {
        return admin::query()->where($where)->delete();
    }
}
