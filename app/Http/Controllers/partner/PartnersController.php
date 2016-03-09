<?php

namespace facturacion\Http\Controllers\partner;

use Illuminate\Http\Request;
use facturacion\User;
use facturacion\Http\Requests;
use facturacion\Http\Controllers\Controller;

class PartnersController extends Controller
{
    //
    public function getIndex()
    {
    	$result = \DB::table('partners')
    	->orderBy('name', 'ASC')
    	->get();
//    	dd($result);
    	return view('partners.partner_list', compact('result'));


    }
}
