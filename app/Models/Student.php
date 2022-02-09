<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'Apogee','CIN','Email','Nom','Prenom','Filiere','Date_De_Naissance','Telephone'
      ];
}
