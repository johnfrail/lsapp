<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $PrimaryKey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
