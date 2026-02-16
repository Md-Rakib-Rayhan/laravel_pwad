<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;


class OtpController extends Controller
{


    public function SmsSend($receiverNumber, $otp)

    {
        // you need to enter the api for otp/ full code that procide by the otp provider


        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('api_key' => '38AzIN1uM1R7iV73I7Z70NVNn9Ig0YRNek4J1kL6','msg' => 'Mahfuj Vala asoni '.$otp. 'Otp ta dau','to' => $receiverNumber),
        ));
        $response = curl_exec($curl);
        unset($curl);


        // End of otp provider code


    }


    public function login()// for otp login page
    {
        return view('auth.otplogin');

    }

    
    public function otpinput(Request $request)// for otp login page
    {


    $user = User::where('mobile_no', $request->mobile_no)->first();
    $now = now();
    $otp = rand(123456, 999999);
    UserOtp::create([

            'user_id' => $user->id,
            'otp' => $otp,
            'expire_at' => $now->addMinutes(10)

    ]);

    $this->SmsSend($request->mobile_no, $otp);

    return view('auth.otpinput');

    }
}
