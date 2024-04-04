<?php

namespace App\Models\rooms;

use App\Models\status\status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $fillables = [
        'id',
        'name',
        'type',
        'id_status',
    ];


    public function status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id');
    }
}
