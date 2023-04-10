
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a class="brand-logo">
				<img  src="{{asset('assets/admin/images/favicon.png')}}" alt="">
				<h2><b>HALDA</b></h2>
		   </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area">
								<span class="input-group-text"><a href="javascript:void(0)">
									<svg width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white" stroke-linecap="round" stroke-linejoin="round"></circle>
									<path d="M14.5168 14.9447L17.7471 18.1667" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>

								</a></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown ">
                                <a class="nav-link " href="{{route('pages.index')}}">
								<i class="fa fa-globe"></i>

                                </a>
					
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
							
							</li>
							<li class="nav-item dropdown ">
                                <a class="nav-link bell-link" href="javascript:void(0);">
								<svg width="20" height="22" viewbox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.9026 6.85114L12.4593 10.4642C11.6198 11.1302 10.4387 11.1302 9.59922 10.4642L5.11844 6.85114" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.9089 19C18.9502 19.0084 21 16.5095 21 13.4384V6.57001C21 3.49883 18.9502 1 15.9089 1H6.09114C3.04979 1 1 3.49883 1 6.57001V13.4384C1 16.5095 3.04979 19.0084 6.09114 19H15.9089Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
                                </a>
							</li>	
							<li class="nav-item align-items-center header-border"><a class="btn btn-primary" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>	
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img src="images/tab/1.jpg" alt="">
											</div>
											<div class="header-info">
												<h6>Thomas Fleming</h6>
												<p>info@gmail.com</p>
											</div>
											
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img src="images/tab/1.jpg" class="avatar avatar-md" alt="">
													<div>
														<h6>Thomas Fleming</h6>
														<span>Web Designer</span>	
													</div>	
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a href="{{route('user.index')}}" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 16 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>

													<span class="ms-2">Profile </span>
												</a>
												<a href="{{route('message.index')}}" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>

													<span class="ms-2" >Message </span>
												</a>
											</div>
											<div class="card-footer px-0 py-2">
											
												<a href="page-login.html" class="dropdown-item ai-icon">
												<a style="margin-left:15px;" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out ml-3" style="color:#C6164F; font-size:large;"></i> LOGOUT</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
												</a>
											</div>
										</div>
										
									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>