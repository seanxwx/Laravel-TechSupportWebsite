<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [ 'User_id', 'Email', 'First_name','Last_name' ];

    public function ticket() {
        return $this->hasMany('App\Models\Ticket');
    }
}
