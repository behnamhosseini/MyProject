@extends('user.Profile.master')
@section('header')
    <div class="header-spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
                    <div class="top-header">
                        <div class="top-header-thumb">
                            <img src="{{$user->profilePictures['header'] ? $user->profilePictures['header'] : '/img/top-header7.png'}}" alt="header">
                        </div>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 ">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="/ProfilePageFinancialAffairs/{{$user->userName}}" class="{{Route::currentRouteName() == 'ProfilePageFinancialAffairs' ? 'active' : ''}} ">حساب کتاب</a>
                                        </li>
                                        <li>
                                            <a href="/ProfilePageAbout/{{$user->userName}}" class="{{Route::currentRouteName() == 'ProfilePageAbout' ? 'active' : ''}} ">درباره</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-5 mr-auto col-md-5">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="/ProfilePagePhotos/{{$user->userName}}" class="{{Route::currentRouteName() == 'ProfilePagePhotos' ? 'active' : ''}} ">تصاویر</a>
                                        </li>
                                        @if($user->accountType == 'public')
                                            <li>
                                                <a href="/ProfilePageFriends/{{$user->userName}}" class="{{Route::currentRouteName() == 'ProfilePageFriends' ? 'active' : ''}} ">دوستان</a>
                                            </li>
                                        @endif
                                        @if($user->id != auth()->user()->id)
                                            <li>
                                                <div class="more">
                                                    <svg class="olymp-three-dots-icon">
                                                        <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
                                                    </svg>
                                                    <ul class="more-dropdown more-with-triangle">
                                                        <li>
                                                            <a href="#">گزارش پروفایل</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">مسدود کردن کاربر</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>

                            <div class="control-block-button">
                                <a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue" data-toggle="tooltip" title="درخواست دوستی">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control bg-purple" data-toggle="tooltip" title="ارسال پیام">
                                    <svg class="olymp-chat---messages-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use>
                                    </svg>
                                </a>

                                @if($user->id == auth()->user()->id)
                                    <div class="btn btn-control bg-primary more">
                                    <svg class="olymp-settings-icon">
                                        <use xlink:href="/icons/icons.svg#olymp-settings-icon"></use>
                                    </svg>


                                            <ul class="more-dropdown more-with-triangle triangle-bottom-right">

                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-profile-photo">بروزرسانی تصویر پروفایل عمومی</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-family-photo">بروزرسانی تصویر پروفایل خانواده</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-friends-photo"> بروزرسانی تصویر پروفایل دوستان</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-relatives-photo">بروزرسانی تصویر پروفایل آشنایان</a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#update-header-photo">بروزرسانی تصویر هدر</a>
                                                </li>
                                                <li>
                                                    <a href="/AccountSettings">تنظیمات حساب</a>
                                                </li>
                                            </ul>
                                </div>
                                @endif

                            </div>
                        </div>
                        <div class="top-header-author">
                            <a href="/ProfilePage/{{$user->userName}}" class="author-thumb">
                                <img src="{{$user->profilePictures['everyOne'] != null ? $user->profilePictures['everyOne'] : '/img/photo-item8.jpg'}}">
                            </a>
                            <div class="author-content">
                                <a class="h4 author-name">{{$user->fullName()}}</a>
                                <div class="country">{{$user->province}}  {{$user->city}} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Window-popup بروزرسانی تصویر هدر -->

    <div class="modal fade " id="update-header-photo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" dir="rtl">بارگذاری تصویر هدر</h4>
                </div>
                <div class="modal-body">
                    <form id="headerImageForm">
                        @csrf
                        <h5 class="form-control">عکس مورد نظرتو انتخاب کن</h5>
                        <label for="headerImageUpload" class="form-control mx-auto" style="max-width: 100%">
                            <svg class="olymp-computer-icon mx-auto">
                                <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </label>
                        <input id="headerImageUpload" type="file" class="form-control imageUploadInput"/>
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-around">
                    <div id="headerImagePreview" class="upload-photo-item img-thumbnail "> </div>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ... end Window-popup بروزرسانی تصویر هدر -->

    <!-- Window-popup بروزرسانی تصویر پروفایل -->

    <div class="modal fade " id="update-profile-photo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" dir="rtl">بارگذاری تصویر پروفایل عمومی</h4>
                </div>
                <div class="modal-body">
                    <form id="profileImageForm">
                        @csrf
                        <h5 class="form-control">عکس مورد نظرتو انتخاب کن</h5>
                        <label for="profileImageUpload" class="form-control mx-auto" style="max-width: 100%">
                            <svg class="olymp-computer-icon mx-auto">
                                <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </label>
                        <input id="profileImageUpload" type="file" class="form-control imageUploadInput"/>
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-around">
                    <div id="profileImagePreview" class="upload-photo-item img-thumbnail "> </div>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Window-popup بروزرسانی تصویر خانواده -->

    <div class="modal fade " id="update-family-photo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" dir="rtl">بارگذاری تصویر پروفایل خانواده</h4>
                </div>
                <div class="modal-body">
                    <form id="familyImageForm">
                        @csrf
                        <h5 class="form-control">عکس مورد نظرتو انتخاب کن</h5>
                        <label for="familyImageUpload" class="form-control mx-auto" style="max-width: 100%">
                            <svg class="olymp-computer-icon mx-auto">
                                <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </label>
                        <input id="familyImageUpload" type="file" class="form-control imageUploadInput"/>
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-around">
                    <div id="familyImagePreview" class="upload-photo-item img-thumbnail "> </div>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Window-popup بروزرسانی تصویر دوستان -->

    <div class="modal fade " id="update-friends-photo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" dir="rtl">بارگذاری تصویر پروفایل دوستان</h4>
                </div>
                <div class="modal-body">
                    <form id="friendsImageForm">
                        @csrf
                        <h5 class="form-control">عکس مورد نظرتو انتخاب کن</h5>
                        <label for="friendsImageUpload" class="form-control mx-auto" style="max-width: 100%">
                            <svg class="olymp-computer-icon mx-auto">
                                <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </label>
                        <input id="friendsImageUpload" type="file" class="form-control imageUploadInput"/>
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-around">
                    <div id="friendsImagePreview" class="upload-photo-item img-thumbnail "> </div>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Window-popup بروزرسانی تصویر آشنایان -->

    <div class="modal fade " id="update-relatives-photo">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" dir="rtl">بارگذاری تصویر پروفایل آشنایان</h4>
                </div>
                <div class="modal-body">
                    <form id="relativesImageForm">
                        @csrf
                        <h5 class="form-control">عکس مورد نظرتو انتخاب کن</h5>
                        <label for="relativesImageUpload" class="form-control mx-auto" style="max-width: 100%">
                            <svg class="olymp-computer-icon mx-auto">
                                <use xlink:href="/icons/icons.svg#olymp-computer-icon"></use>
                            </svg>
                        </label>
                        <input id="relativesImageUpload" type="file" class="form-control imageUploadInput"/>
                        <button type="submit" class="form-control btn btn-success">ارسال</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-around">
                    <div id="relativesImagePreview" class="upload-photo-item img-thumbnail "> </div>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#headerImageUpload").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#headerImagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });

            $("#headerImageForm").on('submit', function (e) {
                e.preventDefault();
                let pic = $("#headerImageUpload")[0].files[0];
                let formData = new FormData();
                let _token = $('input[name="_token"]').val();
                formData.append('pic',pic);
                $.ajax({
                    method : 'post',
                    url : '/uploadHeaderImage',
                    data : formData,
                    contentType: false,
                    processData : false,
                    headers : {
                        'X-CSRF-TOKEN' : _token
                    }
                }).done(function(){
                    window.location.reload(true);
                });
            });

            $("#profileImageUpload").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#profileImagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });

            $("#profileImageForm").on('submit', function (e) {
                e.preventDefault();
                let pic = $("#profileImageUpload")[0].files[0];
                let formData = new FormData();
                let _token = $('input[name="_token"]').val();
                formData.append('pic',pic);
                $.ajax({
                    method : 'post',
                    url : '/uploadProfileImage',
                    data : formData,
                    contentType: false,
                    processData : false,
                    headers : {
                        'X-CSRF-TOKEN' : _token
                    }
                }).done(function(){
                    window.location.reload(true);
                });
            })

            $("#familyImageUpload").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#familyImagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });

            $("#familyImageForm").on('submit', function (e) {
                e.preventDefault();
                let pic = $("#familyImageUpload")[0].files[0];
                let formData = new FormData();
                let _token = $('input[name="_token"]').val();
                formData.append('pic',pic);
                $.ajax({
                    method : 'post',
                    url : '/uploadFamilyImage',
                    data : formData,
                    contentType: false,
                    processData : false,
                    headers : {
                        'X-CSRF-TOKEN' : _token
                    }
                }).done(function(){
                    window.location.reload(true);
                });
            })


            $("#friendsImageUpload").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#friendsImagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });

            $("#friendsImageForm").on('submit', function (e) {
                e.preventDefault();
                let pic = $("#friendsImageUpload")[0].files[0];
                let formData = new FormData();
                let _token = $('input[name="_token"]').val();
                formData.append('pic',pic);
                $.ajax({
                    method : 'post',
                    url : '/uploadFriendsImage',
                    data : formData,
                    contentType: false,
                    processData : false,
                    headers : {
                        'X-CSRF-TOKEN' : _token
                    }
                }).done(function(){
                    window.location.reload(true);
                });
            })


            $("#relativesImageUpload").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#relativesImagePreview").css("background-image", "url("+this.result+")");
                    }
                }
            });

            $("#relativesImageForm").on('submit', function (e) {
                e.preventDefault();
                let pic = $("#relativesImageUpload")[0].files[0];
                let formData = new FormData();
                let _token = $('input[name="_token"]').val();
                formData.append('pic',pic);
                $.ajax({
                    method : 'post',
                    url : '/uploadRelativesImage',
                    data : formData,
                    contentType: false,
                    processData : false,
                    headers : {
                        'X-CSRF-TOKEN' : _token
                    }
                }).done(function(){
                    window.location.reload(true);
                });
            })

        });
    </script>
@endsection
@section('content')
    @yield('content')
@endsection
@section('content2')
    @yield('content2')
@endsection
@section('main')

    @yield('main')



@endsection

