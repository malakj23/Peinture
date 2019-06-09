<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Formation;


class Formation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
