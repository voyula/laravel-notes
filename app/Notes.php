<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'note',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
