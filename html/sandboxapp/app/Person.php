<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
      'name' => 'required',
      'mail' => 'email',
      'age'  => 'integer|min:0|max:150',
    ];

    public function getData()
    {
        return $this->id. ': '. $this->name. ' ('. $this->age. ')';
    }

    // 名前え検索するローカルスコープ
    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }
}
