<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model

{
    protected $table ='barang';
    protected $guared = ['id_barang'];
    protected $prymaryKey = 'id';
    public $timestaps=false;
}