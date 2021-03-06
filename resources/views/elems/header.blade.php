<!-- Start header -->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="images/logo.png" alt="" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="index.html">Главная</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.html">Меню</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Разделы</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="reservation.html">Reservation</a>
							<a class="dropdown-item" href="stuff.html">Stuff</a>
							<a class="dropdown-item" href="gallery.html">Gallery</a>
						</div>
					</li>

					@if(auth()->check())

						@if(auth()->user()->role->name == 'admin')
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="dropdown-a" data-toggle="dropdown">Профиль</a>
								<div class="dropdown-menu" aria-labelledby="dropdown-a">
									<a class="dropdown-item" href="{{ route('admin.admin.show_admin_page') }}">Админ</a>
									<a class="dropdown-item" href="stuff.html">Профиль</a>
								</div>
							</li>
						@else
							<li class="nav-item"><a class="nav-link" href="menu.html">Профиль</a></li>
						@endif

					

					<li class="nav-item"><a class="nav-link" href="menu.html">Корзина</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ route('home.logout') }}">Выход</a></li>
					@else
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Вход</a>
						<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="{{ route('login') }}">Вход</a>
							<a class="dropdown-item" href="{{ route('register') }}">Регистрация</a>
						</div>
					</li>
					@endif

				</ul>
			</div>
		</div>
	</nav>

</header>
<!-- End header -->
