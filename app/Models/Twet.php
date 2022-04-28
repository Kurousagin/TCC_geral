<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Twet extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function user(){ 
    	return $this->belongsTo('App\Models\User');
    }







}
