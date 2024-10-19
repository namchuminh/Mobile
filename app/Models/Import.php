<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ImportToUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function ImportToDetail()
    {
        return $this->hasMany('App\Models\ImportDetail', 'import_id', 'id');
    }
}
