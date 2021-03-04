<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable =[
        'event',
        'severity',
        'region',
        'guidelines',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
