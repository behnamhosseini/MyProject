

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Olympus</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="/Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="/css/swiper.min.css">
	<link href="/css/faceMocion.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="/css/emojionearea.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-grid.css">

	<!-- Theme Styles CSS -->
	<link rel="stylesheet" type="text/css" href="/css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="/css/blocks.css">

	<link rel="stylesheet" href="/css/persian-datepicker.min.css">
	<!-- Main Font -->


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-select.css">

	<style>
		a:hover{
			text-decoration:none;
		}
	</style>


</head>
<body>

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
		<a href="/Newsfeed" class="logo">
			<img src="/img/logo.png" alt="Olympus">
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="باز کردن منو"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/Newsfeed">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="left" title="" data-original-title="اخبار و اطلاعیه ها"><use xlink:href="/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href=
					   "/favPages">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="صفحه علاقه مندی ها"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/FriendGroups">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="گروه های دوستان"><use xlink:href="/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/WeatherWidget">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="برنامه آب و هوا"><use xlink:href="/icons/icons.svg#olymp-weather-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/CalendarAndEvents-MonthlyCalendar.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="تقویم و رویدادها"><use xlink:href="/icons/icons.svg#olymp-calendar-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/CommunityBadges">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Community Badges"><use xlink:href="/icons/icons.svg#olymp-badge-icon"></use></svg>
					</a>
				</li>
				<li>
					<a href="/FriendsBirthday">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="تولد دوستان"><use xlink:href="/icons/icons.svg#olymp-cupcake-icon"></use></svg>
					</a>
				</li>
				@auth
					<li>
						<a href="/ProfilePageFinancialAffairs/{{auth()->user()->userName}}">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title=" حساب کتاب"><use xlink:href="/icons/icons.svg#olymp-stats-icon"></use></svg>
						</a>
					</li>
				@endauth
				<li>
					<a href="27-ManageWidgets.html">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="مدیریت ابزارها"><use xlink:href="/icons/icons.svg#olymp-manage-widgets-icon"></use></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="/Newsfeed" class="logo">
			<img src="/img/logo.png" alt="Olympus">
			<h6 class="logo-title">olympus</h6>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-close-icon"></use></svg>
						<span class="left-menu-title" >بستن منو</span>
					</a>
				</li>
				<li>
					<a href="/Newsfeed">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="left" title="" data-original-title="NEWSFEED"><use xlink:href="/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">اخبار و اطلاعیه ها</span>
					</a>
				</li>
				<li>
					<a href="/FavPages">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="FAV PAGE"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>
						<span class="left-menu-title">صفحات علاقه مندی ها</span>
					</a>
				</li>
				<li>
					<a href="/FriendGroups">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="FRIEND GROUPS"><use xlink:href="/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">گروه های دوستان</span>
					</a>
				</li>
				<li>
					<a href="/WeatherWidget">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="WEATHER APP"><use xlink:href="/icons/icons.svg#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">برنامه آب و هوا</span>
					</a>
				</li>
				<li>
					<a href="/CalendarAndEvents">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="CALENDAR AND EVENTS"><use xlink:href="/icons/icons.svg#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">تقویم و رویدادها</span>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Community Badges"><use xlink:href="/icons/icons.svg#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">مدال های کاربری</span>
					</a>
				</li>
				<li>
					<a href="/FriendsBirthday">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Friends Birthdays"><use xlink:href="/icons/icons.svg#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">تولد دوستان</span>
					</a>
				</li>
				@auth
					<li>
						<a href="/ProfilePageFinancialAffairs/{{auth()->user()->userName}}">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title=" حساب کتاب"><use xlink:href="/icons/icons.svg#olymp-stats-icon"></use></svg>
                            <span class="left-menu-title">حساب کتاب</span>
						</a>
					</li>
				@endauth
			</ul>

			@auth
				<div class="profile-completion">

					<div class="skills-item">
						<div class="skills-item-info">
							<span class="skills-item-title"> تکمیل مشخصات کاربری</span>
							<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="200" data-to="{{$accountCompletion}}"  data-from="0"></span><span class="units">{{$accountCompletion}}%</span></span>
						</div>
						<div class="skills-item-meter">
							<span class="skills-item-meter-active bg-primary" style="width: {{$accountCompletion}}%"></span>
						</div>
					</div>

					<span>اطلاعات <a href="#">حساب کاربری</a> را تکمیل کنید تا کاربران بتوانند شما را براحتی پیدا کنند!</span>

				</div>
			@endauth
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="/Newsfeed" class="logo js-sidebar-open">
			<img src="/img/logo.png" alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="/Newsfeed" class="logo">
			<img src="/img/logo.png" alt="Olympus">
			<h6 class="logo-title">olympus</h6>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			@auth
				<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="{{auth()->user()->profilePictures['everyOne'] != null ? auth()->user()->profilePictures['everyOne'] : '/img/photo-item8.jpg'}}" class="rounded-circle avatar ">
						<span class="icon-status online"></span>
					</div>
					<a href="/ProfilePage/{{auth()->user()->userName}}" class="author-name fn">
						<div class="author-title">

								{{auth()->user()->firstName}}

								<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
							{{--@guest--}}
								{{--کاربر مهمان--}}
							{{--@endguest--}}
						</div>
					</a>
					<span class="author-subtitle">{{auth()->user()->customStatus}}</span>
				</div>
			</div>
			@endauth

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">بخش اصلی</h6>
			</div>

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon"><use xlink:href="/icons/icons.svg#olymp-close-icon"></use></svg>
						<span class="left-menu-title" >بستن منو</span>
					</a>
				</li>
				<li>
					<a href="/mobile-index">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="left" title="" data-original-title="NEWSFEED"><use xlink:href="/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
						<span class="left-menu-title">اخبار و اطلاعیه ها</span>
					</a>
				</li>
				<li>
					<a href="/Mobile-28-YourAccount-PersonalInformation">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="FAV PAGE"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>
						<span class="left-menu-title">صفحات علاقه مندی ها</span>
					</a>
				</li>
				<li>
					<a href="mobile-29-YourAccount-AccountSettings.html">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="FRIEND GROUPS"><use xlink:href="/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
						<span class="left-menu-title">گروه های دوستان</span>
					</a>
				</li>

				<li>
					<a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="WEATHER APP"><use xlink:href="/icons/icons.svg#olymp-weather-icon"></use></svg>
						<span class="left-menu-title">برنامه آب و هوا</span>
					</a>
				</li>
				<li>
					<a href="Mobile-32-YourAccount-EducationAndEmployement.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="CALENDAR AND EVENTS"><use xlink:href="/icons/icons.svg#olymp-calendar-icon"></use></svg>
						<span class="left-menu-title">تقویم و رویدادها</span>
					</a>
				</li>
				<li>
					<a href="Mobile-33-YourAccount-Notifications.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Community Badges"><use xlink:href="/icons/icons.svg#olymp-badge-icon"></use></svg>
						<span class="left-menu-title">مدال های کاربری</span>
					</a>
				</li>
				<li>
					<a href="Mobile-34-YourAccount-ChatMessages.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Friends Birthdays"><use xlink:href="/icons/icons.svg#olymp-cupcake-icon"></use></svg>
						<span class="left-menu-title">تولد دوستان</span>
					</a>
				</li>
				@auth
					<li>
						<a href="/ProfilePageFinancialAffairs/{{auth()->user()->userName}}">
							<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title=" حساب کتاب"><use xlink:href="/icons/icons.svg#olymp-stats-icon"></use></svg>
                            <span class="left-menu-title">حساب کتاب</span>
						</a>
					</li>
				@endauth
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="Manage Widgets"><use xlink:href="/icons/icons.svg#olymp-manage-widgets-icon"></use></svg>
						<span class="left-menu-title">مدیریت ابزارها</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">حساب کاربری شما</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="#">

						<svg class="olymp-menu-icon"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>

						<span>تنظیمات حساب کاربری</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="left" title="" data-original-title="FAV PAGE"><use xlink:href="/icons/icons.svg#olymp-star-icon"></use></svg>

						<span>ایجاد صفحه علاثه مندی ها</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-logout-icon"><use xlink:href="/icons/icons.svg#olymp-logout-icon"></use></svg>

						<span>خروج</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">درباره Olympus</h6>
			</div>

			<ul class="about-olympus">
				<li>
					<a href="#">
						<span>شرایط و ظوابط</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>سوالات متداول</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>فرصت های شغلی</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>تماس با ما</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">

					@if(auth()->check())
						@foreach(\App\User::all() as $user)
							@if($user->id !== auth()->user()->id)
								<li class="inline-items" >
									<div class="author-thumb">
										<a href="/ProfilePage/{{$user->userName}}"><img data-toggle="popover" data-trigger="hover" data-title="{{$user->firstName}}" data-content="{{cache('user-is-online-' . $user->id) ? 'Online' : "آخرین بازدید : " . $user->lastActivity->format('Y/m/d - H:m:s') }}" alt="author" src="{{$user->profilePictures['everyOne'] != null ? $user->profilePictures['everyOne'] : '/img/photo-item8.jpg'}}" class="avatar"></a>
										<span class="icon-status {{cache('user-is-online-' . $user->id) ? 'online' : 'disconected'}}"></span>
										{{--@if(!cache('user-is-online-' . $user->id))--}}
										{{--<small>last online : {{$user->lastActivity}}</small>--}}
										{{--@endif--}}
									</div>
									{{--<h6>{{$user->firstName}}</h6>--}}
								</li>

							@endif
						@endforeach
					@endif
			</ul>
		</div>

		<div class="search-friend inline-items">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>
			</a>
		</div>

		<a href="/YourAccount-ChatMessages" class="olympus-chat inline-items">
			<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">دوستان نزدیک</a>
				<a href="#">تنظیمات</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items">

					<div class="author-thumb">
						<img alt="author" src="/img/avatar67-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">سارا پور اسماعیلی</a>
						<span class="status">آنلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items">

					<div class="author-thumb">
						<img alt="author" src="/img/avatar62-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">سمانه پاکدل</a>
						<span class="status">در محل کار!</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items">


					<div class="author-thumb">
						<img alt="author" src="/img/avatar68-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">نیما</a>
						<span class="status">آنلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items">


					<div class="author-thumb">
						<img alt="author" src="/img/avatar69-sm.jpg" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">داوود اکبری</a>
						<span class="status">مشغول</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items">


					<div class="author-thumb">
						<img alt="author" src="/img/avatar70-sm.jpg" class="avatar">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">حسام اکبری</a>
						<span class="status">آفلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">خانواده من</a>
				<a href="#">تنظیمات</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items">

					<div class="author-thumb">
						<img alt="author" src="/img/avatar64-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">الهه کاظمی زاده</a>
						<span class="status">آنلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">بدون دسته بندی</a>
				<a href="#">تنظیمات</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items">

					<div class="author-thumb">
						<img alt="author" src="/img/avatar62-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">سمانه پاکدل</a>
						<span class="status">در محل کار!</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items">


					<div class="author-thumb">
						<img alt="author" src="/img/avatar68-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">نیما</a>
						<span class="status">آنلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items">


					<div class="author-thumb">
						<img alt="author" src="/img/avatar69-sm.jpg" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">داوود اکبری</a>
						<span class="status">مشغول</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items">

					<div class="author-thumb">
						<img alt="author" src="/img/avatar71-sm.jpg" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">محمد محمدی زاده</a>
						<span class="status">آنلاین</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group">
				<input class="form-control" placeholder="جستجوی دوستان..." value="" type="text">
			</form>

			<a href="/AccountSettings" class="settings">
				<svg class="olymp-settings-icon"><use xlink:href="/icons/icons.svg#olymp-settings-icon"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon"><use xlink:href="/icons/icons.svg#olymp-close-icon"></use></svg>
			</a>


		</div>

		<a href="/ChatMessages" class="olympus-chat inline-items">

			<h6 class="olympus-chat-title">چت OLYMPUS</h6>
			<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->

<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right fixed-sidebar-responsive">

	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Header -->

<header class="header" id="site-header">

	<div class="page-title">
		<h6>Olympus</h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="افراد یا صفحات را جستجو کنید.." type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<a href="#" class="link-find-friend">یافتن دوستان</a>

		<div class="control-block">

			<div class="control-icon more has-items">

				<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">دخواست های دوستان</h6>
						<a href="#">یافتن دوستان</a>
						<a href="#">تنظیمات</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img src="/img/avatar55-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">محمد محمدی زاده</a>
									<span class="chat-message-item">دوست متقابل: فاطمه کاظمی زاده</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="/img/avatar56-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">زهرا باقری</a>
									<span class="chat-message-item">4 دوست مشترک</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							<li class="accepted">
								<div class="author-thumb">
									<img src="/img/avatar57-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									شما و <a href="#" class="h6 notification-friend">دلآرام</a> اکنون دوست هستید. برروی<a href="#" class="notification-link">دیوار</a> او چیزی بنویسید.
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
									<img src="/img/avatar58-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">آزاده اسلامی</a>
									<span class="chat-message-item">9 دوست مشترک</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="/FriendsRequests" class="view-all bg-blue">مشاهده همه رویدادها</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
				<div class="label-avatar bg-purple">2</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">چت / پیامها</h6>
						<a href="#">تنظیم به عنوان خوانده شده</a>
						<a href="#">تنظیمات</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
							<li class="message-unread">
								<div class="author-thumb">
									<img src="/img/avatar59-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">محمد کریمی فرد</a>
									<span class="chat-message-item">سلام جیمز! این دیانا است، من فقط می خواستم به شما اطلاع دهم که ما مجبوریم برنامه ریزی کنیم ...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="/img/avatar60-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">فاطمه منصور نژاد</a>
									<span class="chat-message-item">خیلی عالیه، فردا شما را ملاقات خواهم کرد.</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="/img/avatar61-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">زهرا ساداتی</a>
									<span class="chat-message-item">سلام امروز هوا چطور است؟</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 9:56pm</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>

							<li class="chat-group">
								<div class="author-thumb">
									<img src="/img/avatar11-sm.jpg" alt="author">
									<img src="/img/avatar12-sm.jpg" alt="author">
									<img src="/img/avatar13-sm.jpg" alt="author">
									<img src="/img/avatar10-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">شما, فاطمه, زهرا &amp; محدثه +3</a>
									<span class="last-message-author">محدثه:</span>
									<span class="chat-message-item">بله همه چیز تحت کنترل است!</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 اردیبهشت 10:23am</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-purple">مشاهده همه پیامها</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="/icons/icons.svg#olymp-thunder-icon"></use></svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">اطلاعیه ها</h6>
						<a href="#">تنظیم به عنوان خوانده شده</a>
						<a href="#">تنظیمات</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="/img/avatar62-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">کاظمی زاده</a> یک نظر جدید در <a href="#" class="notification-link">استاتوس پروفایل</a> شما ارسال کرد.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="/img/avatar63-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">نادیا قربانی زاده</a> اکنون دوست شماست!</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ساعت قبل</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="/img/avatar64-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">سارا عدالت پور</a> یک نظر جدید در<a href="#" class="notification-link">عکس</a> ارسال کرد.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 10:25</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="comment-photo">
									<img src="/img/comment-photo1.jpg" alt="photo">
									<span>“این عکس عالی به نظر میرسه.. عالیه..!”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="/img/avatar65-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">باقری</a> از شما در رویداد <a href="#" class="notification-link">Gotham Bar</a> دعوت نمود.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
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
									<img src="/img/avatar66-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">کاظمی زاده</a>درباره <a href="#" class="notification-link">استاتوس پروفایل</a> یک نظر جدید ارسال کرد.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
								</div>
								<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="/icons/icons.svg#olymp-heart-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="/Notifications" class="view-all bg-primary">مشاهده همه اطلاعیه ها</a>
				</div>
			</div>


			<div class="author-page author vcard inline-items more">
                @auth
                <div class="author-thumb">

                        <img alt="author" src="{{auth()->user()->profilePictures['everyOne'] != null ? auth()->user()->profilePictures['everyOne'] : '/img/photo-item8.jpg'}}" class="avatar">
                        <span class="icon-status online"></span>

                        <div class="more-dropdown">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">حساب کاربری</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="/AccountSettings">

                                            <svg class="olymp-menu-icon"><use xlink:href="/icons/icons.svg#olymp-menu-icon"></use></svg>

                                            <span>تنظیمات پروفایل</span>
                                        </a>
                                    </li>

                                        <li>
                                            <a href="/logout">
                                                <svg class="olymp-logout-icon"><use xlink:href="/icons/icons.svg#olymp-logout-icon"></use></svg>

                                                <span>خروج</span>
                                            </a>
                                        </li>
                                </ul>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">تنظیمات چت</h6>
                                </div>

                                <ul class="chat-settings">
                                    <li>
                                        <a href="#">
                                            <span class="icon-status online"></span>
                                            <span>آنلاین</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-status away"></span>
                                            <span>مشغول</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-status disconected"></span>
                                            <span>آفلاین</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <span class="icon-status status-invisible"></span>
                                            <span>نامرئی</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">وضعیت سفارشی</h6>
                                </div>

                                <form class="form-group with-button custom-status" >
                                    <input id="customStatus" class="form-control" placeholder="" type="text" value="">

                                    <button class="bg-purple" type="submit" id="customStatusForm" value="dsd">
                                        <svg class="olymp-check-icon"><use xlink:href="/icons/icons.svg#olymp-check-icon"></use></svg>
                                    </button>
                                </form>



                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>شرایط و ضوابط</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>سوالات متداول</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contactUs">
                                            <span>تماس با ما</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>


                </div>
                <a href="/ProfilePage/{{auth()->user()->userName}}" class="author-name fn">
                    <div class="author-title ">

                            {{auth()->user()->firstName}}
                            <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                        {{--@guest--}}
                            {{--{{'کاربر مهمان'}}--}}
                        {{--@endguest--}}
                    </div>

                        <span id="customStatusShow" class="author-subtitle">آزاد</span>
                </a>
                @endauth
            </div>

		</div>

	</div>

</header>

<!-- ... end Header -->


<!-- Responsive Header -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="/icons/icons.svg#olymp-thunder-icon"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="/icons/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">دخواست های دوستان</h6>
					<a href="#">یافتن دوستان</a>
					<a href="#">تنظیمات</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="/img/avatar55-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">محمد محمدی زاده</a>
							<span class="chat-message-item">دوست متقابل: فاطمه کاظمی زاده</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="/img/avatar56-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">زهرا باقری</a>
							<span class="chat-message-item">4 دوست مشترک</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="/img/avatar57-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							شما و <a href="#" class="h6 notification-friend">دلآرام</a> اکنون دوست هستید. برروی<a href="#" class="notification-link">دیوار</a> او چیزی بنویسید.
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
							<img src="/img/avatar58-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">آزاده اسلامی</a>
							<span class="chat-message-item">9 دوست مشترک</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
				</ul>
				<a href="#" class="view-all bg-blue">بررسی همه رویداد ها</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">چت / پیامها</h6>
					<a href="#">تنظیم به عنوان خوانده شده</a>
					<a href="#">تنظیمات</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img src="/img/avatar59-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">محمد کریمی فرد</a>
							<span class="chat-message-item">سلام جیمز! این دیانا است، من فقط می خواستم به شما اطلاع دهم که ما مجبوریم برنامه ریزی کنیم ...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
						</div>
						<span class="notification-icon">
							<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
						</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="/img/avatar60-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">فاطمه منصور نژاد</a>
							<span class="chat-message-item">خیلی عالیه، فردا شما را ملاقات خواهم کرد.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
						</div>
						<span class="notification-icon">
							<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="/img/avatar61-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">زهرا ساداتی</a>
							<span class="chat-message-item">سلام امروز هوا چطور است؟</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 9:56pm</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>

					<li class="chat-group">
						<div class="author-thumb">
							<img src="/img/avatar11-sm.jpg" alt="author">
							<img src="/img/avatar12-sm.jpg" alt="author">
							<img src="/img/avatar13-sm.jpg" alt="author">
							<img src="/img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">شما, فاطمه, زهرا &amp; محدثه +3</a>
							<span class="last-message-author">محدثه:</span>
							<span class="chat-message-item">بله همه چیز تحت کنترل است!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 اردیبهشت 10:23am</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-chat---messages-icon"><use xlink:href="/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
							</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-purple">مشاهده تمام پیام ها</a>
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">اطلاعیه ها</h6>
					<a href="#">تنظیم به عنوان خوانده شده</a>
					<a href="#">تنظیمات</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img src="/img/avatar62-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">کاظمی زاده</a> یک نظر جدید در <a href="#" class="notification-link">استاتوس پروفایل</a> شما ارسال کرد.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ساعت قبل</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="/img/avatar63-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="#" class="h6 notification-friend">نادیا قربانی زاده</a> اکنون دوست شماست!</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ساعت قبل</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-happy-face-icon"><use xlink:href="/icons/icons.svg#olymp-happy-face-icon"></use></svg>
							</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="/img/avatar64-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">سارا عدالت پور</a> یک نظر جدید در<a href="#" class="notification-link">عکس</a> ارسال کرد.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">دیروز 10:25</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-comments-post-icon"><use xlink:href="/icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</span>

						<div class="comment-photo">
							<img src="/img/comment-photo1.jpg" alt="photo">
							<span>“این عکس عالی به نظر میرسه.. عالیه..!”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="/img/avatar65-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">باقری</a> از شما در رویداد <a href="#" class="notification-link">Gotham Bar</a> دعوت نمود.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
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
							<img src="/img/avatar66-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">کاظمی زاده</a>درباره <a href="#" class="notification-link">استاتوس پروفایل</a> یک نظر جدید ارسال کرد.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">28 اردیبهشت 8:29</time></span>
						</div>
						<span class="notification-icon">
								<svg class="olymp-heart-icon"><use xlink:href="/icons/icons.svg#olymp-heart-icon"></use></svg>
							</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>
				</ul>

				<a href="/Notifications" class="view-all bg-primary">مشاهده تمام اطلاعیه ها</a>
			</div>

		</div>

		<div class="tab-pane " id="search" role="tabpanel">


			<form class="search-bar w-search notification-list friend-requests">
				<div class="form-group with-button">
					<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				</div>
			</form>


		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header -->




<!-- Main Content -->
@yield('header')
{{--</div>--}}

<div class="container">
	@yield('content2')
</div>

<div class="container">
	@yield('content3')
</div>
<div class="container">
	@yield('content4')

</div>

<div class="container">
    @yield('content-y-a')
    @yield('content-y-a-2')
</div>




<!-- ...end Main Content -->


<!-- Window-popup-CHAT for responsive min-width: 768px -->
@yield('main')
<div class="ui-block popup-chat popup-chat-responsive">
	<div class="ui-block-title">
		<span class="icon-status online"></span>
		<h6 class="title" >چت</h6>
		<div class="more">
			<svg class="olymp-three-dots-icon"><use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use></svg>
			<svg class="olymp-little-delete js-chat-open"><use xlink:href="/icons/icons.svg#olymp-little-delete"></use></svg>
		</div>
	</div>
	<div class="mCustomScrollbar">
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
	</div>

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
			<span class="material-input"></span></div>

	</form>



</div>


<script src="/js/faceMocion.js"></script>
<script src="/js/webfontloader.min.js"></script>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<script>

    $(".facemocion").faceMocion( {emociones:[
                                       {"emocion":"amo","TextoEmocion":"عاشقم!"},
                                       {"emocion":"molesto","TextoEmocion":"عصبیم"},
                                       {"emocion":"asusta","TextoEmocion":"ترسیدم"},
                                       {"emocion":"divierte","TextoEmocion":"خیلی خنده داره"},
                                       {"emocion":"gusta","TextoEmocion":"دوس دارم"},
                                       {"emocion":"triste","TextoEmocion":"ناراحتم"},
                                       {"emocion":"asombro","TextoEmocion":"متعجبم"},
                                       {"emocion":"alegre","TextoEmocion":"خوشحالم"}
                                   ]});

                            </script>
<script>
	$(document).ready(function(){
        $.ajax({
            type: 'POST',
            url: '/getCustomStatus',
            data: {
                _token: '{{ csrf_token() }}'
            }
        }).done(function(response) {
            $("#customStatusShow").text(response)
        });

		$("#customStatusForm").click(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/setCustomStatus',
                    data: {
                        customStatus: $('#customStatus').val(),
                        _token: '{{ csrf_token() }}'
                    }

                }).done(function() {
                    $.ajax({
                        type: 'POST',
                        url: '/getCustomStatus',
                        data: {
                            _token: '{{ csrf_token() }}'
                        }
                    }).done(function(response) {
                        $("#customStatusShow").text(response)
                    });

                });
		})


 	   }

	)



</script>
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
<script src="/js/popper.min.js" ></script>
<script src="/js/swiper.min.js" ></script>
<script src="/js/bootstrap.min.js" ></script>
{{--<script src="/js/bootstrap-select.min.js"></script>--}}

<script src="/js/material.min.js"></script>
<script src="/js/theme-plugins.js"></script>
<script src="/js/selectize.min.js"></script>

<!-- persian datepicker -->
<script src="/js/persian-date.min.js"></script>
<script src="/js/persian-datepicker.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>

<script src="/js/mediaelement-and-player.min.js"></script>
<script src="/js/mediaelement-playlist-plugin.min.js"></script>
<script src="/js/emojionearea.js"></script>

<!-- Init functions -->
<script src="/js/main.js"></script>
<script src="/js/sweetalert.min.js"></script>
@include('sweet::alert')

</body>
</html>