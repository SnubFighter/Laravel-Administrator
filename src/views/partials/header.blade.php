<header>
	<h1>
		<a href="{{URL::route('admin_dashboard')}}">{{Config::get('administrator::administrator.title')}}</a>
	</h1>

	<ul id="menu">
		@foreach ($menu as $key => $item)
			@include('administrator::partials.menu_item')
		@endforeach
	</ul>
	<div id="right_nav">
		@if (count(Config::get('administrator::administrator.locales')) > 0)
			<ul id="lang_menu">
				<li class="menu">
				<span>{{Config::get('app.locale')}}</span>
					@if (count(Config::get('administrator::administrator.locales')) > 1)
						<ul>
							@foreach (Config::get('administrator::administrator.locales') as $lang)
								@if (Config::get('app.locale') != $lang)
									<li>
										<a href="{{URL::route('admin_switch_locale', array($lang))}}">{{$lang}}</a>
									</li>
								@endif
							@endforeach
						</ul>
					@endif
				</li>
			</ul>
		@endif
		<a href="{{URL::to('/')}}" id="back_to_site">{{trans('administrator::administrator.backtosite')}}</a>
		@if(Config::get('administrator::administrator.logout_path'))
			<a href="{{URL::to(Config::get('administrator::administrator.logout_path'))}}" id="logout">{{trans('administrator::administrator.logout')}}</a>
		@endif
	</div>
</header>