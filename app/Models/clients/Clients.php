<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $fillable = [
        'id',
        'docType',
        'identification',
        'firstName',
        'secondName',
        'firstLastName',
        'secondLastName',
        'telephone',
        'birthday',
        'address,'
    ];
}
