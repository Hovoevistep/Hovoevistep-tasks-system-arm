<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;
    protected $fillable = [
       'name'
    ];

    public function integratedList()
    {
        return $this->hasMany(IntegratedLists::class, 'list_id');
    }
    public function integratedCards()
    {
        return $this->hasMany(integratedCards::class, 'list_id');
    }
}
