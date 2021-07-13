<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegratedBoards extends Model
{
    use HasFactory;
    protected $table = 'integrated_boards';

    protected $fillable = [
        'user_id',
        'board_id',
        'trello_board_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boards()
    {
        return $this->hasMany(Boards::class, 'id', 'board_id');
    }


}
