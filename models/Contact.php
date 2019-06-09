<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
class Contact extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}

