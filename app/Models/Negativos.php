<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;

class Negativos extends Model
{
    use HasFactory;
    protected $table = 'negativos';
    //protected $primaryKey = 'ESTADO_ID';
    public $incrementing = false;
    public $timetamps = false;
    protected $attributes = ['ESTADO_ID','FECHA','CASOS'];


    public function estado(): BelongTo
    {
        return $this->belongsTo(Estado::class);
    }

 }
