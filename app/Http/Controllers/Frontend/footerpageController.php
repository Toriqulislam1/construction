<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class footerpageController extends Controller
{
    function mainBusiness(){

        return view('frontend.footer-page.mainBusiness');
    }//end

    function companiMission(){

        return view('frontend.footer-page.campanimission');
    }//end
    function presence(){

        return view('frontend.footer-page.precence');
    }//end
    function workplaceHealthSafety(){

        return view('frontend.footer-page.workplace');
    }//end
    function organizationValues(){

        return view('frontend.footer-page.organization');
    }//end
    function merits(){

        return view('frontend.footer-page.merit');
    }//end

}
