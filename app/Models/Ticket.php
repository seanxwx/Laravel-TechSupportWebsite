<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [ 'ID', 'OS', 'Software_issue',
        'Description' ,'Status'];

    public function user_id() {
        return $this->belongsTo('App\UserDetails');
    }
}
