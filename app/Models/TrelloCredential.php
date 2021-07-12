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
        'token',
        'id_member_creator',
        'webhook_activity'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
