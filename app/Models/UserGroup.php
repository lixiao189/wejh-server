<?php
/**
 * User: cccRaim
 * Date: 2017/7/3
 * Time: 00:11
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    // 此处定义默认值，要保证每个值都有对应的访问器
    protected $defaults = array(

    );

    protected $hidden = [
        'id',
        'updated_at',
        'created_at'
    ];

    // 后期另外增加的字段,不需定义，只需在上面默认值处增加字段
    protected $appends;

    function __construct()
    {
        $this->appends = array_keys($this->defaults);
        parent::__construct(...func_get_args());
    }

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 返回collection的值，如不存在，则返回默认值
     * @param  string   $field
     * @return mixed
     */
    public function getValue($field) {
        if (isset($this->attributes[$field])) {
            return $this->attributes[$field];
        } else {
            return $this->defaults[$field];
        }
    }
}
