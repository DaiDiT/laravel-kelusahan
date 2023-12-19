<nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-dark bg-black" id="mainNav">
	<div class="container">

		@if ($nav_type == 3)
		<div data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navItem">
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
			</svg>
		</div>
		@endif

		<a class="navbar-brand d-flex align-items-center {{ ($nav_type == 1) ? 'mx-auto' : '' }}" href="">
			<span>kelusahan</span>
		</a>

		@if ($nav_type == 3)
		<div class="profile-in-mobile">
			@include('partials.profile')
		</div>
		<div class="collapse navbar-collapse" id="navItem">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link {{ (Request::is('home')) ? 'active' : '' }}" href="/">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ (Request::is('about')) ? 'active' : '' }}" href="/about">Tentang</a>
				</li>
			</ul>
			<form class="d-block ms-auto search-form" action="/posts" role="search">
				<div class="input-group ms-auto">
					<input class="form-control shadow" type="search" placeholder="Cari postingan..." name="search" value="{{ request('search') }}">
					<button class="btn d-flex align-items-center" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
						</svg>
					</button>
				</div>
			</form>
		</div>
		@endif

		@if ($nav_type == 3)
		<div class="profile-in-desktop ms-4">
			@include('partials.profile')
		</div>
		@endif
		
		@if ($nav_type == 2)
		<a class="btn btn-primary shadow" role="button" href="/register">Daftar</a>
		@endif

	</div>
</nav>