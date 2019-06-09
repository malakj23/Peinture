<?php

namespace App;
namespace App\models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tableau;
use App\Models\Commande;

class Tableau extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function commande() {
       
        return $this->hasMany(Commande::class);
    
}
}