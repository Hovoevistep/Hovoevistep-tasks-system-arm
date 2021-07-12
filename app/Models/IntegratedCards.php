<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegratedCards extends Model
{
    use HasFactory;
    protected $fillable = [
        'list_id',
        'card_id',
        'trello_card_id',
        'pos'
    ];

    public function list()
    {
        return $this->belongsTo(Lists::class);
    }
    public function integratedCardsFromCards()
    {
        return $this->hasOne(Cards::class, 'id');
    }


}
