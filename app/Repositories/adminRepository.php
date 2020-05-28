<?php
/*
 *  getList：取得管理員資料
 *  insertData：新增資料
 *  updateData：修改資料
 *  deleteData：刪除資料
 */

namespace App\Repositories;

use App\Entities\admin;

class adminRepository
{
    public function getList()
    {
        return admin::query()->where('expire_date', '>=', date('Y-m-d'))->get();
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
