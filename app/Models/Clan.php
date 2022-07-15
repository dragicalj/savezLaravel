<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $table = 'clanovi';

    protected $fillable = ['ime', 'prezime', 'godinaStudija', 'mestoID', 'timID'];

    use HasFactory;
}
