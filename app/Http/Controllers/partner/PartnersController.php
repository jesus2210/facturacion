<?php

namespace facturacion\Http\Controllers\partner;

use Illuminate\Http\Request;
use facturacion\User;
use facturacion\Partner;
use facturacion\Http\Controllers\Controller;

class PartnersController extends Controller
{

    public function getIndex()
    {
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

    public function updatePartner(Request $request)
    {
        $partner_id = $request->input('id');
        $partner_obj = Partner::find($partner_id);
        $partner_data = $request->all();
        $partner_obj->update($partner_data);
        $partner_obj->save();
    }

    public function deletePartner($partner_id)
    {
        Partner::destroy($partner_id);
    }
}
