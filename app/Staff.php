<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{   
    public $timestamps = false;
    protected $primaryKey='nik';
    protected $table = 'staff';
    protected $fillable = [
        
        'nama_staff','nik','tgl_masuk','golongan','jabstruk','email','jumanak','tukin'];

    
}
