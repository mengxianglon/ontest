<?php
namespace app\common\validate;
use think\Validate;

class Kungfu extends Validate
{
    protected $rule = [
        'username|用户名'=>'require',
        'password|密码'=>'require',
        'nickname|昵称'=>'require',
        'password|密码'=>'require|confirm:password',
    ];
    public function sceneLogin()
    {
        return $this->only(['username','password'])
            ->append('nickname','unique:user');
    }
}