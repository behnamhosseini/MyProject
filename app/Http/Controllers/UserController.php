<?php

namespace App\Http\Controllers;

use App\PhoneActivationCode;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Morilog\Jalali\Jalalian;
use Alert;
use phpDocumentor\Reflection\Location;
use GeoIP;

class UserController extends Controller
{

    public function ip()
    {
        $ip=\Request::ip();
        $location=geoip($ip);
        $sity=$location->city;
        return $sity;
    }


    public function login()
    {
        return view('auth.login');
    }

    public function profilePage(User $user)
    {
        return view('user.Profile.ProfilePage',compact('user'));
    }

    public function setCustomStatus(Request $request)
    {
//        return $request;
        User::find(auth()->user()->id)->update([
           'customStatus'  => $request->customStatus
        ]);
    }

    public function getCustomStatus()
    {
        $result = User::find(auth()->user()->id)->customStatus;

        return response($result);
    }

    public function register()
    {

        return view('auth.register');
    }

    public function Newsfeed()
    {

        return view('user.Profile.Newsfeed');
    }

    public function logout()
    {

        auth()->logout();
        return redirect('/login');
    }


    public function Hobbies()
    {

        return view('user.Profile.Hobbies');
    }
    public function UpdateHobbies(Request $request)
    {

        $this->validate($request, [
            'tvChannels' => 'string|nullable',
            'movies' => 'string|nullable',
            'games' => 'string|nullable',
            'figures' => 'string|nullable',
            'musics' => 'string|nullable',
            'books' => 'string|nullable',
            'writers' => 'string|nullable',
            'others' => 'string|nullable',
        ]);

        $interests = [
            'tvChannels' => $request->tvChannels,
            'movies' => $request->movies,
            'games' => $request->games,
            'figures' => $request->figures,
            'musics' => $request->musics,
            'books' => $request->books,
            'writers' => $request->writers,
            'others' => $request->others,
        ];

        $user = auth()->user();
        $user->update([
           'interests' => $interests
        ]);
        return back();
    }

    public function ChangePassword()
    {

        return view('user.Profile.ChangePassword');
    }

    public function UpdatePassword(Request $request)
    {
//        return $request;
        $this->validate($request,[
            'newPassword' => 'required|string|min:6|confirmed',
            'password' => 'required|string|min:6',
        ]);


        if(password_verify($request->password , auth()->user()->password)){
            if(!password_verify($request->newPassword , auth()->user()->password))
            {
                User::find(auth()->user()->id)->update([
                    'password' => Hash::make($request->newPassword),
                ]);
                Alert::success( 'رمز شما با موفقیت تغییر یافت','موفقیت آمیز')->persistent('اوکی');
                return back();
            } else {
                Alert::warning( 'رمز وارد شده هم اکنون برای شما ثبت شده است','خطا!')->persistent('اوکی');
                return back();
            }

        } else {
            Alert::warning( 'رمز وارد شده اشتباه است.دوباره تلاش کنید','خطا')->persistent('اوکی');
            return back();

        }
    }



    public function checkexist(Request $request)

    {
        if ($request->uname) {
            if (User::where('userName', $request->uname)->pluck('userName')->first()) {
                return response(1);
            } else {
                return response(0);
            };
        } elseif ($request->email) {
            if (User::where('email', $request->email)->pluck('email')->first()) {
                return response(1);
            } else {
                return response(0);
            };
        }
    }

    public function checkMaritalStatus(Request $request)
    {
        $status = User::find($request->user_id)->maritalStatus;
        return response($status);
    }


    public function PersonalInformation()
    {
        return view('user.Profile.PersonalInformation');
    }

    public function accountSettings()
    {
        return view('user.Profile.AccountSettings');
    }


    public function savePersonalInformation()
    {

        $date = explode('/', request('dateOfBirth'));

        $date = \Morilog\Jalali\CalendarUtils::toGregorian($date[0], $date[1], $date[2]);
        $date = implode('-', $date);
        $request = request()->merge(['dateOfBirth' => $date]);

        $this->validate(request(), [
            'dateOfBirth' => 'nullable|date',
            'date' => 'nullable|date',
            'province' => 'nullable|string|max:40',
            'city' => 'nullable|string|max:40',
            'job' => 'nullable|string|max:40',
            'sex' => 'nullable|string',
            'maritalStatus' => 'nullable|string',
            'inRellWith' => 'nullable|string',
            'bio' => 'nullable|string',
            'degree' => 'nullable|string',
            'fieldOfStudy' => 'nullable|string',
            'school' => 'nullable|string',
            'university' => 'nullable|string',
            'facebook' => 'nullable|url|',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'telegram' => 'nullable|url',
        ]);

        $socialMedia = [
            'facebook' => \request('facebook'),
            'twitter' => \request('twitter'),
            'instagram' => \request('instagram'),
            'telegram' => \request('telegram'),
        ];


        if (auth()->check()) {

            $user = auth()->user()->id;
            $r = User::find($user)->update([
                'dateOfBirth' => request('dateOfBirth'),
                'province' => request('province'),
                'city' => request('city'),
                'job' => request('job'),
                'sex' => request('sex'),
                'maritalStatus' => request('maritalStatus'),
                'inRellWith' => request('inRellWith'),
                'bio' => request('bio'),
                'degree' => request('degree'),
                'fieldOfStudy' => request('fieldOfStudy'),
                'school' => request('school'),
                'university' => request('university'),
                'socialMedia' => $socialMedia,
            ]);
            return back();
        }
    }

    public function saveAccountSettings()
    {
//        return \request();

        $notifyBirthdays = request()->has('notifyBirthdays') ? request('notifyBirthdays') : 'off';
        $accountType = request()->has('accountType') ? request('accountType') == 'on' ? 'private' : '' : 'public';
        $whoCanFollow = request()->has('whoCanFollow') ? request('whoCanFollow') == 'on' ? 'everyBody' : '' : 'nobody';

        if (auth()->check()) {

            $this->validate(request(), [
                'firstName' => 'required',
                'lastName' => 'required',
                'userName' => 'required',
                'email' => 'required',

            ]);

            $user = auth()->user()->id;

            User::find($user)->update([
                'firstName' => request('firstName'),
                'lastName' => request('lastName'),
                'userName' => request('userName'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'phoneNumber' => session('phoneNumber'),
                'whoCanFollow' => $whoCanFollow,
                'accountType' => $accountType,
                'notifyBirthdays' => $notifyBirthdays,

            ]);
            return back();
        } else {
            $this->validate(request(), [
                'firstName' => 'required',
                'lastName' => 'required',
                'userName' => 'required',
                'email' => 'required',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $user = User::create([
                'firstName' => request('firstName'),
                'lastName' => request('lastName'),
                'userName' => request('userName'),
                'email' => request('email'),
                'password' => Hash::make(request('password')),
                'phoneNumber' => session('phoneNumber'),
                'whoCanFollow' => $whoCanFollow,
                'accountType' => $accountType,
                'notifyBirthdays' => $notifyBirthdays,
                "interests" => [
                    "tvChannels" => null,
                    "movies" => null,
                    "games"=> null,
                    "figures"=> null,
                    "musics"=> null,
                    "books"=> null,
                    "writers"=> null,
                    "others"=> null
                ],
                "profilePictures" => [
                    "header" => null,
                    "friends" => null,
                    "family"=> null,
                    "relatives"=> null,

                ],
                "socialMedia" => [
                    "facebook" => null,
                    "twitter" => null,
                    "instagram" => null,
                    "telegram" => null
                ],
            ]);
            PhoneActivationCode::where('phoneNumber', session('phoneNumber'))
                ->update(['activation' => 2]);
            auth()->loginUsingId($user->id);
            return redirect(route('PersonalInformation'));
        }

    }
}
