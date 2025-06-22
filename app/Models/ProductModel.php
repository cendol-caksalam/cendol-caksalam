<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    // inisialisasi nama table
    protected $table = 'tb_product';

    // inisialisasi primary key pada table
    protected $primaryKey = 'id_product';

    // inisialisasi data yang dapat kita isi
    protected $fillable = ['name','desc','img','bg','color','btn','price'];

}
