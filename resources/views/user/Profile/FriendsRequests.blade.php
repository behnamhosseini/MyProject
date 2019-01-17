@extends('user.Profile.master-Youraccount')
@section('content-y-a')
    <div class="row">
        <div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">درخواست های دوستی</h6>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>

                <ul class="notification-list friend-requests">
                    <li>
                        <div class="author-thumb">
                            <img src="/img/avatar15-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">حدیث باقری</a>
                            <span class="chat-message-item">دوست متقابل: سمانه کاشانی</span>
                        </div>
                        <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                    پذیرفتن درخواست
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                </a>

                            </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="/img/avatar16-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">استیو جابز</a>
                            <span class="chat-message-item">4 دوست مشترک</span>
                        </div>
                        <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                    پذیرفتن درخواست
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                </a>

                            </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li class="accepted">
                        <div class="author-thumb">
                            <img src="/img/avatar17-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            شما و <a href="#" class="h6 notification-friend">مریم شکوری</a> فقط با هم دوست باشید. نوشته شده در <a href="#" class="notification-link">دیوار او</a>.
                        </div>
                        <span class="notification-icon">
                                <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                            </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                    <li>
                        <div class="author-thumb">
                            <img src="/img/avatar18-sm.jpg" alt="author">
                        </div>
                        <div class="notification-event">
                            <a href="#" class="h6 notification-friend">پوشاک گوچی</a>
                            <span class="chat-message-item">9 دوست مشترک</span>
                        </div>
                        <span class="notification-icon">
                                <a href="#" class="accept-request">
                                    <span class="icon-add">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                    پذیرفتن درخواست
                                </a>

                                <a href="#" class="accept-request request-del">
                                    <span class="icon-minus">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>
                                </a>

                            </span>

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                            <svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
@endsection