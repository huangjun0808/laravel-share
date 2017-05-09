<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_permission')->insert([
            ['name'=>'admin.permission','uri'=>'','label'=>'权限管理','description'=>'','cid'=>'0','level'=>'1','icon'=>'fa-users','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.permission.create','uri'=>'admin/permission/create','label'=>'添加权限','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-plus-square','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.permission.destroy','uri'=>'admin/permission/{permission}','label'=>'删除权限','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.permission.edit','uri'=>'admin/permission/{permission}/edit','label'=>'编辑权限','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.permission.index','uri'=>'admin/permission/index','label'=>'权限列表','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'1','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.permission.show','uri'=>'admin/permission/{role}','label'=>'权限详情','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.role.create','uri'=>'admin/role/create','label'=>'添加角色','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.role.destory','uri'=>'admin/role/{role}','label'=>'删除角色','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.role.edit','uri'=>'admin/role/{role}/edit ','label'=>'编辑角色','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.role.index','uri'=>'admin/role/index','label'=>'角色列表','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'1','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.role.show','uri'=>'admin/role/index','label'=>'角色详情','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.user.create','uri'=>'admin/user/create','label'=>'添加用户','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.user.destory','uri'=>'admin/user/{user}','label'=>'删除用户','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.user.edit','uri'=>'admin/user/{user}/edit','label'=>'编辑用户','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.user.index','uri'=>'admin/user/index','label'=>'用户列表','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'1','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'admin.user.show','uri'=>'admin/user/{user}','label'=>'用户详情','description'=>'','cid'=>'1','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::dashboard','uri'=>'admin/log-viewer','label'=>'日志面板','description'=>'','cid'=>'18','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::logs','uri'=>'','label'=>'日志管理','description'=>'系统日志','cid'=>'0','level'=>'1','icon'=>'fa-files-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::logs.delete','uri'=>'admin/log-viewer/logs/delete','label'=>'删除日志','description'=>'','cid'=>'18','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::logs.download','uri'=>'admin/log-viewer/logs/{date}/download','label'=>'日志下载','description'=>'','cid'=>'18','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::logs.list','uri'=>'admin/log-viewer/logs','label'=>'日志列表','description'=>'','cid'=>'18','level'=>'2','icon'=>'fa-circle-o','type'=>'1','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
            ['name'=>'log-viewer::logs.show#log-viewer::logs.filter','uri'=>'admin/log-viewer/logs/{date}||admin/log-viewer/logs/{date}/{level}','label'=>'日志详情','description'=>'','cid'=>'18','level'=>'2','icon'=>'fa-circle-o','type'=>'0','created_at'=>date('Y-m-d H:i:s',time()),'updated_at'=>date('Y-m-d H:i:s',time()),],
        ]);
    }
}
