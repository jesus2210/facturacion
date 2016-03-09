<?php

namespace facturacion\Http\Controllers\companies;

use Illuminate\Http\Request;
use facturacion\Http\Requests;
use facturacion\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    //
    public function getIndex()
    {
    	$result = \DB::table('companies')
    	->orderBy('name', 'ASC')
    	->get();
//    	dd($result);
    	return view('companies.companies', compact('result'));


    }
}
