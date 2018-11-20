<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_staff', 'jam_dateng','jam_pulang','status','created_at','updated_at'
    ];
}
