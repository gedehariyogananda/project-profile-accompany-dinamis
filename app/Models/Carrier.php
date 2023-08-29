<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;

    protected $fillable = ['name_position','identifier', 'syarat1', 'syarat2', 'syarat3', 'syarat4', 'syarat5','img','tenggat'];

    public function submits(){
        return $this->hasMany(Submit::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
