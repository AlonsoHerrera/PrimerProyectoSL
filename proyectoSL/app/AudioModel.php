<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioModel extends Model
{
    //
    protected $fillable = [
    	'pad',
    	'format',
    ];

    protected $table = 'audio';
    
    protected $primaryKey = 'id';
}
