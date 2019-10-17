<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tim extends Model
{
    // soft deletes
    use SoftDeletes;

    // ditambahkan untuk melindungi store data/apabila menggunakan cara 2
    // filable untuk kolom yg boleh diisi dan guarded untuk yg tidak boleh diisi
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
