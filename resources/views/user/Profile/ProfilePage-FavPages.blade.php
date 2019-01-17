@extends('user.Profile.master-Profile')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title">دوستان فاطمه  (86)</div>
                    <div class="w-select">
                        <div class="title">مرتب سازی بر اساس:</div>
                        <fieldset class="form-group">
                            <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="تعداد مورد علاقه ها"><span class="filter-option pull-left">تعداد مورد علاقه ها </span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">تعداد مورد علاقه ها </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">تعداد تصاویر </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">تعداد ویدئو ها </span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" size="auto" tabindex="-98">
                                    <option value="NU">تعداد مورد علاقه ها </option>
                                    <option value="NU">تعداد تصاویر </option>
                                    <option value="NU">تعداد ویدئو ها </option>
                                </select></div>
                            <span class="material-input"></span></fieldset>
                    </div>

                    <form class="w-search">
                        <div class="form-group with-button is-empty">
                            <input class="form-control" type="text" placeholder="Search Fav Pages...">
                            <button>
                                <svg class="olymp-magnifying-glass-icon"><use xlink:href="icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                            </button>
                            <span class="material-input"></span></div>
                    </form>
                    <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content2')
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav1.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar9.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">احمد  رسولی </a>
                                <div class="country">گروه راک </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-0">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وب سایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وب سایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
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
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav2.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">


                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar10.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">رستوران باما </a>
                                <div class="country">رستوران  / غذا خوری </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-1">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها </div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-1 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav3.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">


                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar11.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">باند دال </a>
                                <div class="country">گروه موسیقی سنتی </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-2 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-2">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-2 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav1.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar9.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">پارک ملت </a>
                                <div class="country">پارک </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-3 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-3">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وب سایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وب سایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-3 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav4.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">
                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar12.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">بوتیک  آنیتا </a>
                                <div class="country">فروشگاه لباس </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-4 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-4">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-4 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav5.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar13.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">پیتزا ستاره آبی </a>
                                <div class="country">فست فود </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-5 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-5">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-5 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav6.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">

                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar14.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name">موسسه حیات </a>
                                <div class="country">شرکت</div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-6 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-6">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-6 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="ui-block">
                <div class="friend-item fav-page">
                    <div class="friend-header-thumb">
                        <img src="img/fav7.jpg" alt="friend">
                    </div>

                    <div class="friend-item-content">


                        <div class="more">
                            <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
                                <img src="img/avatar15.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <a href="#" class="h5 author-name"> فروشگاه یاس </a>
                                <div class="country">فروشگاه لباس </div>
                            </div>
                        </div>

                        <div class="swiper-container swiper-swiper-unique-id-7 initialized swiper-container-horizontal swiper-container-rtl" id="swiper-unique-id-7">
                            <div class="swiper-wrapper" style="width: 784px; transform: translate3d(196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div>

                                <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                                    <p class="friend-about">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>

                                    <div class="friend-since">
                                        <div>وبسایت :</div>
                                        <a href="#" class="h6">www.ggrock.com</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                                    <div class="friend-count">
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">48</div>
                                            <div class="title">تصاویر </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">5630</div>
                                            <div class="title">مورد علاقه ها </div>
                                        </a>
                                        <a href="#" class="friend-count-item">
                                            <div class="h6">12</div>
                                            <div class="title">ویدئوها</div>
                                        </a>
                                    </div>
                                    <div class="control-block-button">
                                        <a href="#" class="btn btn-control bg-primary">
                                            <svg class="olymp-star-icon"><use xlink:href="icons/icons.svg#olymp-star-icon"></use></svg>
                                        </a>

                                        <a href="#" class="btn btn-control bg-purple">
                                            <svg class="olymp-chat---messages-icon"><use xlink:href="icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                                        </a>

                                    </div>
                                </div></div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination pagination-swiper-unique-id-7 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('main')
    <div class="modal fade" id="update-header-photo">
        <div class="modal-dialog ui-block window-popup update-header-photo">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Update Header Photo</h6>
            </div>

            <a href="#" class="upload-photo-item">
                <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>

                <h6>Upload Photo</h6>
                <span>Browse your computer.</span>
            </a>

            <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>

                <h6>Choose from My Photos</h6>
                <span>Choose from your uploaded photos</span>
            </a>
        </div>
    </div>
    <div class="modal fade" id="choose-from-my-photo" style="">
        <div class="modal-dialog ui-block window-popup choose-from-my-photo" style="">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="ui-block-title">
                <h6 class="title">Choose from My Photos</h6>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                            <svg class="olymp-photos-icon"><use xlink:href="icons/icons.svg#olymp-photos-icon"></use></svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                            <svg class="olymp-albums-icon"><use xlink:href="icons/icons.svg#olymp-albums-icon"></use></svg>
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
                                    <img src="img/choose-photo1.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo2.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo3.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo4.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo5.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo6.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo7.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo8.jpg" alt="photo">
                                    <input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 147.453px;">
                            <div class="radio">
                                <label class="custom-radio">
                                    <img src="img/choose-photo9.jpg" alt="photo">
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
                                <img src="img/choose-photo10.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">South America Vacations</a>
                                    <span>Last Added: 2 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo11.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Photoshoot Summer 2016</a>
                                    <span>Last Added: 5 weeks ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo12.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Street Food</a>
                                    <span>Last Added: 6 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo13.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Graffity &amp; Street Art</a>
                                    <span>Last Added: 16 hours ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo14.jpg" alt="photo">
                                <figcaption>
                                    <a href="#">Amazing Landscapes</a>
                                    <span>Last Added: 13 mins ago</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="choose-photo-item" data-mh="choose-item" style="height: 272px;">
                            <figure>
                                <img src="img/choose-photo15.jpg" alt="photo">
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
    <div class="ui-block popup-chat popup-chat-responsive">
        <div class="ui-block-title">
            <span class="icon-status online"></span>
            <h6 class="title">چت</h6>
            <div class="more">
                <svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
                <svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
        </div>
        <div class="mCustomScrollbar ps ps--theme_default" data-ps-id="40c19d1c-c4fe-1482-114c-f70a20a9522d">
            <ul class="notification-list chat-message chat-message-field">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">فاطمه کاظمی زاده عزیز. سلام. لطفا فراموش نکن که برای فردا محصولاتی که به شما گفتم را خریداری کنی..</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
                    </div>
                    <div class="notification-event">
                        <span class="chat-message-item">اصلا نگران نباش!</span>
                        <span class="chat-message-item">همه رو به خاطر دارم و فراموش نمیکنم.</span>
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 8:20</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
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
                        <svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
                    </a>
                    <div class="options-message smile-block">

                        <svg class="olymp-happy-sticker-icon"><use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

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
                <span class="material-input"></span><span class="material-input"></span></div>

        </form>


    </div>
@endsection

