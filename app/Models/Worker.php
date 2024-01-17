<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Worker extends Model
{
    use HasFactory;

    protected $table = "worker";

    protected $fillable = ['nom',
    'prenom','telephone','email','poste','experience','conditions','prise_en_charge','logement',
    'paie','debut','identite','casier','photo','ville','quartier'];



    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
