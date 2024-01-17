<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    use HasFactory;
    
    protected $table = 'timer';

    protected $fillable = ['id_worker','id_customer','date_debut','date_fin'];

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timer');
    }
}
