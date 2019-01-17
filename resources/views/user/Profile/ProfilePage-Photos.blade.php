@extends('user.Profile.master-Profile')

@section('content2')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title">گالری تصاویر {{$user->firstName}} </div>

                    {{--<div class="block-btn align-left">--}}
                        {{--<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">ساختن آلبوم +</a>--}}

                        {{--<a href="#" data-toggle="modal" data-target="#update-header-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">اضافه کردن عکس </a>--}}
                    {{--</div>--}}

                    {{--<ul class="nav nav-tabs photo-gallery" role="tablist">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" data-toggle="tab" href="#photo-page" role="tab">--}}
                                {{--<svg class="olymp-photos-icon">--}}
                                    {{--<use xlink:href="/icons/icons.svg#olymp-photos-icon"></use>--}}
                                {{--</svg>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link active" data-toggle="tab" href="#album-page" role="tab">--}}
                                {{--<svg class="olymp-albums-icon">--}}
                                    {{--<use xlink:href="/icons/icons.svg#olymp-albums-icon"></use>--}}
                                {{--</svg>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                    {{--<a href="#" class="more">--}}
                        {{--<svg class="olymp-three-dots-icon">--}}
                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                        {{--</svg>--}}
                    {{--</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content3')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="photo-page" role="tabpanel">

                    <div class="photo-album-wrapper">

                        @if($user->profilePictures['header'] != null)
                            <div class="photo-item half-width col-12">
                                <img src="{{$user->profilePictures['header']}}" alt="photo">
                                <div class="overlay overlay-dark"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>15</span>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
                                <div class="content">
                                    <a href="#" class="h6 title">تصویر هدر </a>
                                    {{--<time class="published" datetime="2017-03-24T18:18">یک هفته قبل </time>--}}
                                </div>
                            </div>

                        @else
                            <div class="photo-item half-width">
                                <img src="/img/top-header7.png" alt="photo">
                                <div class="overlay overlay-dark"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>15</span>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
                                <div class="content">
                                    <a href="#" class="h6 title">تصویر هدر </a>
                                    <time class="published" datetime="2017-03-24T18:18">فعلا تصویر هدری قرار داده نشده </time>
                                </div>
                            </div>
                        @endif
                        <div class="photo-item col-4-width">
                            <img src="{{$user->profilePictures['everyOne'] ? $user->profilePictures['everyOne'] : '/img/photo-item2.jpg'}}" alt="photo">
                            <div class="overlay overlay-dark"></div>
                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>15</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                            <div class="content">
                                <a href="#" class="h6 title">تصویر پروفایل عمومی </a>
                                {{--<time class="published" datetime="2017-03-24T18:18">1 هفته قبل </time>--}}
                            </div>
                        </div>

                        <div class="photo-item col-4-width">
                            <img src="{{$user->profilePictures['family'] ? $user->profilePictures['family'] : '/img/photo-item2.jpg'}}" alt="photo">
                            <div class="overlay overlay-dark"></div>
                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>15</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                            <div class="content">
                                <a href="#" class="h6 title">تصویر پروفایل خانواده </a>
                                {{--<time class="published" datetime="2017-03-24T18:18">1 هفته قبل </time>--}}
                            </div>
                        </div>

                        <div class="photo-item col-4-width">
                            <img src="{{$user->profilePictures['relatives'] ? $user->profilePictures['relatives'] : '/img/photo-item2.jpg'}}" alt="photo">
                            <div class="overlay overlay-dark"></div>
                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>15</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                            <div class="content">
                                <a href="#" class="h6 title">تصویر پروفایل آشنایان </a>
                                {{--<time class="published" datetime="2017-03-24T18:18">1 هفته قبل </time>--}}
                            </div>
                        </div>

                        <div class="photo-item col-4-width">
                            <img src="{{$user->profilePictures['friends'] ? $user->profilePictures['friends'] : '/img/photo-item2.jpg'}}" alt="photo">
                            <div class="overlay overlay-dark"></div>
                            <a href="#" class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                            </a>
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>15</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
                            <div class="content">
                                <a href="#" class="h6 title">تصویر پروفایل دوستان </a>
                                {{--<time class="published" datetime="2017-03-24T18:18">1 هفته قبل </time>--}}
                            </div>
                        </div>

                    </div>

                </div>

                {{--<div class="tab-pane active" id="album-page" role="tabpanel">--}}

                    {{--<div class="photo-album-wrapper">--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item create-album" data-mh="album-item" style="height: 415.547px;">--}}

                                {{--<a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>--}}

                                {{--<div class="content">--}}

                                    {{--<a href="#" class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">--}}
                                        {{--<svg class="olymp-plus-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-plus-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" class="title h5" data-toggle="modal" data-target="#create-photo-album">ساختن آلبوم </a>--}}
                                    {{--<span class="sub-title">فقط چند دقیقه زمان میبرد !</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-item2.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">تعطیلات جنوب ایران </a>--}}
                                    {{--<span class="sub-title">آخرین اضفه کردن : 2 ساعت قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-0">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}

                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-album1.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">تصاویر تابستان 2016</a>--}}
                                    {{--<span class="sub-title">آخرین اضافه کردن : 5 هفته قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-1">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}

                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-album2.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">غذاهای خیابانی </a>--}}
                                    {{--<span class="sub-title">آخرین اضافه کردن : 6 دقیقه قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-2 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-2">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}

                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-2 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-album3.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">هنر خطاطی </a>--}}
                                    {{--<span class="sub-title">آخرین اضافه کردن : 16 ساعت قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-3 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-3">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}


                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-3 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-album4.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">کوه های مریخی </a>--}}
                                    {{--<span class="sub-title">آخرین اضافه کردن : 13 دقیقه قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-4 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-4">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar30-sm.jpg" alt="author">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar29-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar28-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar27-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#" class="all-users">+3</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}


                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic5.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic7.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic8.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic2.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar30-sm.jpg" alt="author">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar29-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar28-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar27-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#" class="all-users">+3</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-4 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-item6.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">دریاچه های طبیعی </a>--}}
                                    {{--<span class="sub-title">آخرین اضافه کردن : 57 دقیقه قبل </span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-5 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-5">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}


                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-5 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="photo-album-item-wrap col-4-width">--}}
                            {{--<div class="photo-album-item" data-mh="album-item" style="height: 415.547px;">--}}
                                {{--<div class="photo-item">--}}
                                    {{--<img src="/img/photo-album5.jpg" alt="photo">--}}
                                    {{--<div class="overlay overlay-dark"></div>--}}
                                    {{--<a href="#" class="more">--}}
                                        {{--<svg class="olymp-three-dots-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>--}}
                                        {{--</svg>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="post-add-icon">--}}
                                        {{--<svg class="olymp-heart-icon">--}}
                                            {{--<use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>--}}
                                        {{--</svg>--}}
                                        {{--<span>324</span>--}}
                                    {{--</a>--}}

                                    {{--<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>--}}
                                {{--</div>--}}

                                {{--<div class="content">--}}
                                    {{--<a href="#" class="title h5">پرتوریت های زمستانی </a>--}}
                                    {{--<span class="sub-title">Last Added: 1 year ago</span>--}}

                                    {{--<div class="swiper-container swiper-swiper-unique-id-6 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-6">--}}
                                        {{--<div class="swiper-wrapper" style="width: 836px; transform: translate3d(209px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar30-sm.jpg" alt="author">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar29-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}


                                            {{--<div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 209px;">--}}
                                                {{--<div class="friend-count">--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">24</div>--}}
                                                        {{--<div class="title">تصاویر </div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">86</div>--}}
                                                        {{--<div class="title">پیام ها</div>--}}
                                                    {{--</a>--}}
                                                    {{--<a href="#" class="friend-count-item">--}}
                                                        {{--<div class="h6">16</div>--}}
                                                        {{--<div class="title">اشتراک</div>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 209px;">--}}
                                                {{--<ul class="friends-harmonic">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar30-sm.jpg" alt="author">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#">--}}
                                                            {{--<img src="/img/avatar29-sm.jpg" alt="user">--}}
                                                        {{--</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div></div>--}}

                                        {{--<!-- If we need pagination -->--}}
                                        {{--<div class="swiper-pagination pagination-swiper-unique-id-6 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}
            </div>

        </div>
    </div>
@endsection


@section('main')
    <div class="modal fade" id="open-photo-popup-v1">
        <div class="modal-dialog ui-block window-popup open-photo-popup open-photo-popup-v1">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="open-photo-thumb">
                <div class="swiper-container swiper-swiper-unique-id-7 initialized swiper-container-horizontal swiper-container-rtl" data-slide="fade" id="swiper-unique-id-7">
                    <div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2">
                            <div class="photo-item">
                                <img src="/img/open-photo1.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0">
                            <div class="photo-item">
                                <img src="/img/open-photo1.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title"> تصاویر 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 هفته قبل </time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1">
                            <div class="photo-item">
                                <img src="/img/open-photo1.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="2">
                            <div class="photo-item">
                                <img src="/img/open-photo1.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                            <div class="photo-item">
                                <img src="/img/open-photo1.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title"> تصاویر 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 هفته قبل </time>
                                </div>
                            </div>
                        </div></div>

                    <!--Prev Next Arrows-->

                    <svg class="btn-next-without olymp-popup-right-arrow">
                        <use xlink:href="/icons/icons.svg#olymp-popup-right-arrow"></use>
                    </svg>

                    <svg class="btn-prev-without olymp-popup-left-arrow">
                        <use xlink:href="/icons/icons.svg#olymp-popup-left-arrow"></use>
                    </svg>
                </div>
            </div>

            <div class="open-photo-content">

                <article class="hentry post">

                    <div class="post__author author vcard inline-items">
                        <img src="/img/author-page.jpg" alt="author">

                        <div class="author-date">
                            <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                            <div class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    2 hours ago
                                </time>
                            </div>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Edit Post</a>
                                </li>
                                <li>
                                    <a href="#">Delete Post</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                                <li>
                                    <a href="#">Select as Featured</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the
                        new catalog.</p>

                    <p>With:
                        <a href="#">Jessy Owen</a>,
                        <a href="#">Marina Valentine</a>
                    </p>

                    <div class="post-additional-info inline-items">

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                            </svg>
                            <span>148</span>
                        </a>

                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic7.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic8.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic9.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic10.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/friend-harmonic11.jpg" alt="friend">
                                </a>
                            </li>
                        </ul>

                        <div class="names-people-likes">
                            <a href="#">Diana</a>,
                            <a href="#">Nicholas</a> and
                            <br>13 more liked this
                        </div>


                        <div class="comments-shared">
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-speech-balloon-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-speech-balloon-icon"></use>
                                </svg>
                                <span>61</span>
                            </a>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                                <span>32</span>
                            </a>
                        </div>


                    </div>

                    <div class="control-block-button post-control-button">

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-like-post-icon">
                                <use xlink:href="/icons/icons.svg#olymp-like-post-icon"></use>
                            </svg>
                        </a>

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-comments-post-icon">
                                <use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use>
                            </svg>
                        </a>

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-share-icon">
                                <use xlink:href="/icons/icons.svg#olymp-share-icon"></use>
                            </svg>
                        </a>

                    </div>

                </article>

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="edab534e-5204-08da-f005-a5ab76522b27">

                    <ul class="comments-list">
                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="/img/avatar48-sm.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">Marina Valentine</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            46 mins ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>

                            </div>

                            <p>I had a great time too!! We should do it again!</p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>
                            <a href="#" class="reply">Reply</a>
                        </li>

                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="/img/avatar4-sm.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">Chris Greyson</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            1 hour ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>

                            </div>

                            <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit.</p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>7</span>
                            </a>
                            <a href="#" class="reply">Reply</a>

                        </li>
                    </ul>

                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                <form class="comment-form inline-items">

                    <div class="post__author author vcard inline-items">
                        <img src="/img/author-page.jpg" alt="author">

                        <div class="form-group with-icon-right is-empty">
                            <textarea class="form-control" placeholder="Press Enter to post..."></textarea>
                            <div class="add-options-message">
                                <a href="#" class="options-message">
                                    <svg class="olymp-camera-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <span class="material-input"></span></div>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <div class="modal fade" id="open-photo-popup-v2">
        <div class="modal-dialog ui-block window-popup open-photo-popup open-photo-popup-v2">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="open-photo-thumb">

                <div class="swiper-container swiper-swiper-unique-id-8 initialized swiper-container-horizontal swiper-container-fade swiper-container-rtl" data-effect="fade" data-autoplay="4000" id="swiper-unique-id-8">

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>
                        <!-- Slides -->

                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="3" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="4" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="5" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="6" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="7" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide" data-swiper-slide-index="8" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <div class="photo-item">
                                <img src="/img/open-photo2.jpg" alt="photo">
                                <div class="overlay"></div>
                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>
                                <a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <div class="content">
                                    <a href="#" class="h6 title">Photoshoot 2016</a>
                                    <time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
                                </div>
                            </div>
                        </div></div>

                </div>

                <!--Pagination tabs-->

                <div class="slider-slides">
                    <a href="#" class="slides-item">
                        <img src="/img/photo-tabs1.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item slide-active">
                        <img src="/img/photo-tabs2.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs3.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs4.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>
                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs5.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs6.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs7.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs8.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <a href="#" class="slides-item ">
                        <img src="/img/photo-tabs9.jpg" alt="slide">
                        <div class="overlay overlay-dark"></div>
                    </a>

                    <!--Prev Next Arrows-->

                    <svg class="btn-next olymp-popup-right-arrow">
                        <use xlink:href="/icons/icons.svg#olymp-popup-right-arrow"></use>
                    </svg>

                    <svg class="btn-prev olymp-popup-left-arrow">
                        <use xlink:href="/icons/icons.svg#olymp-popup-left-arrow"></use>
                    </svg>

                </div>

            </div>

            <div class="open-photo-content">

                <article class="hentry post">

                    <div class="post__author author vcard inline-items">
                        <img src="/img/author-page.jpg" alt="author">

                        <div class="author-date">
                            <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                            <div class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    2 hours ago
                                </time>
                            </div>
                        </div>

                        <div class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                            <ul class="more-dropdown">
                                <li>
                                    <a href="#">Edit Post</a>
                                </li>
                                <li>
                                    <a href="#">Delete Post</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                                <li>
                                    <a href="#">Select as Featured</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the
                        new catalog.</p>

                    <p>With:
                        <a href="#">Jessy Owen</a>,
                        <a href="#">Marina Valentine</a>
                    </p>

                    <div class="post-additional-info inline-items">

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon">
                                <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                            </svg>
                            <span>148</span>
                        </a>


                        <div class="comments-shared">
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-speech-balloon-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-speech-balloon-icon"></use>
                                </svg>
                                <span>61</span>
                            </a>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                                <span>32</span>
                            </a>
                        </div>


                    </div>

                    <div class="control-block-button post-control-button">

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-like-post-icon">
                                <use xlink:href="/icons/icons.svg#olymp-like-post-icon"></use>
                            </svg>
                        </a>

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-comments-post-icon">
                                <use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use>
                            </svg>
                        </a>

                        <a href="#" class="btn btn-control">
                            <svg class="olymp-share-icon">
                                <use xlink:href="/icons/icons.svg#olymp-share-icon"></use>
                            </svg>
                        </a>

                    </div>

                </article>

                <div class="mCustomScrollbar ps ps--theme_default" data-mcs-theme="dark" data-ps-id="72b65bd0-3210-c4fe-c216-bf422f7c7e66">

                    <ul class="comments-list">
                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="/img/avatar48-sm.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">Marina Valentine</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            46 mins ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>

                            </div>

                            <p>I had a great time too!! We should do it again!</p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>
                            <a href="#" class="reply">Reply</a>
                        </li>

                        <li>
                            <div class="post__author author vcard inline-items">
                                <img src="/img/avatar4-sm.jpg" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">Chris Greyson</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            1 hour ago
                                        </time>
                                    </div>
                                </div>

                                <a href="#" class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                </a>

                            </div>

                            <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit.</p>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>7</span>
                            </a>
                            <a href="#" class="reply">Reply</a>

                        </li>
                    </ul>

                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                <form class="comment-form inline-items">

                    <div class="post__author author vcard inline-items">
                        <img src="/img/avatar73-sm.jpg" alt="author">
                        <div class="form-group with-icon-right is-empty">
                            <textarea class="form-control" placeholder="Press Enter to post..."></textarea>
                            <div class="add-options-message">
                                <a href="#" class="options-message">
                                    <svg class="olymp-camera-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <span class="material-input"></span></div>
                    </div>

                </form>

            </div>

        </div>
    </div>
    <div class="modal fade" id="update-header-photo">
        <div class="modal-dialog ui-block window-popup update-header-photo">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <a href="#" class="upload-photo-item">
                <svg class="olymp-computer-icon">
                    <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                </svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>

            <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                <svg class="olymp-photos-icon">
                    <use xlink:href="/icons/icons.svg#olymp-photos-icon"></use>
                </svg>

                <h6>Choose from My Photos</h6>
                <span>Choose from your uploaded photos</span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="choose-from-my-photo" style="">
        <div class="modal-dialog ui-block window-popup choose-from-my-photo" style="">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon">
                                <use xlink:href="/icons/icons.svg#olymp-photos-icon"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon">
                                <use xlink:href="/icons/icons.svg#olymp-albums-icon"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="ui-block-content" style="">
                <!-- Tab panes -->
                <div class="tab-content" style="">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true" style="">

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo1.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo2.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo3.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo4.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo5.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo6.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo7.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo8.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="/img/choose-photo9.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false" style="">

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo10.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo11.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo12.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo13.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity &amp; Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo14.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="/img/choose-photo15.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">The Majestic Canyon</a>
                                    <span>Last Added: 57 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>


                        <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                        <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="create-photo-album" style="">
        <div class="modal-dialog ui-block window-popup create-photo-album" style="">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Create Photo Album</h6>
            </div>

            <div class="ui-block-content" style="">

                <form class="form-group label-floating">
                    <label class="control-label">Album Name</label>
                    <input class="form-control" placeholder="" type="text" value="Rock Garden Festival - Day 4">
                    <span class="material-input"></span></form>

                <div class="photo-album-wrapper" style="">
                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item create-album" data-mh="album-item" style="">
                            <div class="content">
                                <a href="#" class="btn btn-control bg-primary">
                                    <svg class="olymp-plus-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-plus-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="title h5">Add More Photos...</a>
                            </div>
                        </div>
                    </div>

                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item" data-mh="album-item" style="">
                            <div class="form-group is-empty">
                                <img src="/img/photo-album6.jpg" alt="photo">
                                <textarea class="form-control" placeholder="Write something about this photo..."></textarea>
                                <span class="material-input"></span></div>

                            <form class="form-group label-floating is-select is-empty">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                </svg>

                                <div class="btn-group bootstrap-select show-tick form-control style-2"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar52-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Green Goo Rock</div>

                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar74-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Mathilda Brinker</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar48-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Marina Valentine</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar75-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Dave Marinara</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar76-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Rachel Howlett</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control style-2 show-tick" multiple="" data-max-options="2" data-live-search="true" size="auto" tabindex="-98">
                                        <option title="Green Goo Rock" data-content="<div class=&quot;inline-items&quot;>
										<div class=&quot;author-thumb&quot;>
											<img src=&quot;/img/avatar52-sm.jpg&quot; alt=&quot;author&quot;>
										</div>
											<div class=&quot;h6 author-title&quot;>Green Goo Rock</div>

										</div>">
                                        </option>

                                        <option title="Mathilda Brinker" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar74-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Mathilda Brinker</div>
										</div>">
                                        </option>

                                        <option title="Marina Valentine" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar48-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Marina Valentine</div>
										</div>">
                                        </option>

                                        <option title="Dave Marinara" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar75-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Dave Marinara</div>
										</div>">
                                        </option>

                                        <option title="Rachel Howlett" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar76-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Rachel Howlett</div>
										</div>">
                                        </option>

                                    </select></div>
                                <span class="material-input"></span><span class="material-input"></span></form>
                        </div>
                    </div>

                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item" data-mh="album-item" style="">
                            <div class="form-group is-empty">
                                <img src="/img/photo-album7.jpg" alt="photo">
                                <textarea class="form-control" placeholder="Write something about this photo..."></textarea>
                                <span class="material-input"></span></div>
                            <form class="form-group label-floating is-select is-empty">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                </svg>

                                <div class="btn-group bootstrap-select show-tick form-control style-2"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar52-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Green Goo Rock</div>

                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar74-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Mathilda Brinker</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar48-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Marina Valentine</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar75-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Dave Marinara</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar76-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Rachel Howlett</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control style-2 show-tick" multiple="" data-max-options="2" data-live-search="true" size="auto" tabindex="-98">
                                        <option title="Green Goo Rock" data-content="<div class=&quot;inline-items&quot;>
										<div class=&quot;author-thumb&quot;>
											<img src=&quot;/img/avatar52-sm.jpg&quot; alt=&quot;author&quot;>
										</div>
											<div class=&quot;h6 author-title&quot;>Green Goo Rock</div>

										</div>">
                                        </option>

                                        <option title="Mathilda Brinker" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar74-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Mathilda Brinker</div>
										</div>">
                                        </option>

                                        <option title="Marina Valentine" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar48-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Marina Valentine</div>
										</div>">
                                        </option>

                                        <option title="Dave Marinara" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar75-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Dave Marinara</div>
										</div>">
                                        </option>

                                        <option title="Rachel Howlett" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar76-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Rachel Howlett</div>
										</div>">
                                        </option>

                                    </select></div>
                                <span class="material-input"></span><span class="material-input"></span></form>
                        </div>
                    </div>

                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item" data-mh="album-item" style="">
                            <div class="form-group is-empty">
                                <img src="/img/photo-album8.jpg" alt="photo">
                                <textarea class="form-control" placeholder="Write something about this photo..."></textarea>
                                <span class="material-input"></span></div>

                            <form class="form-group label-floating is-select is-empty">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                </svg>

                                <div class="btn-group bootstrap-select show-tick form-control style-2"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar52-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Green Goo Rock</div>

                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar74-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Mathilda Brinker</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar48-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Marina Valentine</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar75-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Dave Marinara</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar76-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Rachel Howlett</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control style-2 show-tick" multiple="" data-max-options="2" data-live-search="true" size="auto" tabindex="-98">
                                        <option title="Green Goo Rock" data-content="<div class=&quot;inline-items&quot;>
										<div class=&quot;author-thumb&quot;>
											<img src=&quot;/img/avatar52-sm.jpg&quot; alt=&quot;author&quot;>
										</div>
											<div class=&quot;h6 author-title&quot;>Green Goo Rock</div>

										</div>">
                                        </option>

                                        <option title="Mathilda Brinker" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar74-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Mathilda Brinker</div>
										</div>">
                                        </option>

                                        <option title="Marina Valentine" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar48-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Marina Valentine</div>
										</div>">
                                        </option>

                                        <option title="Dave Marinara" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar75-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Dave Marinara</div>
										</div>">
                                        </option>

                                        <option title="Rachel Howlett" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar76-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Rachel Howlett</div>
										</div>">
                                        </option>

                                    </select></div>
                                <span class="material-input"></span><span class="material-input"></span></form>
                        </div>
                    </div>

                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item" data-mh="album-item" style="">
                            <div class="form-group is-empty">
                                <img src="/img/photo-album9.jpg" alt="photo">
                                <textarea class="form-control" placeholder="Write something about this photo..."></textarea>
                                <span class="material-input"></span></div>

                            <form class="form-group label-floating is-select is-empty">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                </svg>

                                <div class="btn-group bootstrap-select show-tick form-control style-2"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar52-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Green Goo Rock</div>

                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar74-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Mathilda Brinker</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar48-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Marina Valentine</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar75-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Dave Marinara</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar76-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Rachel Howlett</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control style-2 show-tick" multiple="" data-max-options="2" data-live-search="true" size="auto" tabindex="-98">
                                        <option title="Green Goo Rock" data-content="<div class=&quot;inline-items&quot;>
										<div class=&quot;author-thumb&quot;>
											<img src=&quot;/img/avatar52-sm.jpg&quot; alt=&quot;author&quot;>
										</div>
											<div class=&quot;h6 author-title&quot;>Green Goo Rock</div>

										</div>">
                                        </option>

                                        <option title="Mathilda Brinker" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar74-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Mathilda Brinker</div>
										</div>">
                                        </option>

                                        <option title="Marina Valentine" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar48-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Marina Valentine</div>
										</div>">
                                        </option>

                                        <option title="Dave Marinara" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar75-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Dave Marinara</div>
										</div>">
                                        </option>

                                        <option title="Rachel Howlett" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar76-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Rachel Howlett</div>
										</div>">
                                        </option>

                                    </select></div>
                                <span class="material-input"></span><span class="material-input"></span></form>
                        </div>
                    </div>

                    <div class="photo-album-item-wrap col-3-width" style="">
                        <div class="photo-album-item" data-mh="album-item" style="">
                            <div class="form-group is-empty">
                                <img src="/img/photo-album10.jpg" alt="photo">
                                <textarea class="form-control" placeholder="Write something about this photo..."></textarea>
                                <span class="material-input"></span></div>

                            <form class="form-group label-floating is-select is-empty">
                                <svg class="olymp-happy-face-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                </svg>

                                <div class="btn-group bootstrap-select show-tick form-control style-2"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar52-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Green Goo Rock</div>

                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar74-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Mathilda Brinker</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar48-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Marina Valentine</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar75-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Dave Marinara</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><div class="inline-items">
                                                        <div class="author-thumb">
                                                            <img src="/img/avatar76-sm.jpg" alt="author">
                                                        </div>
                                                        <div class="h6 author-title">Rachel Howlett</div>
                                                    </div><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control style-2 show-tick" multiple="" data-max-options="2" data-live-search="true" size="auto" tabindex="-98">
                                        <option title="Green Goo Rock" data-content="<div class=&quot;inline-items&quot;>
										<div class=&quot;author-thumb&quot;>
											<img src=&quot;/img/avatar52-sm.jpg&quot; alt=&quot;author&quot;>
										</div>
											<div class=&quot;h6 author-title&quot;>Green Goo Rock</div>

										</div>">
                                        </option>

                                        <option title="Mathilda Brinker" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar74-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Mathilda Brinker</div>
										</div>">
                                        </option>

                                        <option title="Marina Valentine" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar48-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Marina Valentine</div>
										</div>">
                                        </option>

                                        <option title="Dave Marinara" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar75-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Dave Marinara</div>
										</div>">
                                        </option>

                                        <option title="Rachel Howlett" data-content="<div class=&quot;inline-items&quot;>
											<div class=&quot;author-thumb&quot;>
												<img src=&quot;/img/avatar76-sm.jpg&quot; alt=&quot;author&quot;>
											</div>
											<div class=&quot;h6 author-title&quot;>Rachel Howlett</div>
										</div>">
                                        </option>

                                    </select></div>
                                <span class="material-input"></span><span class="material-input"></span></form>

                        </div>
                    </div>
                </div>

                <a href="#" class="btn btn-secondary btn-lg btn--half-width">Discard Everything</a>
                <a href="#" class="btn btn-primary btn-lg btn--half-width">Post Album</a>

            </div>
        </div>
    </div>
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
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="a0cff0e9-9464-dd02-346e-bdffcfd98b68">
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

