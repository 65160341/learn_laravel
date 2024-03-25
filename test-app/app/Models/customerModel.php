<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    use HasFactory;
    protected $table = 'customer' ;
    protected $primaryKey = 'c_id' ;
    public $implements = true ; //เมื่อลบ 1 -> 2 แทน 1
    public $timestamps = false ; 
}
