<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentDetails extends Model
{
    protected $fillable = [ 'Ticket_id','Comment'];

    public function ticket_id() {
        return $this->belongsTo('App\Models\Ticket');
    }
}
