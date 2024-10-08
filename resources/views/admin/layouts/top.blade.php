<!-- App header starts -->
					<div class="app-header d-flex align-items-center">

						<!-- Toggle buttons start -->
						<div class="d-flex">
							<button class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
								<i class="bi bi-text-indent-left fs-5"></i>
							</button>
							<button class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
								<i class="bi bi-text-indent-left fs-5"></i>
							</button>
						</div>
						<!-- Toggle buttons end -->

						<!-- App brand sm start -->
						<div class="app-brand-sm d-md-none d-sm-block">
							<a href="index.html">
								<img src="{{asset('admin-assets/images/logo-sm.svg')}}" class="logo" alt="Bootstrap Gallery">
							</a>
						</div>
						<!-- App brand sm end -->

						<!-- Breadcrumb start -->
						<ol class="breadcrumb d-none d-lg-flex ms-3">
							<li class="breadcrumb-item">
								<i class="bi bi-house lh-1"></i>
								<a href="index.html" class="text-decoration-none">Home</a>
							</li>
							<li class="breadcrumb-item text-secondary">Dashboard</li>
						</ol>
						<!-- Breadcrumb end -->

						<!-- App header actions start -->
						<div class="header-actions">
							<div class="dropdown">
								<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('admin-assets/images/flags/1x1/gb.svg')}}" class="flag-img" alt="Bootstrap Dashboards" />
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
									<div class="country-container">
										<a href="index.html" class="py-2">
											<img src="{{asset('admin-assets/images/flags/1x1/us.svg')}}" alt="Admin Panel" />
										</a>
										<a href="index.html" class="py-2">
											<img src="{{asset('admin-assets/images/flags/1x1/in.svg')}}" alt="Admin Panels" />
										</a>
										<a href="index.html" class="py-2">
											<img src="{{asset('admin-assets/images/flags/1x1/br.svg')}}" alt="Admin Dashboards" />
										</a>
										<a href="index.html" class="py-2">
											<img src="{{asset('admin-assets/images/flags/1x1/tr.svg')}}" alt="Admin Themes" />
										</a>
										<a href="index.html" class="py-2">
											<img src="{{asset('admin-assets/images/flags/1x1/id.svg')}}" alt="Google Admin" />
										</a>
									</div>
								</div>
							</div>
							<div class="dropdown border-start">
								<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-grid fs-4 lh-1 text-secondary"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-md">
									<!-- Row start -->
									<div class="d-flex gap-2 m-2 flex-wrap">
										<a href="https://www.facebook.com/bootstrapGallery" target="_black"
											class="g-col-4 p-2 border rounded-2">
											<img src="{{asset('admin-assets/images/brand-facebook.svg')}}" class="img-2x" alt="Admin Themes" />
										</a>
										<a href="https://dribbble.com/bootstrapgallery" target="_black"
											class="g-col-4 p-2 border rounded-2">
											<img src="{{asset('admin-assets/images/brand-dribbble.svg')}}" class="img-2x" alt="Admin Themes" />
										</a>
										<a href="https://twitter.com/web_dashboards" target="_black" class="g-col-4 p-2 border rounded-2">
											<img src="{{asset('admin-assets/images/brand-twitter.svg')}}" class="img-2x" alt="Admin Themes" />
										</a>
										<a href="https://in.pinterest.com/bootstrapgallery" target="_black"
											class="g-col-4 p-2 border rounded-2">
											<img src="{{asset('admin-assets/images/brand-pinterest.svg')}}" class="img-2x" alt="Admin Themes" />
										</a>
										<a href="https://www.behance.net/bootstrapgallery" target="_black"
											class="g-col-4 p-2 border rounded-2">
											<img src="{{asset('admin-assets/images/brand-behance.svg')}}" class="img-2x" alt="Admin Themes" />
										</a>
									</div>
									<!-- Row end -->
									<div class="d-grid">
										<a href="javascript:void(0)" class="btn btn-primary m-2">View All</a>
									</div>
								</div>
							</div>
							<div class="dropdown border-start">
								<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-bag-check fs-4 lh-1 text-secondary"></i>
									<span class="count-label info"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
									<div class="d-flex flex-column p-3 mx-3 my-2 border">
										<a href="javascript:void(0)" class="text-decoration-none">
											<h3 class="mb-2">$35,000</h3>
											<div class="mb-1 d-flex justify-content-between">
												<span class="text-secondary">Revenue</span>
												<span class="text-primary">+2%</span>
											</div>
											<div class="progress small">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</a>
									</div>
									<div class="d-flex flex-column p-3 mx-3 my-2 border">
										<a href="javascript:void(0)" class="text-decoration-none">
											<h3 class="mb-2">$48,000</h3>
											<div class="mb-1 d-flex justify-content-between">
												<span class="text-secondary">Income</span>
												<span class="text-primary">+7%</span>
											</div>
											<div class="progress small">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</a>
									</div>
									<div class="d-flex flex-column p-3 mx-3 my-2 border">
										<a href="javascript:void(0)" class="text-decoration-none">
											<h3 class="mb-2">3400</h3>
											<div class="mb-1 d-flex justify-content-between">
												<span class="text-secondary">Sales</span>
												<span class="text-danger">+3%</span>
											</div>
											<div class="progress small">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</a>
									</div>
									<div class="d-grid mx-3 my-3">
										<a href="javascript:void(0)" class="btn btn-primary">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown border-start">
								<a class="dropdown-toggle d-flex px-3 py-4 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-envelope-open fs-4 lh-1 text-secondary"></i>
									<span class="count-label"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex py-2">
											<img src="{{asset('admin-assets/images/user.png')}}" class="img-3x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1">Sophie Michiels</h5>
												<p class="mb-1 text-secondary">
													Membership has been ended.
												</p>
												<p class="small m-0 text-secondary">Today, 07:30pm</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex py-2">
											<img src="{{asset('admin-assets/images/user2.png')}}" class="img-3x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1">Maxwell Hill</h5>
												<p class="mb-1 text-secondary">
													Congratulate, James for new job.
												</p>
												<p class="small m-0 text-secondary">Today, 08:00pm</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex py-2">
											<img src="{{asset('admin-assets/images/user1.png')}}" class="img-3x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1">Garrett Manning</h5>
												<p class="mb-1 text-secondary">
													Lewis added new schedule release.
												</p>
												<p class="small m-0 text-secondary">Today, 09:30pm</p>
											</div>
										</div>
									</a>
									<div class="d-grid mx-3 my-3">
										<a href="javascript:void(0)" class="btn btn-primary">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown ms-2">
								<a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
									href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('admin-assets/images/user.png')}}" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow-sm">
									<div class="p-3 border-bottom mb-2">
										<h6 class="mb-1">Ella Lindsey</h6>
										<p class="m-0 small opacity-50">admin@bootstrap.gallery</p>
									</div>
									<a class="dropdown-item d-flex align-items-center" href="profile.html"><i
											class="bi bi-person fs-4 me-2"></i>Profile</a>
									<a class="dropdown-item d-flex align-items-center" href="settings.html"><i
											class="bi bi-gear fs-4 me-2"></i>Settings</a>
									<div class="d-grid p-3 py-2">
										<a class="btn btn-danger" href="login.html">Logout</a>
									</div>
								</div>
							</div>
						</div>
						<!-- App header actions end -->

					</div>
					<!-- App header ends -->