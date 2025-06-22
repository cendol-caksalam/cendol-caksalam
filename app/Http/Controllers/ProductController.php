<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;use App\Models\ProductModel;



class ProductController
{
    public function ViewProduct() {
        $menu = ProductModel::all();
        return view('pages.product', [
            'title' => 'Product | Produk Kami',
            'menu' => $menu
        ]);
    }
}
