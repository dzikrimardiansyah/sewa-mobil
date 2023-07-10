<div class="main-wrapper">
		
	<!-- Header -->
	<div class="header">
	
		<!-- Logo -->
		<div class="header-left">
			
			
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="feather-chevrons-left"></i>
			</a>
		</div>
		<!-- /Logo -->

		<!-- Search -->
		<div class="top-nav-search">
			<div class="main">
					<form class="search" method="post" action="index_admin" >
						<div class="s-icon"><i class="fas fa-search"></i></div>
						<input type="text" class="form-control" placeholder="Start typing your Search..." />
						<ul class="results">
							<li>
								<h6><i class="feather-calendar me-1"></i> Appointments</h6>
								<p>No matched Appointment found. <a href="{{url('upcoming-appointments')}}"><span>View all</span></a></p>
							</li>
							<li>
								<h6><i class="feather-calendar me-1"></i> Specialities</h6>
								<p>No matched Appointment found. <a href="{{url('specialities')}}"><span>View all</span></a></p>
							</li>
							<li>
								<h6><i class="feather-user me-1"></i> Doctors</h6>
								<p>No matched Appointment found. <a href="{{url('doctor-list')}}"><span>View all</span></a></p>
							</li>
							<li>
								<h6><i class="feather-users me-1"></i> Patients</h6>
								<p>No matched Appointment found. <a href="{{url('patient-list')}}"><span>View all</span></a></p>
							</li>
						</ul>
					</form>
				</div>
		</div>
		<!-- /Search -->
		<!-- Mobile Menu Toggle -->
		<a class="mobile_btn" id="mobile_btn">
			<i class="fas fa-bars"></i>
		</a>
		<!-- /Mobile Menu Toggle -->
		
		<!-- Header Right Menu -->
		<ul class="nav nav-tabs user-menu">
			<!-- Flag -->
			<li class="nav-item">
				<a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
					<i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
				</a>
			</li>
			<!-- /Flag -->
			<!-- Notifications -->
			</li>
			<!-- /Notifications -->
			
			<!-- User Menu -->
				<li class="nav-item dropdown main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img src="{{ URL::asset('/assets_admin/img/profile/user1.jpg')}}" alt="">
							<span class="status online"></span>
						</span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="{{ URL::asset('/assets_admin/img/profile/user1.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>{{ Auth::user()->name }}</h6>
								<p class="text-muted mb-0"></p>
							</div>
						</div>
						<a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"><i class="feather-log-out me-1"></i> Logout
						<form id="logout-form" action="{{ route('logout') }}" method="POST">
						@csrf
						</form>
						</a>
					</div>
				</li>
				<!-- /User Menu -->
			
		</ul>
		<!-- /Header Menu -->
		
	</div>