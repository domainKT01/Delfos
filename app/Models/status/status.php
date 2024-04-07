<?php

namespace App\Models\status;

use App\Models\income\InCome;
use App\Models\rooms\rooms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $fillable = [
        'id',
        'status_name',
    ];

    public function rooms()
    {
        return $this->hasMany(rooms::class);
    }

    public function inComes()
    {
        return $this->hasMany(InCome::class);
    }
}
