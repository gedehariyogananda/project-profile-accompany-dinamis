<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'carrier_id','status_id', 'full_name', 'email', 'file_cv','phone','identifier'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function carrier(){
        return $this->belongsTo(Carrier::class);

    }

    public function status(){
        return $this->belongsTo(Status::class);
    }   

}
