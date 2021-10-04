<div class="wrapper">
    <header class="top_barnav">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{ route('inplay',3) }}">
                <img src="{{ asset('public/frontend/images/bolt-21logo.png') }}" alt="" />
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse right-profile" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="right-search">
                        <form class="clearfix" action="#">
                            <div class="show-sh"><input class="search-element form-control" type="text" placeholder="All events"></div>
                            <button id="search-sh" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                    <li class="download-apklink-right">
                        <span>
                            <a href="javascript:void(0);">
                                <span><b>Download Apk</b><i class="fab fa-android"></i> </span>
                            </a>
                        </span>
                    </li>
                    <?php
                    $bal = "";
                    $username = "";
				   if (Session::has('loginuser')){
					
						$value = Session::get('loginuser');
						//print_r($value);die();
						$username =  $value[0]['user']['UserName'];
						$bal = $value[0]['data'][0]['UserBalance'];
					    
				   }
				?>
                    <li class="balance-right">
                        <span>Balance: <b>{{ $bal }}</b></span>
                    </li>
                    @if (!Session::has('loginuser'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login-user') }}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register-user') }}">Sign up</a>
                    </li>
                    @else
                    
                    <li class="nav-item dropdown dropdown-user-profile">
                      <a class="nav-link dropdown-toggle-nocaret" href="javaScript:;" data-toggle="dropdown">
                          <div class="media user-box align-items-center">
                              <div class="media-body user-info">
                                  <p class="user-name mb-0">
								   {{ $username }}
								  </p>
                              </div>
                              <img src="{{ asset('public/frontend/images/3.jpg') }}" class="user-img" alt="user avatar">
                          </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right"> 
                            <a class="dropdown-item" href="{{ route('listuser') }}"><i class="bx bx-user"></i><span>List User</span></a>
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#BetPrice"><i class="bx bx-user"></i><span>Place Bets</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#Deposit"><i class="bx bx-user"></i><span>Deposit</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#WithdrawRequest"><i class="bx bx-user"></i><span>Withdraw Request</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#MinMaxOdds"><i class="bx bx-user"></i><span>Min Max Odds</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#ExposureLimit"><i class="bx bx-user"></i><span>Exposure Limit</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#CreditReference"><i class="bx bx-user"></i><span>Credit Reference</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;"><i class="bx bx-cog"></i><span>Profit Loss Report</span></a>
                            <a class="dropdown-item" href="javaScript:;"><i class="bx bx-tachometer"></i><span>Bet History</span></a>
                            <a class="dropdown-item" href="javaScript:;"><i class="bx bx-wallet"></i><span>Unsetteled Bet</span></a>
                            <a class="dropdown-item" href="javaScript:;"><i class="bx bx-cloud-download"></i><span>Casino Report History</span></a>
                            <a class="dropdown-item" href="javaScript:;"><i class="bx bx-cloud-download"></i><span>Set Button Values</span></a>-->
                            <!--<a class="dropdown-item" href="javaScript:;" data-toggle="modal" data-target="#UserPassword"><i class="bx bx-cloud-download"></i><span>Change Password</span></a>-->
                            
                            <div class="dropdown-divider mb-0"></div>   

                            <a class="dropdown-item" href="{{ route('logout-user') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bx bx-power-off"></i><span>{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout-user') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                          <!--<a class="dropdown-item" href="javaScript:;"><i
                                  class="bx bx-power-off"></i><span>Logout</span></a>-->
                      </div>
                    </li>

                    @endif
                    
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light scn_nav bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span>Sports</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span>Live Casino</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span>Stock</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span>Commodities</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span>Forex</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span>Crypto</span></a>
              </li>
            </ul>
          </div>
        </nav>
    </header>

    <div class="container-fluid">
      <div class="row">

        <!--<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="sidebar-sticky pt-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  cricket 
                </a>
                <ul class="sub-menus">
                    <li><a href="#">Bangabandhu T20 Cup</a></li>
                    <li><a href="#">International T20 Matches</a></li>
                    <li><a href="#">Indian Premier League</a></li>
                    <li><a href="#">Lanka Premier League</a></li>
                    <li><a href="#">One Day Internationals</a></li>
                    <li><a href="#">Quaid -e-Azam Trophy</a></li>
                    <li><a href="#">T10 CPL XI</a></li>
                    <li><a href="#">T5 IPL XI</a></li>
                    <li><a href="#">Test Matches</a></li>
                    <li><a href="#">Testing Match</a></li>
                    <li><a href="#">Twenty20 Big Bash</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Live Casino
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Stock
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Commodities
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Forex
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Crypto
                </a>
              </li>
            </ul>
          </div>
        </nav>-->