  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      @if (app('impersonate')->isImpersonating())
								<a href="{{ route('impersonate.leave') }}">
                                <i class="fas fa-sign-out-alt"></i> Leave
								</a>
							@else
								<a href="{{ lurl(trans('routes.logout')) }}">
                                <i class="fas fa-sign-out-alt"></i> Log out
								</a>
							@endif
      </li>
    </ul>
  </nav>