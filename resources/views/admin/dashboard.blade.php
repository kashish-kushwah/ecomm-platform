@extends('admin.layouts.main')
@section('content')
  <!-- Row start -->
  <div class="row">
    <div class="col-xl-4 col-sm-6 col-12">
      <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex flex-row">
            <div class="icon-box lg rounded-3 bg-light mb-4">
              <i class="bi bi-bag-check text-primary fs-2"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 lh-1 d-flex align-items-center">
                <i class="bi bi-caret-up-fill text-success me-1 fs-3"></i><span class="text-success me-2">8%
                </span> from
                last week.
              </p>
              <h1 class="fw-bold mb-2">2,500</h1>
              <h6 class="m-0 fw-normal opacity-50">Visitors</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
      <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex flex-row">
            <div class="icon-box lg rounded-3 bg-light mb-4">
              <i class="bi bi-bag-check text-primary fs-2"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 lh-1 d-flex align-items-center">
                <i class="bi bi-caret-up-fill text-success me-1 fs-3"></i><span class="text-success me-2">23% </span> from
                last week.
              </p>
              <h1 class="fw-bold mb-2">3,900</h1>
              <h6 class="m-0 fw-normal opacity-50">Subscribers</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex flex-row">
            <div class="icon-box lg rounded-3 bg-light mb-4">
              <i class="bi bi-bag-check text-primary fs-2"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 lh-1 d-flex align-items-center">
                <i class="bi bi-caret-down-fill text-danger me-1 fs-3"></i><span class="text-danger me-2">18% </span> from
                last week.
              </p>
              <h1 class="fw-bold mb-2">$8,300</h1>
              <h6 class="m-0 fw-normal opacity-50">Revenue</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->

  <!-- Row start -->
  <div class="row">
    <div class="col-xxl-8 col-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4 class="card-title">Overview</h4>
        </div>
        <div class="card-body">
          <!-- Row start -->
          <div class="row">
            <div class="col-lg-4">
              <div class="text-center">
                <div class="text-center mb-3">
                  <p class="text-muted mb-1">This Month</p>
                  <div class="text-center">
                    <h2 class="mb-0">$86,990</h2>
                    <div class="badge bg-success mt-2">
                      + 21.68%
                    </div>
                  </div>
                </div>
                <div class="row g-0">
                  <div class="col-sm-6">
                    <div class="border-bottom border-end p-3">
                      <p class="text-muted mb-1">Signups</p>
                      <h5 class="m-0">3,690</h5>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="border-bottom p-3">
                      <p class="text-muted mb-1">Sales</p>
                      <h5 class="m-0">8,765</h5>
                    </div>
                  </div>
                </div>
                <div class="row g-0">
                  <div class="col-sm-6">
                    <div class="border-bottom border-end p-3">
                      <p class="text-muted mb-1">Growth</p>
                      <h5 class="m-0">18.9%</h5>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="border-bottom p-3">
                      <p class="text-muted mb-1">Users</p>
                      <h5 class="m-0">560k</h5>
                    </div>
                  </div>
                </div>
                <div class="row g-0">
                  <div class="col-sm-6">
                    <div class="border-end p-3">
                      <p class="text-muted mb-1">Revenue</p>
                      <h5 class="m-0">$9,984</h5>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="p-3">
                      <p class="text-muted mb-1">Expenses</p>
                      <h5 class="m-0">$6,443</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div id="overview"></div>
            </div>
          </div>
          <!-- Row end -->
        </div>
      </div>
    </div>
    <div class="col-xxl-4 col-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4 class="card-title">Reached Audience</h4>
        </div>
        <div class="card-body">
          <div class="auto-align-graph">
            <div id="reachedAudience"></div>
          </div>
          <div class="grid text-center">
            <div class="g-col-4">
              <i class="bi bi-caret-up-fill text-primary"></i>
              <h3 class="m-0 mt-1">54%</h3>
              <p class="text-secondary m-0">Male</p>
            </div>
            <div class="g-col-4">
              <i class="bi bi-caret-up-fill text-primary"></i>
              <h3 class="m-0 mt-1">36%</h3>
              <p class="text-secondary m-0">Female</p>
            </div>
            <div class="g-col-4">
              <i class="bi bi-caret-down-fill text-danger"></i>
              <h3 class="m-0 mt-1">10%</h3>
              <p class="text-secondary m-0">Other</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->

  <!-- Row start -->
  <div class="row">
    <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-6 col-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4 class="card-title">Top Social Networks</h4>
        </div>
        <div class="card-body">
          <div id="socialNetwork" class="mb-5"></div>
          <!-- Row start -->
          <div class="row text-center">
            <div class="col-4">
              <i class="bi bi-record-circle text-primary"></i>
              <h3 class="m-0 mt-1">68%</h3>
              <p class="text-secondary m-0">Google</p>
            </div>
            <div class="col-4">
              <i class="bi bi-record-circle text-primary"></i>
              <h3 class="m-0 mt-1">24%</h3>
              <p class="text-secondary m-0">Bing</p>
            </div>
            <div class="col-4">
              <i class="bi bi-record-circle text-danger"></i>
              <h3 class="m-0 mt-1">8%</h3>
              <p class="text-secondary m-0">Yahoo</p>
            </div>
          </div>
          <!-- Row end -->
        </div>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-6 col-12">
      <div class="card mb-4">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="card-title">Sales</h4>
            <div id="sparkline1"></div>
          </div>
        </div>
        <div class="card-body">
          <div class="text-center my-3">
            <h1 class="fw-bold mb-2 display-6">2,500</h1>
            <h5 class="m-0 fw-normal opacity-50">
              8% of total (2,54,000)
            </h5>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="card-title">Revenue</h4>
            <div id="sparkline2"></div>
          </div>
        </div>
        <div class="card-body">
          <div class="text-center my-3">
            <h1 class="fw-bold mb-2 display-6">$7,900</h1>
            <h5 class="m-0 fw-normal opacity-50">
              15% of total ($1,85,900.00)
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-6 col-sm-12 col-12">
      <div class="card mb-4">
        <div class="card-header">
          <h4 class="card-title">Visitors</h4>
        </div>
        <div class="card-body">
          <div class="m-0">
            <h2 class="fw-semibold mb-2">5,89,000</h2>
            <div class="d-flex gap-4">
              <div class="fs-5">
                <span class="opacity-50">New</span>
                <span>65,900</span>
              </div>
              <div class="fs-5">
                <span class="opacity-50">Returning</span>
                <span>2,50,400</span>
              </div>
            </div>
          </div>
          <div id="visitorsGraph"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->

  <!-- Row start -->
  <div class="row">
    <div class="col-xl-12">
      <div class="card mb-4">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <div class="">
              <h4 class="card-title">Page Views</h4>
            </div>
            <div class="btn-group ms-auto" role="group" aria-label="Basic radio toggle button group">

              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked="" />
              <label class="btn btn-outline-primary" for="btnradio1">Today</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" />
              <label class="btn btn-outline-primary" for="btnradio2">7D</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" />
              <label class="btn btn-outline-primary" for="btnradio3">Last Month</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio4" />
              <label class="btn btn-outline-primary" for="btnradio4">Last 3 Months</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio5" />
              <label class="btn btn-outline-primary" for="btnradio5">Last Year</label>

            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="border border-dark rounded-3">
            <div class="table-responsive">
              <table class="table align-middle custom-table m-0">
                <thead>
                  <tr>
                    <th></th>
                    <th>Sessions</th>
                    <th>Users</th>
                    <th>Pageviews</th>
                    <th>Unique Pageviews</th>
                    <th>Avg. Time</th>
                    <th>Bounce Rate</th>
                    <th>Conversion</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <span class="fw-semibold">www.bootstrap.gallery</span>
                    </td>
                    <td>
                      <h2 class="my-3">72,350</h2>
                      <div id="sparkline3"></div>
                    </td>
                    <td>
                      <h2 class="my-3">54,860</h2>
                      <div id="sparkline4"></div>
                    </td>
                    <td>
                      <h2 class="my-3">98,430</h2>
                      <div id="sparkline5"></div>
                    </td>
                    <td>
                      <h2 class="my-3">46,980</h2>
                      <div id="sparkline6"></div>
                    </td>
                    <td>
                      <h2 class="my-3">00:12:35</h2>
                      <div id="sparkline7"></div>
                    </td>
                    <td>
                      <h2 class="my-3">16.05%</h2>
                      <div id="sparkline8"></div>
                    </td>
                    <td>
                      <h2 class="my-3">85.4%</h2>
                      <div id="sparkline9"></div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>/home</td>
                    <td>26,350</td>
                    <td>19,768</td>
                    <td>72,846</td>
                    <td>39,490</td>
                    <td>00:08:27</td>
                    <td>12.29%</td>
                    <td>66.8%</td>
                    <td>
                      <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>/products</td>
                    <td>47,226</td>
                    <td>23,985</td>
                    <td>86,905</td>
                    <td>33,220</td>
                    <td>00:10:38</td>
                    <td>18.33%</td>
                    <td>89.3%</td>
                    <td>
                      <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>/dashboards</td>
                    <td>58,992</td>
                    <td>32,675</td>
                    <td>65,889</td>
                    <td>28,343</td>
                    <td>00:12:22</td>
                    <td>21.48%</td>
                    <td>94.7%</td>
                    <td>
                      <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>/themes</td>
                    <td>72,320</td>
                    <td>41,873</td>
                    <td>38,910</td>
                    <td>20,554</td>
                    <td>00:15:55</td>
                    <td>23.23%</td>
                    <td>69.8%</td>
                    <td>
                      <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>/contact</td>
                    <td>22,762</td>
                    <td>22,939</td>
                    <td>56,220</td>
                    <td>34,897</td>
                    <td>00:12:32</td>
                    <td>22.18%</td>
                    <td>75.2%</td>
                    <td>
                      <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-download"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->
@endsection
