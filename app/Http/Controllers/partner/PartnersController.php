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
//      dd($result);
        return view('partners.partner_list');
    }

    public function getAllPartner()
    {
        $result = \DB::table('partners')
        ->orderBy('id', 'ASC')
        ->get();
        return $result;
    }

    public function showPartner()
    {
        return view('partners.partnerForm');
    }

    public function getPartnerData($partner_id)
    {
        $result = \DB::table('partners')
        ->where('id', $partner_id)
        ->get();
        return $result;
    }
}
