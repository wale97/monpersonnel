<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;

    protected $table = "customer";

    protected $fillable = ['nom','prenom','age','telephone',
    'email','password','cpassword','poste','conditions','prise_en_charge','logement','budget','debut',
    'identite','photo','ville','quartier'];


    public function worker()
    {
        return $this->belongsToMany(Worker::class);
    }

    public function getExpiresIn()
    {
        return 5 * 60; // 5 minutes before automatically login out
    }
}
