<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    use HasFactory;

    public $fillable = ['numero', 'expediteur', 'destinataire', 'type', 'file'];


}
