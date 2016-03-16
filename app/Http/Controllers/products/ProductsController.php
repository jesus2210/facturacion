<?php

namespace facturacion\Http\Controllers\products;
use facturacion\User;
use facturacion\Products;
use Illuminate\Http\Request;
//use facturacion\Http\Requests;
use facturacion\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //declarated function index
    public function getIndex()
    {
        return view('products.ProductsList');
    }

    //with this function, all products are obtained
    public function getAllProducts()
    {	
    	
         $result = \DB::table('products')
         ->orderBy('id', 'ASC')
         ->get();
        return $result;
    }

    public function showProduct()
    {
        return view('products.ProductsForm');
    }

    public function getProductData($product_id)
    {
        $result = \DB::table('products')
        ->where('id', $product_id)
        ->get();
        return $result;
    }

    public function updateProduct(Request $request)
    {
        $product_id = $request->input('id');
        $product_obj = Products::find($product_id);
        $product_data = $request->all();
        $product_obj->update($product_data);
        $product_obj->save();
    }

    public function deleteProduct($product_id)
    {
        Products::destroy($product_id);
    }
}
