@extends('user.Profile.master-Youraccount')
@section('content-y-a')
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">اطلاعیه ها</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>

                <ul class="notification-list">
                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar1-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">محمدرضا سرمدی</a> در <a href="#" class="notification-link">استاتوس جدید شما</a> یک کامنت منتشر کرد.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li class="un-read">
                        <div class="author-thumb">
                            <img src="img/avatar2-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            شما و <a href="#" class="h6 notification-friend">نیلوفر حسینی</a> دوست شدید. در  <a href="#" class="notification-link">دیوار او</a> چیزی بنویسید.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ساعت قبل</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li class="with-comment-photo">
                        <div class="author-thumb">
                            <img src="img/avatar3-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">حسن شریفی</a> در<a href="#" class="notification-link">عکس شما</a> یک دیدگاه منتظر کرد.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 5:25</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

                        <div class="comment-photo">
                            <img src="img/comment-photo.jpg" alt="photo">
                            <span>“این عکس عالی به نظر میرسه”</span>
                        </div>
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar4-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">داریوش</a> <a href="#" class="notification-link">استاتوس</a> پست شما را پسندید.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">25 مرداد</time></span>
                        </div>
                        <span class="notification-icon">
							<svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
						</span>
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar5-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">سمانه</a> شما را به رویداد <a href="#" class="notification-link">جشن تولدیا</a> دعوت کرد.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">25 فروردین</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-calendar-icon"><use xlink:href="icons/icons.svg#olymp-calendar-icon"></use></svg>
							</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar6-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">محدثه</a> در <a href="#" class="notification-link">پست شما</a> یک دیدگاه منتشر کرد.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="img/avatar7-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">عسل جون</a> در <a href="#" class="notification-link">پست شما</a> یک دیدگاه منتشر کرد.
                            <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">27 دی</time></span>
                        </div>
                        <span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>
                </ul>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">قبلی</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">بعدی</a>
                    </li>
                </ul>
            </nav>
        </div>

@endsection