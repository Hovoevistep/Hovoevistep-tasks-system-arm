<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrelloCredential extends Model
{
    use HasFactory;
    protected $table = 'trello_credentials';

    protected $fillable = [
        'user_id',
        'key',
        'token'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
