@extends('user.Profile.master-Youraccount')
@section('content-y-a')
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">اطلاعات شخصی</h6>
                </div>
                <div class="ui-block-content">
                    <form id="information" method="post" action="/PersonalInformation">
                        @csrf

                        <div class="row">

                            @if($errors)
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            @endif

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">تاریخ تولد</label>
                                    <input name="dateOfBirth" type="text" class="birthday-date"
                                           value="{{auth()->check() ? auth()->user()->dateOfBirth  : '' }}"/>
                                    <span class="input-group-addon">
                                            <svg class="olymp-month-calendar-icon icon">
                                                <use xlink:href="icons/icons.svg#olymp-month-calendar-icon"></use>
                                            </svg>
                                        </span>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">استان</label>
                                    <input class="form-control" name="province" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->province  : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">شهر </label>
                                    <input class="form-control" placeholder="" name="city" type="text"
                                           value="{{auth()->check() ? auth()->user()->city  : '' }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">شغل</label>
                                    <input class="form-control" name="job" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->job  : '' }}">
                                </div>
                            </div>


                            <script>
                                $(document).ready(function () {
                                    $.ajax({
                                        url: "/checkMaritalStatus",
                                        type: 'post',
                                        data: {
                                            user_id: '{{auth()->check() ? auth()->user()->id : ''}}',
                                            _token: '{{ csrf_token() }}',
                                        },
                                        success: function (response) {
                                            if (response == 'متاهل') {
                                                $("#inRellWith").hide();
                                                $("#spouse").show();
                                            } else if (response == 'در رابطه') {
                                                $("#inRellWith").show();
                                                $("#spouse").hide();
                                            } else {
                                                $("#inRellWith").hide();
                                                $("#spouse").hide();
                                            }
                                        }
                                    });

                                    $("#maritalStatus").change(function () {
                                        let value = $(this).find("option:selected").attr("value");

                                        switch (value) {
                                            case "در رابطه":
                                                $("#inRellWith").show();
                                                $("#spouse").hide();
                                                break;
                                            case "متاهل":
                                                $("#spouse").show();
                                                $("#inRellWith").hide();
                                                break;
                                            default:
                                                $("#inRellWith").hide();
                                                $("#spouse").hide();
                                                break;
                                        }
                                    });

                                });
                            </script>

                            <div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">جنسیت </label>
                                    <select class=" form-control" name="sex" size="auto">
                                        <option value="زن" {{auth()->check() ? auth()->user()->sex == 'زن' ? 'selected' : '' : '' }}>
                                            زن
                                        </option>
                                        <option value="مرد" {{auth()->check() ? auth()->user()->sex == 'مرد' ? 'selected' : '' : '' }}>
                                            مرد
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">وضعیت تاهل</label>
                                    <select id="maritalStatus" class=" form-control" name="maritalStatus"
                                            size="auto">
                                        <option {{auth()->check() ? auth()->user()->maritalStatus == 'مجرد' ? 'selected' : '' : '' }} value="مجرد">
                                            مجرد
                                        </option>
                                        <option {{auth()->check() ? auth()->user()->maritalStatus == 'متاهل' ? 'selected' : '' : '' }} value="متاهل">
                                            متاهل
                                        </option>
                                        <option {{auth()->check() ? auth()->user()->maritalStatus == 'در رابطه' ? 'selected' : '' : '' }} id="inRell"
                                                value="در رابطه">در رابطه
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div id="inRellWith" class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">در رابطه با </label>
                                    <input class="form-control" placeholder="" name="inRellWith" type="text"
                                           value="{{auth()->check() ? auth()->user()->inRellWith  : ''}}">
                                </div>
                            </div>


                            <div id="spouse" class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group label-floating ">
                                    <label class="control-label">همسر </label>
                                    <input class="form-control" placeholder="" name="marriedTo" type="text"
                                           value="{{auth()->check() ? auth()->user()->inRellWith  : ''}}">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">در مورد خودتان بنویسید</label>
                                    <textarea class="form-control" placeholder="" name="bio">
                                        {{auth()->check() ? auth()->user()->bio  : '' }}
                                    </textarea>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating is-select">
                                    <label class="control-label">تحصیلات</label>
                                    <select class=" form-control" name="degree" size="auto">
                                        <option value="دیپلم" {{auth()->check() ? auth()->user()->degree == 'دیپلم' ? 'selected' : '' : '' }}>
                                            دیپلم
                                        </option>
                                        <option value="فوق دیپلم" {{auth()->check() ? auth()->user()->degree == 'فوق دیپلم' ? 'selected' : '' : '' }}>
                                            فوق دیپلم
                                        </option>
                                        <option value=" لیسانس" {{auth()->check() ? auth()->user()->degree == 'لیسانس' ? 'selected' : '' : '' }}>
                                            لیسانس
                                        </option>
                                        <option value="فوق لیسانس" {{auth()->check() ? auth()->user()->degree == 'فوق لیسانس' ? 'selected' : '' : '' }}>
                                            فوق لیسانس
                                        </option>
                                        <option value="دکتری" {{auth()->check() ? auth()->user()->degree == 'دکتری' ? 'selected' : '' : '' }}>
                                            دکتری
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">رشته تحصیلی</label>
                                    <input class="form-control" name="fieldOfStudy" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->fieldOfStudy  : '' }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">مدرسه</label>
                                    <input class="form-control" name="school" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->school  : '' }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">دانشگاه</label>
                                    <input class="form-control" name="university" placeholder="" type="text"
                                           value="{{auth()->check() ? auth()->user()->university  : '' }}">
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group with-icon label-floating">
                                    <label class="control-label">فیس بوک</label>
                                    <input id="facebook" class="form-control" style="direction: ltr; text-align: left"
                                           type="text"
                                           value="{{auth()->check() ? auth()->user()->socialMedia['facebook']  : '' }}"
                                           name="facebook">
                                    <i class="fab fa-facebook c-facebook" aria-hidden="true"></i>
                                </div>
                                <div class="form-group with-icon label-floating">
                                    <label class="control-label">توییتر</label>
                                    <input id="twitter" class="form-control" type="text"
                                           style="direction: ltr;text-align: left"
                                           value="{{auth()->check() ? auth()->user()->socialMedia['twitter']  : '' }}"
                                           name="twitter">
                                    <i class="fab fa-twitter c-twitter" aria-hidden="true"></i>
                                </div>
                                <div class="form-group with-icon label-floating ">
                                    <label class="control-label">اینستاگرام</label>
                                    <input id="instagram" class="form-control" style="direction: ltr; text-align: left"
                                           type="text" name="instagram"
                                           value="{{auth()->check() ? auth()->user()->socialMedia['instagram']  : '' }}">
                                    <i class="fab fa-instagram" aria-hidden="true" style="color: #fd7e14"></i>
                                </div>
                                <div class="form-group with-icon label-floating">
                                    <label class="control-label">تلگرام</label>
                                    <input id="telegram" class="form-control" type="text"
                                           style="direction: ltr; text-align: left"
                                           value="{{auth()->check() ? auth()->user()->socialMedia['telegram']  : '' }}"
                                           name="telegram">
                                    <i class="fab fa-telegram" style="color: royalblue"></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button class="btn btn-secondary btn-lg full-width">انصراف</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-lg full-width">اعمال تغییرات</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{--<script>--}}
            {{--$(document).click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--$.ajax({--}}
                    {{--url: '/enterinformation',--}}
                    {{--type: 'post',--}}
                    {{--data: $('#information')--}}
                {{--})--}}
            {{--})--}}
        {{--</script>--}}

        <script type="text/javascript">
            $(document).ready(function () {
                $(".birthday-date").pDatepicker({
                    format: 'YYYY/M/D',
                    // initialValueType: 'gregorian',
                    calendar: {
                        persian: {
                            locale: 'en'
                        }
                    }
                    // calendar:{
                    //     persian: {
                    //         leapYearMode: 'astronomical'
                    //     }
                    // }

                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#facebook').focus(function () {
                    $('#facebook').attr('value', 'http://facebook.com')
                }),
                    $('#facebook').focusout(function () {
                        $('#facebook').attr('value', '')
                    }),
                    $('#twitter').focus(function () {
                        $('#twitter').attr('value', 'http://twitter.com')
                    }),
                    $('#twitter').focusout(function () {
                        $('#twitter').attr('value', '')
                    }),
                    $('#instagram').focus(function () {
                        $('#instagram').attr('value', 'http://instagram.com')
                    }),
                    $('#instagram').focusout(function () {
                        $('#instagram').attr('value', '')
                    }),
                    $('#telegram').focus(function () {
                        $('#telegram').attr('value', 'http://telegram.me')
                    }),
                    $('#telegram').focusout(function () {
                        $('#telegram').attr('value', '')
                    })


            })
        </script>



@endsection

