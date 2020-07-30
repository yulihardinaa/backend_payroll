<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{   
    public $timestamps = false;
    protected $primaryKey='nik';
    protected $table = 'dosen';
    protected $fillable = [
        
        'nama_dosen','nik','nidn','tgl_masuk','golongan','jabfung','jabstruk','email','jumanak','tukin'];

    
}
