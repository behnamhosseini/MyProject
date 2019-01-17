@extends('user.Profile.master')
@section('content2')

    <div class="header-spacer"></div>
    <div class="row">
        <!-- Left Sidebar -->

        <aside class="col-xl-3 order-xl-1 order-sm-2 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">

            <div class="ui-block">
                <div class="widget w-wethear">
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>

                    <div class="wethear-now inline-items">
                        <div class="temperature-sensor">64°</div>
                        <div class="max-min-temperature">
                            <span>58°</span>
                            <span>76°</span>
                        </div>

                        <svg class="olymp-weather-partly-sunny-icon">
                            <use xlink:href="icons/icons-weather.svg#olymp-weather-partly-sunny-icon"></use>
                        </svg>
                    </div>

                    <div class="wethear-now-description">
                        <div class="climate">نیمه ابری</div>
                        <span>دمای فعلی:
								<span>67°</span>
							</span>
                        <span>احتمال بارندگی:
								<span>49%</span>
							</span>
                    </div>

                    <ul class="weekly-forecast">

                        <li>
                            <div class="day">1شنبه</div>
                            <svg class="olymp-weather-sunny-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-sunny-icon"></use>
                            </svg>

                            <div class="temperature-sensor-day">60°</div>
                        </li>

                        <li>
                            <div class="day">2شنبه</div>
                            <svg class="olymp-weather-partly-sunny-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-partly-sunny-icon"></use>
                            </svg>
                            <div class="temperature-sensor-day">58°</div>
                        </li>

                        <li>
                            <div class="day">3شنبه</div>
                            <svg class="olymp-weather-cloudy-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-cloudy-icon"></use>
                            </svg>

                            <div class="temperature-sensor-day">67°</div>
                        </li>

                        <li>
                            <div class="day">4شنبه</div>
                            <svg class="olymp-weather-rain-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-rain-icon"></use>
                            </svg>

                            <div class="temperature-sensor-day">70°</div>
                        </li>

                        <li>
                            <div class="day">5شنبه</div>
                            <svg class="olymp-weather-storm-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-storm-icon"></use>
                            </svg>

                            <div class="temperature-sensor-day">58°</div>
                        </li>

                        <li>
                            <div class="day">جمعه</div>
                            <svg class="olymp-weather-snow-icon">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-snow-icon"></use>
                            </svg>

                            <div class="temperature-sensor-day">68°</div>
                        </li>

                        <li>
                            <div class="day">شنبه</div>

                            <svg class="olymp-weather-wind-icon-header">
                                <use xlink:href="icons/icons-weather.svg#olymp-weather-wind-icon-header"></use>
                            </svg>

                            <div class="temperature-sensor-day">65°</div>
                        </li>

                    </ul>

                    <div class="date-and-place">
                        <h5 class="date">شنبه, 15 اردیبهشت</h5>
                        <div class="place">تهران, ایران</div>
                    </div>

                </div>
            </div>


            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">صفحاتی که ممکن است بپسندید</h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>

                <ul class="widget w-friend-pages-added notification-list friend-requests">
                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar41-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">رستوران باما</a>
                            <span class="chat-message-item">دستوران / کافه</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar42-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">دست ساز های قشنگ</a>
                            <span class="chat-message-item">هنرهای دستی</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar43-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">من یک طراحم</a>
                            <span class="chat-message-item">کمپین</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar44-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">بافتنی</a>
                            <span class="chat-message-item">آموزشی</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar45-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">چی بپوشم</a>
                            <span class="chat-message-item">مد و فشن</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar46-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">اهنگ درخواستی</a>
                            <span class="chat-message-item">موزیک</span>
                        </div>
                        <span class="notification-icon" data-toggle="tooltip" data-placement="top" title=""
                              data-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                    </li>

                </ul>

            </div>
        </aside>

        <!-- ... end Left Sidebar -->

        <!-- Main Content -->
        <main class="col-xl-6 order-xl-2 order-sm-1 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
            <!-- Start send post-->

            @auth()
                <form action="/sendPost" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="ui-block align-left">
                        <div class="news-feed-form">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs justify-content-between " role="tablist">


                                <li class="col-xs-12 col-sm-12 col-md-5 my-auto  ">
                                    <span class="small">هرچی دلت میخواد بنویس و به اشتراک بزار...</span>
                                </li>

                                <li id="liLocation" class="col-xs-12 col-sm-12 col-md-6 my-auto  ">
                                    <span class="small">مکان شما:</span>
                                    <span id="spanLocation"  class="small"></span>
                                    <input type="hidden" id="Location" name="Location" class="small" value="">
                                </li>

                                <li class="col-xs-6 col-sm-2 col-md-1 my-auto ">
                                    <input type="hidden" value="amo" name="mood" class="small-icon facemocion "/>
                                </li>


                            </ul>
                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                            <!-- Tab panes -->
                            <div class="tab-content justify-content-between ">
                                <div class="tab-pane active " id="home-1" role="tabpanel" aria-expanded="true">
                                    <div class="form-group label-floating ">
                                        <textarea id="post" name="body" class="form-control" placeholder=""></textarea>

                                        <span class="material-input"></span></div>
                                    <div class="add-options-message ">
                                        <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"
                                           data-original-title="افزودن تصویر" data-target="#update-header-photo">
                                            <svg class="olymp-camera-icon" data-toggle="modal"
                                                 data-target="#update-header-photo">
                                                <use xlink:href="icons/icons.svg#olymp-camera-icon"></use>
                                            </svg>
                                        </a>


                                        <!-- Window-popup بروزرسانی تصویر هدر -->


                                        <div class="modal fade"  id="update-header-photo" >
                                            <div  class="modal-dialog ui-block window-popup">
                                                <div class="ui-block-title" >
                                                    <h6 class="title">یه عکس برای پست مورد نظرت انتخاب کن</h6>
                                                </div>
                                                <div class="container">
                                                    <div class="panel panel-default">
                                                        <div class="panel-body" >


                                                            <div class="row">
                                                                <div class="col-md-4 justify-content-center pl-5">
                                                                    <div id="upload-demo" style="width:100%"></div>
                                                                </div>
                                                                <div class="col-md-4 justify-content-center my-auto">
                                                                    <div class="panel-heading">عکس مورد نظر رو انتخاب و بعد از برش روی دکمه انتخاب شد کلیک کنید</div>
                                                                    <br/>
                                                                    <label for="upload">انتخاب عکس</label>
                                                                    <input type="file" id="upload" value="انتخاب عکس" class="file" placeholder="انتخاب عکس" >
                                                                    <br/>
                                                                    <button type="button" id="uploadBtn" class="btn btn-success upload-result mb-1">آپلود</button>
                                                                </div>


                                                                <div class="col-md-4 justify-content-center my-auto" >
                                                                    <div id="upload-demo-i" class="content-center my-auto mx-auto" style="width:200px;height:200px"></div>
                                                                    <input type="hidden" id="postImage" name="imageUrl" value="">
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="close" class="btn btn-success" data-dismiss="modal">بستن</button>
                                                    <script>
                                                        $("#uploadBtn").click(function () {
                                                            $("#close").text('انتخاب شد');
                                                        })
                                                    </script>
                                                </div>


                                            </div>

                                        </div>

                                        <!-- End-popup بروزرسانی تصویر هدر -->

                                        <a class="options-message" data-toggle="tooltip"
                                           data-placement="top"
                                           data-original-title="افزودن لوکیشن">
                                            <svg id="location" class="olymp-small-pin-icon">
                                                <use xlink:href="icons/icons.svg#olymp-small-pin-icon"></use>
                                            </svg>
                                        </a>

                                        <script>
                                            $('#liLocation').hide();
                                            $("#location").click(function () {
                                                $.ajax({
                                                    url: '/ip',
                                                    type: 'post',
                                                    data: {
                                                        _token: '{{csrf_token()}}'
                                                    },
                                                    success: function (sity) {
                                                        $('#liLocation').show();
                                                        $('#spanLocation').text(sity);
                                                        $('#Location').val(sity);
                                                    }
                                                })

                                            })
                                        </script>

                                            <button type="submit" class="btn btn-breez-light">ارسال</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#sendVipPost">داغش کن!</button>

                                            <!-- Window-popup ارسال پست ویژه -->

                                        <div class="modal fade" id="sendVipPost" role="dialog">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title float-right">پستتو داغش کن!</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="jumbotron">
                                                                <h6>دوس داری پستی که میذاری رو همه ببینن؟حتی کسایی که با هم دوست نیستین!</h6>
                                                                <p>با استفاده از داغش کن پستی که میزاری بعنوان اولین پست برای تمامی اعضای این برنامه نمایش داده میشه و میتونی بعنوان تبلیغ کار یا هر چیزی که میخوای ازش استفاده کنی!</p>
                                                            <p>فقط برای استفاده از این قابلیت حداقل باید 1000 تومن شارژ داشته باشی</p>
                                                            </div>
                                                            @if(auth()->user()->credit < 1000)
                                                                <div class="alert alert-danger"> شارژ شما برای ارسال پست داغ کافی نیست.برای افزایش شارژ روی دکمه افزایش شارژ کلیک کنید</div>
                                                            @endif()
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <div>
                                                            <span>مقدار شارژ شما :{{auth()->user()->credit}} تومان</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-outline-grey" data-dismiss="modal">بستن</button>
                                                            @if(auth()->user()->credit >= 1000)
                                                            <button type="submit" class="btn btn-danger">بزن بریم!</button>
                                                                <input name="postType" type="hidden" value="vip">
                                                            @else
                                                            <a href="/ProfilePageFinancialAffairs/{{auth()->user()->userName}}"class="btn btn-danger">افزایش شارژ</a>
                                                            @endif()
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>

                                        <!-- End-popup ارسال پست ویژه -->





                                </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            @endauth()

            <!--End send post-->

            <div id="newsfeed-items-grid">
                <div class="ui-block">
                    <article class="hentry post has-post-thumbnail" >

                        <div class="post__author author vcard inline-items">
                            <img src="" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">فائزه اسحاقی</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        15 اردیبهشت 1397
                                    </time>
                                </div>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">ویرایش پست</a>
                                    </li>
                                    <li>
                                        <a href="#">حذف</a>
                                    </li>
                                    <li>
                                        <a href="#">خاموش کردن اطلاعیه ها</a>
                                    </li>
                                    <li>
                                        <a href="#">انتخاب بعنوان ویژه شده</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <p></p>

                        <div class="post-thumb">
                            <img src="upload/1.png"  alt="photo" style="position: relative">
                        </div>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="icons/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>49</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic10.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic11.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">جیمی</a>,
                                <a href="#">ملانی</a> و
                                <br>47 کاربر این پست را پسندیدند
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="icons/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>264</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>37</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="icons/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>
                </div>

            </div>

            <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
               data-container="newsfeed-items-grid">
                <svg class="olymp-three-dots-icon">
                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                </svg>
            </a>
        </main>


    {{--<body class="overlay-enable modal-open">--}}



        <!-- Right Sidebar -->

        <aside class="col-xl-3 order-xl-3 order-sm-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">

            <div class="ui-block">
                <div class="widget w-birthday-alert">
                    <div class="icons-block">
                        <svg class="olymp-cupcake-icon">
                            <use xlink:href="icons/icons.svg#olymp-cupcake-icon"></use>
                        </svg>
                        <a href="#" class="more">
                            <svg class="olymp-three-dots-icon">
                                <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                            </svg>
                        </a>
                    </div>
                    @auth()
                        <div class="content">
                            <div class="author-thumb">
                                <img src="img/avatar48-sm.jpg" alt="author">
                            </div>
                            <span>امروز</span>
                            <a href="#" class="h4 title">تولد مریم صفری</a> است.
                            <p>یک پیام با بهترین آرزوهای خود را در صفحه پروفایل خود بگذارید!</p>
                        </div>
                    @endauth()
                    @guest()
                        <div class="ui-block">
                            <div class="widget w-action">

                                <img src="img/logo.png" alt="Olympus">
                                <div class="content">
                                    <h4 class="title">الیمپوس</h4>
                                    <span>بهترین شبکه اجتماعی در اینجاست!</span>
                                    <a href="01-LandingPage.html" class="btn btn-bg-secondary">اکنون ثبت نام کنید!</a>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>


            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">پیشنهاد دوستان</h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
--                        </svg>
                    </a>
                </div>

                <ul class="widget w-friend-pages-added notification-list friend-requests">
                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar38-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">نسرین</a>
                            <span class="chat-message-item">8 دوست مشترک</span>
                        </div>
                        <span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>

                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar39-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">مریلا</a>
                            <span class="chat-message-item">6 دوست مشترک</span>
                        </div>
                        <span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>

                    </li>

                    <li class="inline-items">
                        <div class="author-thumb">
                            <img src="img/avatar40-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">کامران</a>
                            <span class="chat-message-item">6 دوست مشترک</span>
                        </div>
                        <span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>

                    </li>

                </ul>

            </div>

            <div class="ui-block">

                <div class="ui-block-title">
                    <h6 class="title">خوراک فعالیت</h6>
                    <a href="#" class="more">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>

                <ul class="widget w-activity-feed notification-list">
                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar49-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">فاطمه</a> به
                            <a href="#" class="notification-link">تصویر</a> بهزاد نظر داد.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">2 دقیقه قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar9-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">فاطمه </a>
                            <a href="#" class="notification-link">استاتوس</a> مریم را پسندید.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">5 دقیقه قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar50-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">احمدی </a> 20 تصویر به
                            <a href="#" class="notification-link">گالری</a> کامران اضافه کرد.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">12 دقیقه قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar51-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">فاطمه </a>
                            <a href="#" class="notification-link">استاتوس</a> مریم را پسندید.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">1 ساعت قبل</time>
								</span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar48-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">فاطمه </a>
                            <a href="#" class="notification-link">استاتوس</a> مریم را پسندید.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">1 ساعت قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar52-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">فائزه واعظی </a>یک
                            <a href="#" class="notification-link">استاتوس</a> به اشتراک گذاشت.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">1 ساعت قبل</time>
								</span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar10-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">الهه حسینی </a>
                            <a href="#" class="notification-link">پست وبلاگ</a> شما را پسندید.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">2 ساعت قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar10-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">الهه حسینی </a>
                            <a href="#" class="notification-link">پست وبلاگ</a> شما را پسندید.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">2 ساعت قبل</time>
								</span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar53-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">مهدی زاده </a>
                            <a href="#" class="notification-link">تصویر پروفایبل</a> خود را تغییر داد.
                            <span class="notification-date">
									<time class="entry-date updated" datetime="2004-07-24T18:18">15 ساعت قبل</time>
								</span>
                        </div>
                    </li>

                </ul>
            </div>


        </aside>

        <!-- ... end Right Sidebar -->

    </div>
@endsection



@section('main')
    <div class="ui-block popup-chat popup-chat-responsive">
        <div class="ui-block-title">
            <span class="icon-status online"></span>
            <h6 class="title">چت</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon">
                    <use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use>
                </svg>
                <svg class="olymp-little-delete js-chat-open">
                    <use xlink:href="icons/icons.svg#olymp-little-delete"></use>
                </svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="37ab4f19-c28f-26f8-b33b-a3e783783fc0">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
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
                        <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
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
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date">
							<time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time>
						</span>
                    </div>
                </li>
            </ul>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: -6px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>

        <form>


            <div class="form-group label-floating is-empty">
                <label class="control-label">برای ارسال کلید Enter را فشار دهید...</label>
                <textarea class="form-control" placeholder=""></textarea>
                <div class="add-options-message">
                    <a href="#" class="options-message">
                        <svg class="olymp-computer-icon">
                            <use xlink:href="icons/icons.svg#olymp-computer-icon"></use>
                        </svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon">
                            <use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use>
                        </svg>

                        <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat1.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat2.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat3.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat4.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat5.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat6.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat7.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat8.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat9.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat10.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat11.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat12.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat13.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat14.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat15.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat16.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat17.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat18.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat19.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat20.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat21.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat22.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat23.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat24.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat25.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat26.png" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/icon-chat27.png" alt="icon">
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

