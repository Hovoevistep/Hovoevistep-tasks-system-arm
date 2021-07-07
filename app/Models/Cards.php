<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_url',
        'desc',
        'idAttachment'
    ];

    public function integratedCard()
    {
        return $this->hasMany(integratedCard::class, 'card_id');
    }
}
