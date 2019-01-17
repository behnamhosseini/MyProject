@extends('user.Profile.master-Profile')

@section('content2')
    <div class="row">
        <div class="col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">علاقه مندی ها و سرگرمی </h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">شخصیت های مورد علاقه</span>
                                    <span class="text">{{$user->interests['figures']}}</span>
                                </li>
                                <li>
                                    <span class="title">برنامه های تلویزیونی مورد علاقه </span>
                                    <span class="text">{{$user->interests['tvChannels']}}</span>
                                </li>
                                <li>
                                    <span class="title">فیلم های مورد علاقه :</span>
                                    <span class="text">{{$user->interests['movies']}} </span>
                                </li>
                                <li>
                                    <span class="title">بازی های مورد علاقه :</span>
                                    <span class="text">{{$user->interests['games']}} </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">خواننده و باند موسیقی مورد علاقه :</span>
                                    <span class="text">{{$user->interests['musics']}}</span>
                                </li>
                                <li>
                                    <span class="title">کتاب های مورد علاقه :</span>
                                    <span class="text">{{$user->interests['books']}}</span>
                                </li>
                                <li>
                                    <span class="title">نوینده های مورد علاقه :</span>
                                    <span class="text">{{$user->interests['writers']}} </span>
                                </li>
                                <li>
                                    <span class="title">علاقه منده های دیگر :</span>
                                    <span class="text">{{$user->interests['others']}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">کار و تحصیلات </h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">کالج طراحی جدید </span>
                                    <span class="date">2001 - 2006</span>
                                    <span class="text">شکستن خوب، RedDevil، افراد علاقه مند، در حال اجرا مرده، یافت، مرد آمریکایی.</span>
                                </li>
                                <li>
                                    <span class="title">مرکز توسعه و تحقیقات بیز </span>
                                    <span class="date">2008</span>
                                    <span class="text">6 ماه کاآموزی در حوزه تحقیقات بهره وری برنامه نویسی </span>
                                </li>
                                <li>
                                    <span class="title">کالج دیجیتال </span>
                                    <span class="date">2010</span>
                                    <span class="text">پنج ماه کارآموزی طراحی سایت و دیتابیس </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">مدرسه </span>
                                    <span class="date">2006-2008</span>
                                    <span class="text">{{$user->school}} </span>
                                </li>
                                <li>
                                    <span class="title">دانشگاه </span>
                                    <span class="date">2008-2013</span>
                                    <span class="text">{{$user->university}} </span>
                                </li>
                                <li>
                                    <span class="title">تحصیلات </span>
                                    {{--<span class="date">2013-Now</span>--}}
                                    <span class="text">{{$user->degree}} </span>
                                </li>
                                <li>
                                    <span class="title">رشته تحصیلی </span>
                                    {{--<span class="date">2013-Now</span>--}}
                                    <span class="text">{{$user->fieldOfStudy}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">اطلاعات شخصی </h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="ui-block-content">
                    <ul class="widget w-personal-info">
                        <li>
                            <span class="title">درباره من :</span>
                            <span class="text">{{$user->bio}}</span>
                        </li>
                        <li>
                            <span class="title">تاریخ تولد :</span>
                            <span class="text">{{jdate($user->dateOfBirth)->format('Y/m/d')}}</span>
                        </li>
                        @if($user->sex == 'مرد')
                            <li>
                                <span class="title">سن :</span>
                                <span class="text">{{\Carbon\Carbon::parse($user->dateOfBirth)->diffInYears()}}</span>
                            </li>
                        @endif
                            <li>
                            <span class="title">محل زندگی :</span>
                            <span class="text">{{$user->city}} - {{$user->province}} </span>
                        </li>
                        <li>
                            <span class="title">اشتغال:</span>
                            <span class="text">{{$user->job}}</span>
                        </li>
                        <li>
                            <span class="title">زمان عضویت :</span>
                            <span class="text">{{$user->created_at->format('Y/m/d')}}</span>
                        </li>
                        <li>
                            <span class="title">جنسیت :</span>
                            <span class="text">{{$user->sex}} </span>
                        </li>
                        <li>
                            <span class="title">وضعیت رابطه :</span>
                            <span class="text">{{$user->maritalStatus}} </span>
                        </li>
                        <li>
                            <span class="title">ایمیل :</span>
                            <a href="#" class="text">{{$user->email}}</a>
                        </li>

                        <li>
                            <span class="title">شماره تماس :</span>
                            <span class="text">0{{$user->phoneNumber}}</span>
                        </li>
                        {{--<li>--}}
                            {{--<span class="title">اعتقادات مذهبی :</span>--}}
                            {{--<span class="text">-</span>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<span class="title">سیاست :</span>--}}
                            {{--<span class="text">لیبرال </span>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <div class="ui-block popup-chat popup-chat-responsive">
        <div class="ui-block-title">
            <span class="icon-status online"></span>
            <h6 class="title">چت</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete js-chat-open"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="ff9bd14f-d4c5-6401-3bff-816af18007ea">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">اصلا نگران نباش!</span>
                        <span class="chat-message-item">همه رو به خاطر دارم و فراموش نمیکنم.</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>
            </ul>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

        <form>



            <div class="form-group label-floating is-empty">
                <label class="control-label">برای ارسال کلید Enter را فشار دهید...</label>
                <textarea class="form-control" placeholder=""></textarea>
                <div class="add-options-message">
                    <a href="#" class="options-message">
                        <svg class="olymp-computer-icon"><use xlink:href="/icons/icons.svg#olymp-computer-icon"></use></svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon"><use xlink:href="/icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

                        <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat1.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat2.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat3.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat4.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat5.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat6.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat7.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat8.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat9.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat10.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat11.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat12.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat13.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat14.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat15.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat16.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat17.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat18.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat19.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat20.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat21.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat22.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat23.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat24.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat25.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat26.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/icon-chat27.png" alt="icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <span class="material-input"></span><span class="material-input"></span></div>

        </form>


    </div>
@endsection

