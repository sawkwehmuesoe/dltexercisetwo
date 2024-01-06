@include('layouts.adminheader')

		<!-- Start Left Navbar  -->
			<div class="wrappers">
				<nav class="navbar navbar-expand-md navbar-light">

					<div id="nav" class="navbar-collapse collapse">
						<div class="container-fluid">
							<div class="row">
                                @include('layouts.adminleftsidebar')
								

								<!-- Start Top Side Bar  -->
								<div class="col-lg-10 col-md-9 fixed-top ms-auto topnavbars">
									<div class="row">

										<nav class="nav navbar-expand navbar-light bg-white shadow">

											<!-- search  -->
											<form class="me-auto" action="" method="">
												<div class="input-group">
													<input type="text" name="search" id="search" class="form-control border-0 shadow-none" placeholder="Search..." />
													<div class="input-group-append">
														<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
													</div>
												</div>
											</form>
											<!-- search  -->

											<!-- notify & userlogout  -->

											<ul class="navbar-nav me-5 pe-5">
												<!-- notify  -->
												<li class="nav-item dropdowns">
													<a href="javascript:void(0);" class="nav-line dropbtn" onclick="dropbtn(event)">
														<i class="fas fa-bell"></i>
														<span class="badge bg-danger">5</span>
													</a>

													<div class="dropdown-contents mydropdowns">
														<h6>Alert Center</h6>
														<a href="javascript:void(0);" class="">
															<div>
																<i class="fas fa-file-alt"></i>
															</div>
															<div>
																<p class="small text-muted">3 May 2023</p>
																<i>A new members creaded.</i>
															</div>
														</a>

														<a href="javascript:void(0);" class="">
															<div>
																<i class="fas fa-database text-warning"></i>
															</div>
															<div>
																<p class="small text-muted">3 May 2023</p>
																<i>Some of your data are missing.</i>
															</div>
														</a>

														<a href="javascript:void(0);" class="">
															<div>
																<i class="fas fa-user text-info"></i>
															</div>
															<div>
																<p class="small text-muted">3 May 2023</p>
																<i>New user are invited you.</i>
															</div>
														</a>
														<a href="javascrip:void(0);" class="small text-muted text-center">Show All Notification</a>
													</div>
												</li> 
												<!-- notify  -->
												<!-- message -->
												<li class="nav-item dropdowns mx-3">
													<a href="javascript:void(0);" class="nav-line dropbtn" onclick="dropbtn(event)">
														<i class="fas fa-envelope"></i>
														
													</a>

													<div class="dropdown-contents mydropdowns">
														<h6>Message Center</h6>
														<a href="javascript:void(0);" class="d-flex">
															<div class="me-3">
																<img src="./assets/img/users/user1.jpg" class="rounded-circle" width="30" alt="user1" />
															</div>
															<div>
																<p class="small text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																<i>Ms.July - 25min ago</i>
															</div>
														</a>

														<a href="javascript:void(0);" class="d-flex">
															<div class="me-3">
																<img src="./assets/img/users/user2.jpg" class="rounded-circle" width="30" alt="user2" />
															</div>
															<div>
																<p class="small text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																<i>Mr.Anton - 40min ago</i>
															</div>
														</a>

														<a href="javascript:void(0);" class="d-flex">
															<div class="me-3">
																<img src="./assets/img/users/user3.jpg" class="rounded-circle" width="30" alt="user3" />
															</div>
															<div>
																<p class="small text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																<i>Ms.Pa Pa - 55min ago</i>
															</div>
														</a>
														<a href="javascrip:void(0);" class="small text-muted text-center">Read More Meassage</a>
													</div>
												</li> 
												<!-- message -->
												<!-- userlogout -->
												<li class="nav-item dropdown">
													<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
														<span class="small text-muted me-2">{{$userdata['name']}}</span>
														<img src="./assets/img/users/user1.jpg" class="rounded-circle" width="25" />
													</a>

													<div class="dropdown-menu">
														<a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-user fa-sm me-2 text-muted"></i>Profile</a>
														<a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-cogs fa-sm me-2 text-muted"></i>Setting</a>
														<a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-list fa-sm me-2 text-muted"></i>Activity Log</a>
														<div class="dropdown-divider"></div>
														<a href="javascript:void(0);" class="dropdown-item"><i class="fas fa-sign-out-alt fa-sm me-2 text-muted"></i>Logout</a>
													</div>
												</li> 
												<!-- userlogout -->
											</ul>

											<!-- notify & userlogout -->
										</nav>

									</div>
								</div>
								<!-- End Top Side Bar  -->
							</div>
						</div>
					</div>

				</nav>
			</div>
		<!-- End Left Navbar  -->

		{{-- Start Content Area  --}}
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-10 col-md-9 pt-md-5 mt-md-3 ms-auto">
						<div class="row">
							{{-- Start Inner Content Area  --}}
							<h5>@yield('caption')</h5>
							@yield('content')
							{{-- End Inner Content Area  --}}
						</div>
					</div>
				</div>
				
			</div>
		</section>
		{{-- End Content Area  --}}

<!-- 1ST -->
@include('layouts.adminfooter')