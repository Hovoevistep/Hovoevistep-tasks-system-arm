<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegratedLists extends Model
{
    use HasFactory;
    protected $fillable = [
        'board_id',
        'list_id',
        'trello_list_id',
        'pos'
    ];

    public function board()
    {
        return $this->belongsTo(Boards::class);
    }

    public function list()
    {
        return $this->belongsTo(Lists::class);
    }
    public function integratedCardsFromLists()
    {
        return $this->hasMany(IntegratedCards::class, 'list_id');

    }

}
