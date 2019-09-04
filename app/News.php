<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    
}
    //News::create([
                //'name' =>"森本",
               // 'email' =>"morimoto@tech.com",
                //'password' => Hash::make("pass"),
               // ]);