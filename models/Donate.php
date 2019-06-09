<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Donate;

use App\User;

class Donate extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
}
