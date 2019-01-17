@extends('user.Profile.master-Profile')
@section('content2')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title">دوستان {{$user->firstName}} </div>
                    <form class="w-search">
                        <div class="form-group with-button is-empty">
                            <input class="form-control" type="text" placeholder="جستجوی دوستان ...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-magnifying-glass-icon"></use>
                                </svg>
                            </button>
                            <span class="material-input"></span></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content3')
    <div class="row">
        @foreach(\App\User::all() as $u)
           @if($u->id != $user->id)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="ui-block">
                        <div class="friend-item">
                            <div class="friend-header-thumb">
                                <img src="{{$u->profilePictures['header'] != null ? $u->profilePictures['header'] : '/img/top-header7.png'}}" alt="friend">
                            </div>

                            <div class="friend-item-content">

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                        </svg>
                                        <ul class="more-dropdown">
                                            <li>
                                                <a href="#">گزارش دادن پروفایل </a>
                                            </li>
                                            <li>
                                                <a href="#">باک کردن پروفایل </a>
                                            </li>
                                            <li>
                                                <a href="#">خاموش کردن اطلاعیه ها </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img src="{{$u->profilePictures['everyOne']}}" alt="author">
                                    </div>
                                    <div class="author-content">
                                        <a href="#" class="h5 author-name">{{$u->fullName()}} </a>
                                        <div class="country">{{$u->province}} - {{$u->city}} </div>
                                    </div>
                                </div>

                                <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-0">
                                    <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                            <p class="friend-about">
                                                {{$u->bio}}
                                            </p>

                                            <div class="friend-since">
                                                <span>شروع وستی از :</span>
                                                <div class="h6">مهر 2014</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                            <div class="friend-count">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">52</div>
                                                    <div class="title">دوستان</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">تصاویر </div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">ویدئو </div>
                                                </a>
                                            </div>
                                            <div class="control-block-button">
                                                <a href="#" class="btn btn-control bg-blue">
                                                    <svg class="olymp-happy-face-icon">
                                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control bg-purple">
                                                    <svg class="olymp-chat---messages-icon">
                                                        <use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                            <p class="friend-about">
                                                {{$u->bio}}
                                            </p>

                                            <div class="friend-since">
                                                <span>شروع وستی از :</span>
                                                <div class="h6">مهر 2014</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                            <div class="friend-count">
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">52</div>
                                                    <div class="title">دوستان</div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">240</div>
                                                    <div class="title">تصاویر </div>
                                                </a>
                                                <a href="#" class="friend-count-item">
                                                    <div class="h6">16</div>
                                                    <div class="title">ویدئو </div>
                                                </a>
                                            </div>
                                            <div class="control-block-button">
                                                <a href="#" class="btn btn-control bg-blue">
                                                    <svg class="olymp-happy-face-icon">
                                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                                    </svg>
                                                </a>

                                                <a href="#" class="btn btn-control bg-purple">
                                                    <svg class="olymp-chat---messages-icon">
                                                        <use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div></div>

                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection

@section('main')

    <div class="ui-block popup-chat popup-chat-responsive">
        <div class="ui-block-title">
            <span class="icon-status online"></span>
            <h6 class="title">چت</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon">
                    <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                </svg>
                <svg class="olymp-little-delete js-chat-open">
                    <use xlink:href="/icons/icons.svg#olymp-little-delete"></use>
                </svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="efa1cb6c-5cae-4105-ead1-f8a6e81f46a3">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">اصلا نگران نباش!</span>
                        <span class="chat-message-item">همه رو به خاطر دارم و فراموش نمیکنم.</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
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
                        <svg class="olymp-computer-icon">
                            <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                        </svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon">
                            <use xlink:href="/icons/icons.svg#olymp-happy-sticker-icon"></use>
                        </svg>

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
                <span class="material-input"></span>
                <span class="material-input"></span></div>

        </form>


    </div>
@endsection

