<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commande;
use App\Models\Tableau;

class Commande extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function TABLEAU()
    {
        return $this->belongsTo(Tableau::class);
    }
}