<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'short_url',
        'backgroundBottomColor',
        'backgroundTopColor',
        'backgroundImage',
        'desc'
    ];

    public function integratedBoard()
    {
        return $this->hasMany(IntegratedBoards::class, 'board_id');
    }

    public function integratedList()
    {
        return $this->hasMany(IntegratedLists::class, 'board_id');
    }


}
