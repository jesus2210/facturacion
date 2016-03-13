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
//    	dd($result);
    	return view('partners.partner_list');
    }

    public function getAllPartner()
    {
    	$result = \DB::table('partners')
    	->select('name','address', 'mail')
    	->orderBy('name', 'ASC')
    	->get();
    	return $result;
    }
}
