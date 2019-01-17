@extends('user.Profile.master-Profile')



@section('content2')
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">اطلاعات پروفایل</h6>
                    </div>
                    <div class="ui-block-content">
                        <ul class="widget w-personal-info item-block">
                            <li>
                                <span class="title">درباره من:</span>
                                <span class="text">{{$user->bio}}</span>
                            </li>
                            <li>
                                <span class="title">وضعیت تاهل:</span>
                                <span class="text">{{$user->maritalStatus}}</span>
                            </li>
                            @if($user->sex == 'مرد')
                                <li>
                                    <span class="title">سن:</span>
                                    <span class="text">{{\Carbon\Carbon::parse($user->dateOfBirth)->diffInYears()}}</span>
                                </li>
                            @endif
                            <li>
                                <span class="title">محل زندگی:</span>
                                <span class="text">{{$user->city}}</span>
                            </li>
                        </ul>

                        <div class="widget w-socials">
                            <h6 class="title">شبکه های اجتماعی:</h6>
                                @if($user->socialMedia['facebook'] != null)
                                    <a href="{{$user->socialMedia['facebook'] == null ? '#' : $user->socialMedia['facebook']}}" class="social-item bg-facebook">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                        فیسبوک
                                    </a>
                                @endif
                                @if($user->socialMedia['twitter'] != null)
                                    <a href="{{$user->socialMedia['twitter'] == null ? '#' : $user->socialMedia['twitter']}}" class="social-item bg-twitter">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        توییتر
                                    </a>
                                @endif
                                @if($user->socialMedia['instagram'] != null)
                                    <a href="{{$user->socialMedia['instagram'] == null ? '#' : $user->socialMedia['instagram']}}" class="social-item bg-dribbble">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        اینستاگرام
                                    </a>
                                @endif
                                @if($user->socialMedia['telegram'] != null)
                                    <a href="{{$user->socialMedia['telegram'] == null ? '#' : $user->socialMedia['telegram']}}" class="social-item bg-blue">
                                        <i class="fab fa-telegram" aria-hidden="true"></i>
                                        تلگرام
                                    </a>
                                @endif

                        </div>
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">مدال های {{$user->fullName()}}</h6>
                    </div>
                    <div class="ui-block-content">

                        <ul class="widget w-badges">
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge1.png" alt="author">
                                    <div class="label-avatar bg-primary">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge4.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge3.png" alt="author">
                                    <div class="label-avatar bg-blue">4</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge6.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge11.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge8.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge10.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge13.png" alt="author">
                                    <div class="label-avatar bg-breez">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge7.png" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img src="/img/badge12.png" alt="author">
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">لیست های پخش</h6>
                    </div>

                    <ol class="widget w-playlist">
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img src="/img/playlist6.jpg" alt="thumb-composition">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">بهنام بانی...</a>
                                <a href="#" class="composition-author">ص سال</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">3:22</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">افزودن به پلیر</a>
                                        </li>
                                        <li>
                                            <a href="#">افزودن به لیست پخش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>

                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img src="/img/playlist7.jpg" alt="thumb-composition">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">مدعی</a>
                                <a href="#" class="composition-author">جنگنده کنگ فو</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">5:48</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">افزودن به پلیر</a>
                                        </li>
                                        <li>
                                            <a href="#">افزودن به لیست پخش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img src="/img/playlist8.jpg" alt="thumb-composition">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">عکساشو پاره کردم</a>
                                <a href="#" class="composition-author">شهره</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">3:06</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">افزودن به پلیر</a>
                                        </li>
                                        <li>
                                            <a href="#">افزودن به لیست پخش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img src="/img/playlist9.jpg" alt="thumb-composition">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">عاشق که میشی</a>
                                <a href="#" class="composition-author">پازل بند</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">افزودن به پلیر</a>
                                        </li>
                                        <li>
                                            <a href="#">افزودن به لیست پخش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img src="/img/playlist10.jpg" alt="thumb-composition">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">مصطفی فتاحی</a>
                                <a href="#" class="composition-author">وای از درد دوری</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">5:40</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">افزودن به پلیر</a>
                                        </li>
                                        <li>
                                            <a href="#">افزودن به لیست پخش</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                    </ol>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">خوراک توییتر</h6>
                    </div>

                    <ul class="widget w-twitter">
                        <li class="twitter-item">
                            <div class="author-folder">
                                <img src="/img/twitter-avatar1.png" alt="avatar">
                                <div class="author">
                                    <a href="#" class="author-name">گاوچرون فضایی</a>
                                    <a href="#" class="group">@Virus3000</a>
                                </div>
                            </div>
                            <p>سلام بچه ها.. فردا تولدمه..
                                <a href="#" class="link-post">#salam</a>
                            </p>
                            <span class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									2 ساعت قبل
								</time>
							</span>
                        </li>
                        <li class="twitter-item">
                            <div class="author-folder">
                                <img src="/img/twitter-avatar1.png" alt="avatar">
                                <div class="author">
                                    <a href="#" class="author-name">گاوچرون فضایی</a>
                                    <a href="#" class="group">@james_spiegelOK</a>
                                </div>
                            </div>
                            <p>امروز همه باید به هم مهربون باشیم
                                <a href="#" class="link-post">salam</a>
                            </p>
                            <span class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									16 ساعت قبل
								</time>
							</span>
                        </li>
                    </ul>
                </div>


            </div>
            <!-- ... end Left Sidebar -->

            <!-- Main Content -->
            <div class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
                @foreach($user->posts->sortBy('created_at') as $post)
                    <div id="newsfeed-items-grid">

                    <div class="ui-block">
                        <article class="hentry post">

                            <div class="post__author author vcard inline-items">
                                <img src="{{$user->profilePictures['everyOne'] != null ? $user->profilePictures['everyOne'] : '/img/photo-item8.jpg'}}" alt="author">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="/ProfilePageAbout">{{$user->fullName()}}</a>
                                        <div class="post__date">
                                            <time class="published">
                                                {{$post->created_at->diffForHumans()}}
                                            </time>
                                        </div>
                                    </div>
                                    <p data-toggle="tooltip" data-html="true" id="facemocionText" data-placement="top" title="
                                    @switch($post->mood)
                                        @case('amo')
                                            عاشقم!
                                        @break
                                        @case('molesto')
                                               عصبیم!
                                        @break
                                        @case('asusta')
                                               ترسیدم!
                                        @break
                                        @case('divierte')
                                               خیلی خنده داره!
                                        @break
                                        @case('gusta')
                                                دوس دارم!
                                        @break
                                        @case('triste')
                                                ناراحتم!
                                        @break
                                        @case('asombro')
                                                متعجبم!
                                        @break
                                        @case('alegre')
                                                خوشحالم!
                                        @break

                                    @endswitch
                                            ">
                                        <span class="btn btn-control  featured-post mr-3" id="disable-facemocion">
                                              <input type="hidden" value="{{$post->mood}}" class="small-icon facemocion "/>
                                        </span>
                                    </p>



                                    @if($post->user_id == auth()->user()->id)
                                        <div class="more">
                                            <svg class="olymp-three-dots-icon">
                                                <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                            </svg>
                                            <ul class="more-dropdown">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#editPostModal">ویرایش پست</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#removePostModal">حذف پست</a>
                                                </li>
                                                <li>
                                                    <a href="#">خاموش کردن اطلاعیه ها</a>
                                                </li>
                                                <li>
                                                    <a href="#">انتخاب به عنوان برجسته</a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif

                                </div>

                                <p>{{$post->body}}</p>

                                <div class="post-additional-info inline-items">

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-heart-icon">
                                            <use xlink:href="/icons/icons.svg#olymp-heart-icon"></use>
                                        </svg>
                                        <span>{{$post->likeCount}}</span>
                                    </a>

                                    {{--<ul class="friends-harmonic">--}}
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
                                                {{--<img src="/img/friend-harmonic9.jpg" alt="friend">--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="#">--}}
                                                {{--<img src="/img/friend-harmonic10.jpg" alt="friend">--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a href="#">--}}
                                                {{--<img src="/img/friend-harmonic11.jpg" alt="friend">--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="names-people-likes">--}}
                                        {{--<a href="#">ملیسا</a>,--}}
                                        {{--<a href="#">جعفر </a> و--}}
                                        {{--<br>6 کاربر پسندیدند--}}
                                    {{--</div>--}}


                                    <div class="comments-shared">
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-speech-balloon-icon">
                                                <use xlink:href="/icons/icons.svg#olymp-speech-balloon-icon"></use>
                                            </svg>
                                            <span>{{$post->commentCount}}</span>
                                        </a>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-share-icon">
                                                <use xlink:href="/icons/icons.svg#olymp-share-icon"></use>
                                            </svg>
                                            <span>{{$post->shareCount}}</span>
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
                    </div>

                    <!-- edit post -->
                        <div class="modal fade " id="editPostModal">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" dir="rtl">ویرایش پست</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editPostForm" method="post" action="/editPost/{{$post->id}}">
                                            @csrf
                                            <h5 class="form-control">تغییرات مورد نظرتو انجام بده و روی دکمه ثبت کلیک کن</h5>

                                            <button type="submit" class="form-control btn btn-success">ثبت</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-around">
                                        <button type="button" class="form-control btn btn-warning" data-dismiss="modal">خروج</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end edit post -->

                        <!-- remove post -->
                        <div class="modal fade " id="removePostModal">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" dir="rtl">حذف پست</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="removePostForm" method="post" action="/removePost/{{$post->id}}">
                                            @csrf
                                            <h5 class="form-control">مطمئنی که میخوای این پست رو حذف کنی؟</h5>

                                            <button type="submit" class="form-control btn btn-danger">آره!</button>
                                            <button class="form-control btn btn-info" data-dismiss="modal">پشیمون شدم!</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-around">
                                        <span>با حذف کردن این پست دیگه قادر به برگشت اون نیستی!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end remove post -->

                </div>
                @endforeach

                @if($user->posts->all() != null)
                    <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
                        <svg class="olymp-three-dots-icon">
                            <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                @else
                    @if(auth()->user()->id != $user->id)
                        <div class="col-12 alert alert-warning">
                            <span>{{$user->firstName}} در حال حاضر پستی ارسال نکرده است!</span>
                        </div>
                    @else
                        <div class="col-12 alert alert-warning">
                            <span>تو هنوز پستی ارسال نکردی!</span><br>
                            <span>میتونی برای ارسال پست به <a href="/Newsfeed" style="text-decoration: none">این صفحه</a> مراجعه کنی</span>
                        </div>
                    @endif
                @endif
            </div>
            <!-- ... end Main Content -->


            <!-- Right Sidebar -->

            <div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">آخرین تصاویر</h6>
                    </div>
                    <div class="ui-block-content">
                        <ul class="widget w-last-photo js-zoom-gallery">
                            @foreach($user->posts as $post)
                                <li>
                                        <img src="{{$post->imageUrl}}" alt="photo">
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">مجله</h6>
                    </div>
                    <ul class="widget w-blog-posts">
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h6">بهترین روز سال کدام بود برایتان؟</a>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        7 ساعت قبل
                                    </time>
                                </div>

                            </article>
                        </li>
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h6">بزرگترین هندوانه جهان</a>

                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        25 فروردین 1397
                                    </time>
                                </div>

                            </article>
                        </li>
                    </ul>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">دوستان (86)</h6>
                    </div>
                    <div class="ui-block-content">
                        <ul class="widget w-faved-page js-zoom-gallery">
                            <li>
                                <a href="#">
                                    <img src="/img/avatar38-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar24-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar36-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar35-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar34-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar33-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar32-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar31-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar30-sm.jpg" alt="author">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar29-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar28-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar27-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar26-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/img/avatar25-sm.jpg" alt="user">
                                </a>
                            </li>
                            <li class="all-users">
                                <a href="#">+74</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">صفحات محبوب</h6>
                    </div>

                    <ul class="widget w-friend-pages-added notification-list friend-requests">
                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="/img/avatar41-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">کافه بارون</a>
                                <span class="chat-message-item">رستوران / کافه</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="افزودن به علاقه مندی ها">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="/icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="/img/avatar42-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">هلیا مکاپ</a>
                                <span class="chat-message-item">آرایش و زیبایی</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="افزودن به علاقه مندی ها">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="/icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="/img/avatar43-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">من یک طراحم</a>
                                <span class="chat-message-item">مکپین</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="افزودن به علاقه مندی ها">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="/icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

                        </li>

                        <li class="inline-items">
                            <div class="author-thumb">
                                <img src="/img/avatar46-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">حسن ریوندی</a>
                                <span class="chat-message-item">جوکر</span>
                            </div>
                            <span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="افزودن به علاقه مندی ها">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="/icons/icons.svg#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
                        </li>

                    </ul>

                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">فاطمه کاظمی زاده</h6>
                    </div>
                    <div class="ui-block-content">
                        <ul class="widget w-pool">
                            <li>
                                <p>اگر شما حق انتخاب دارید, کدام بازیگر را برای فیلم درحال اکران انتخاب می کنید؟ </p>
                            </li>

                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
										<span class="skills-item-title">

											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios"> محمدرضا گلزار
												</label>
											</span>
										</span>
                                        <span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
											<span class="units">62%</span>
										</span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
                                    </div>

                                    <div class="counter-friends">7 دوستان که پسندیده اند</div>

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic1.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic2.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic3.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic4.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic5.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic6.jpg" alt="friend">
                                            </a>
                                        </li>
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
                                            <a href="#" class="all-users">+3</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>

                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
										<span class="skills-item-title">

											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios"> جواد رضویان
												</label>
											</span>
										</span>
                                        <span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
											<span class="units">27%</span>
										</span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
                                    </div>
                                    <div class="counter-friends">7 دوستان که پسندیده اند</div>

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
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic12.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic13.jpg" alt="friend">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
										<span class="skills-item-title">
											<span class="radio">
												<label>
													<input type="radio" name="optionsRadios"> جمشید هاشم پور
												</label>
											</span>
										</span>
                                        <span class="skills-item-count">
											<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
											<span class="units">11%</span>
										</span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
                                    </div>

                                    <div class="counter-friends">3 دوستان که پسندیده اند</div>

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic14.jpg" alt="friend">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/img/friend-harmonic15.jpg" alt="friend">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">اکنون امتیاز دهید!</a>
                    </div>
                </div>
            </div>

            <!-- ... end Right Sidebar -->

        </div>
    </div>
@endsection

@section('main')



        <div class="window-popup playlist-popup">

            <a href="" class="icon-close js-close-popup">
                <svg class="olymp-close-icon">
                    <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                </svg>
            </a>

            <table class="playlist-popup-table">

                <thead>

                <tr>

                    <th class="play">
                        پخش
                    </th>

                    <th class="cover">
                        پوشش
                    </th>

                    <th class="song-artist">
                        موسیقی ها و خوانندگان
                    </th>

                    <th class="album">
                        آلبوم ها
                    </th>

                    <th class="released">
                        منتشر شده
                    </th>

                    <th class="duration">
                        مدت زمان
                    </th>

                    <th class="spotify">
                        درموردش صحبت کنید
                    </th>

                    <th class="remove">
                        حذف
                    </th>
                </tr>

                </thead>

                <tbody>
                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist19.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">ما میتونیم قهرمان باشیم</a>
                            <a href="#" class="composition-author">جاستین بیبر</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition">دوستان شکلاتی</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist6.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">
                            <a href="#" class="composition-name">The Past Starts Slow and Ends</a>
                            <a href="#" class="composition-author">System of a Revenge</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition">Wonderize</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist7.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">
                            <a href="#" class="composition-name">The Pretender</a>
                            <a href="#" class="composition-author">Kung Fighters</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition">Warping Lights</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist8.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">
                            <a href="#" class="composition-name">Seven Nation Army</a>
                            <a href="#" class="composition-author">The Black Stripes</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist9.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">
                            <a href="#" class="composition-name">Leap of Faith</a>
                            <a href="#" class="composition-author">Eden Artifact</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition">The Assassins’s Soundtrack</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="play">
                        <a href="#" class="play-icon">
                            <svg class="olymp-music-play-icon-big">
                                <use xlink:href="/icons/icons-music.svg#olymp-music-play-icon-big"></use>
                            </svg>
                        </a>
                    </td>
                    <td class="cover">
                        <div class="playlist-thumb">
                            <img src="/img/playlist10.jpg" alt="thumb-composition">
                        </div>
                    </td>
                    <td class="song-artist">
                        <div class="composition">
                            <a href="#" class="composition-name">Killer Queen</a>
                            <a href="#" class="composition-author">Archiduke</a>
                        </div>
                    </td>
                    <td class="album">
                        <a href="#" class="album-composition ">اخبار از جهان</a>
                    </td>
                    <td class="released">
                        <div class="release-year">2014</div>
                    </td>
                    <td class="duration">
                        <div class="composition-time">
                            <time class="published" datetime="2017-03-24T18:18">6:17</time>
                        </div>
                    </td>
                    <td class="spotify">
                        <i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
                    </td>
                    <td class="remove">
                        <a href="#" class="remove-icon">
                            <svg class="olymp-close-icon">
                                <use xlink:href="/icons/icons.svg#olymp-close-icon"></use>
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

            {{--<audio id="mediaplayer" data-showplaylist="true">--}}
                {{--<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">--}}
                {{--<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">--}}
                {{--<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">--}}
                {{--<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">--}}
            {{--</audio>--}}

        </div>

        <!-- Window-popup-CHAT for responsive min-width: 768px -->

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
            <div class="mCustomScrollbar">
                <ul class="notification-list chat-message chat-message-field">
                    <li>
                        <div class="author-thumb">
                            <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">سلام فاطمه.. این مطالب که امروز گذاشتی واقعا عالی بودند.. ما را به یک نوشیدنی مهمان کنید..</span>
                            <span class="notification-date">
                                <time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:10pm</time>
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">نگران نباش!</span>
                            <span class="chat-message-item">عالی بود..</span>
                            <span class="notification-date">
                                <time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:29pm</time>
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                        </div>
                        <div class="notification-event">
                            <span class="chat-message-item">سلام فاطمه.. این مطالب که امروز گذاشتی واقعا عالی بودند.. به فعالیتت ادامه بده دوست من!</span>
                            <span class="notification-date">
                                <time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

            <form>

                <div class="form-group label-floating is-empty">
                    <label class="control-label">برای ارسال Enter را فشار دهید.. </label>
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
                </div>

            </form>


        </div>


@endsection

