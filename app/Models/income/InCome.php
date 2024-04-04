<?php

namespace App\Models\income;

use App\Models\clients\Clients;
use App\Models\rooms\rooms;
use App\Models\status\status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InCome extends Model
{
    use HasFactory;

    protected $table = "income";

    protected $fillable = [
        'id',
        'id_room',
        'id_client',
        'id_status',
        'from',
        'to',
        'requirements',
        'days',
        'typePayment',
        'payment',
    ];


    public function rooms()
    {
        return $this->belongsTo(rooms::class, 'id_room', 'id');
    }

    public function clients()
    {
        return $this->belongsTo(Clients::class, 'id_client', 'id');
    }

    public function status()
    {
        return $this->belongsTo(status::class, 'id_status', 'id');
    }
}
