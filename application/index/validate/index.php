<?php

namespace app\index\validate;

use think\Validate;

class index extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	
		  'name'  => 'require|max:25',
		  'age'   => 'number|between:1,120',
	
	];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
		  'name.require' => '名称必须',
		  'name.max'     => '名称最多不能超过25个字符',
		  'age.number'   => '年龄必须是数字',
	];
}
