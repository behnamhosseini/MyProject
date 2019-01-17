<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhoneActivationCode;
use Alert;

class PhoneActivationCodeController extends Controller
{

    public function create()
    {

        $this->validate(request(),[
            'number' => 'required|regex:/^09[0-9]{9}$/',
            'checkbox' =>'required'
        ]);

        $number=request('number');
        session(['phoneNumber' => $number]);

        if(!PhoneActivationCode::where('phoneNumber', $number)->first())
        {
            // random code
            $code='';
            for ($j=0; $j <5; $j++) {
                $rand = mt_rand(0, 9);
                $code.= $rand;
            }

            $expire=now()->addMinutes(2);

            $save = PhoneActivationCode::create([
                'phoneNumber' => request('number'),
                'code' => $code,
                'expires_at'=>$expire
            ]);

        } else {
            if (PhoneActivationCode::where('phoneNumber', $number)->pluck('activation')->first() == 2)
            {
                return response('/login');
            }
            elseif (PhoneActivationCode::where('phoneNumber', $number)->pluck('activation')->first() == 1)
            {
                return response('/AccountSettings');
            }
            else {
                PhoneActivationCode::where('phoneNumber', $number)->delete();
                return response('/register');
            }
        }

    }

    public function check()
    {
        $number = PhoneActivationCode::where('phoneNumber', session('phoneNumber'))->first();
        if(now() > $number->expires_at)
        {
            PhoneActivationCode::where('phoneNumber', session('phoneNumber'))->delete();
            return redirect('register');
        } else {
            if($number->code == request('recievedCode')){
                $phone=PhoneActivationCode::where('phoneNumber', session('phoneNumber'))->first();
                $phone->update(['activation' => 1]);
                return redirect('AccountSettings');
            } else {
                PhoneActivationCode::where('phoneNumber', session('phoneNumber'))->delete();
                session(['code'=>'کد وارد شده اشتباه است.دوباره تلاش کنید']);
                return redirect('register');
            }
        }

    }



}
