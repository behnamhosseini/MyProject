@extends('user.Profile.master-Youraccount')
@section('content-y-a')
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">تنظیمات اکانت </h6>
                </div>
                <div class="ui-block-content">
                    <form method="post" action="/AccountSettings">
                        @csrf

                        <div class="row">
                            {{--result--}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="result"></div>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>


                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">نام</label>
                                    <input class="form-control" name="firstName" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->firstName  : '' }}">
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">ایمیل </label>
                                    <input class="form-control" placeholder="" name="email" id="email" type="email"
                                           value="{{auth()->check() ? auth()->user()->email  : '' }}">
                                </div>
                                @guest
                                <div class="form-group label-floating">
                                    <label class="control-label">رمز</label>
                                    <input class="form-control" placeholder="" type="password" name="password" value="">
                                </div>
                                @endguest
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">نام خانوادگی</label>
                                    <input class="form-control" placeholder="" type="text" name="lastName"
                                           value="{{auth()->check() ? auth()->user()->lastName  : '' }}">
                                </div>


                                <div class="form-group label-floating">
                                    <label class="control-label">نام کاربری </label>
                                    <input class="form-control" id="username" name="userName" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->userName  : '' }}">
                                </div>
                                @guest
                                <div class="form-group label-floating">
                                    <label class="control-label">تایید رمز</label>
                                    <input class="form-control" placeholder="" name="password_confirmation"
                                           type="password">
                                </div>
                                @endguest
                            </div>

                            <hr>


                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">
                                        <div class="h6">میخوای اکانتت خصوصی بشه؟</div>
                                        <p>تو این حالت کسی نمیتونه اطلاعات صفحه تورو ببینه</p>
                                    </div>

                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox"
                                                   {{auth()->check() ? auth()->user()->accountType == 'private' ? 'checked' : '' : 'checked' }} name="accountType">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">
                                        <div class="h6">اجازه میدی دیگران بهت درخواست دوستی بدن؟</div>
                                        <p>اگه این قابلیتو غیرفعال کنی کسی نمیتونه بهت درخواست دوستی بده</p>
                                    </div>

                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox"
                                                   {{auth()->check() ? auth()->user()->whoCanFollow == 'everyBody' ? 'checked' : '' : 'checked' }} name="whoCanFollow">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="description-toggle">
                                    <div class="description-toggle-content">
                                        <div class="h6">تولد دوستان</div>
                                        <p>دوست داری روز تولد دوستاتو بهت خبر بدم؟</p>
                                    </div>

                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox"
                                                   {{auth()->check() ? auth()->user()->notifyBirthdays == 'on' ? 'checked' : '' : 'checked' }} name="notifyBirthdays">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-secondary btn-lg full-width">انصراف</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-primary btn-lg full-width">اعمال تغییرات</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function () {
                $("#username").keyup(function () {
                    let uname = $("#username").val();
                    if (uname != '') {
                        $("#result").show();
                        $.ajax({
                            url: "/checkexist",
                            type: 'post',
                            data: {
                                uname: uname,
                                _token: '{{ csrf_token() }}',
                            },
                            success: function (response) {
                                if (response == 1) {
                                    $("#result").html("<div class='alert alert-danger'>این نام کاربری قبلا ثبت شده.</div>");
                                } else {
                                    $("#result").html("<div class='alert alert-success'>این نام کاربری قابل ثبت میباشد</div>");
                                }
                            }
                        });
                    } else {
                        $("#result").hide();
                    }
                });
            })
        </script>
        <script>
            $(document).ready(function () {
                $("#email").keyup(function () {
                    let email = $("#email").val();
                    if (email != '') {
                        $("#result").show();
                        $.ajax({
                            url: "/checkexist",
                            type: 'post',
                            data: {
                                email: email,
                                _token: '{{ csrf_token() }}',
                            },
                            success: function (response) {
                                if (response == 1) {
                                    $("#result").html("<div class='alert alert-danger'>این ایمیل قبلا ثبت شده.</div>");
                                } else {
                                    $("#result").html("<div class='alert alert-success'>این آدرس ایمیل قابل ثبت میباشد</div>");
                                }
                            }
                        });
                    } else {
                        $("#result").hide();
                    }
                });
            })
        </script>

@endsection