@extends('main')

@section('stylesheet')
    
@stop

@section('title')
Registration
@stop

@section('header')
@include('partials._header')
@stop

@section('content')


            <div class="col-md-12 ml-sm-auto col-lg-12 text-light page-height">
                <div class="all-page-box">
                    <div class="all-page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                    
                </div>

                <div class="stock-box">
				@if ($message = Session::get('success'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
				</div>
				@endif


				@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>	
						<strong>{{ $message }}</strong>
				</div>
				@endif
                    <form method="POST" action="{{ route('formaddusers') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Personal Detail:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    <div class="row">
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="username" class="col-form-label text-md-right">{{ __('User Name') }}</label>
                                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                            
                                                        @error('username')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="name" class="col-form-label text-md-right">{{ __('Full Name') }}</label>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                                    </div>
            								    </div>
            								    
            								    
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="phone" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                            
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								</div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Account Details:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    <div class="row">
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="RoleID" class="col-form-label text-md-right">{{ __('RoleID') }}</label>
                                                        <select id="RoleID" class="form-control @error('RoleID') is-invalid @enderror" name="RoleID">
                                                            <option value="">Select Account Type</option>
                    										<option value="1">Super Master</option>
                                                            <option value="2">Admin</option>
                        								</select>
                                                        @error('RoleID')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
            								        <div class="form-group">
                                                        <label for="ExposureLimit" class="col-form-label text-md-right">{{ __('ExposureLimit') }}</label>
                                                        <input id="ExposureLimit" type="text" class="form-control @error('ExposureLimit') is-invalid @enderror" name="ExposureLimit" value="{{ old('ExposureLimit') }}" required autocomplete="ExposureLimit" >
                            
                                                        @error('ExposureLimit')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="CreditReference" class="col-form-label text-md-right">{{ __('CreditReference') }}</label>
                            
                                                        <input id="CreditReference" type="text" class="form-control @error('CreditReference') is-invalid @enderror" name="CreditReference" value="{{ old('CreditReference') }}" required autocomplete="CreditReference" >
                        
                                                        @error('CreditReference')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
            								    </div>
            								    
            								</div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Commission Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="30%" style="width: 30%;">Cricket</th>
        								            <th width="30%" style="width: 30%;">Soccer</th>
        								            <th width="30%" style="width: 30%;">Tennis</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_1" type="text" class="form-control @error('Comm_Upline_1') is-invalid @enderror" name="Comm_Upline_1" value="0" readonly autocomplete="Comm_Upline_1" >
        								                 @error('Comm_Upline_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_2" type="text" class="form-control @error('Comm_Upline_2') is-invalid @enderror" name="Comm_Upline_2" value="0" readonly autocomplete="Comm_Upline_2" >
        								                 @error('Comm_Upline_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Upline_3" type="text" class="form-control @error('Comm_Upline_3') is-invalid @enderror" name="Comm_Upline_3" value="0" readonly autocomplete="Comm_Upline_3" >
        								                 @error('Comm_Upline_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_1" type="number" min="0" max="100" class="form-control @error('Comm_Downline_1') is-invalid @enderror" name="Comm_Downline_1" value="0" required autocomplete="Comm_Downline_1" >
        								                 @error('Comm_Downline_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_2" type="number" min="0" max="100" class="form-control @error('Comm_Downline_2') is-invalid @enderror" name="Comm_Downline_2" value="0" required autocomplete="Comm_Downline_2" >
        								                 @error('Comm_Downline_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Downline_3" type="number" min="0" max="100" class="form-control @error('Comm_Downline_3') is-invalid @enderror" name="Comm_Downline_3" value="0" required autocomplete="Comm_Downline_3" >
        								                 @error('Comm_Downline_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Our</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_1" type="text" class="form-control @error('Comm_Our_1') is-invalid @enderror" name="Comm_Our_1" value="100" readonly autocomplete="Comm_Our_1" >
        								                 @error('Comm_Our_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_2" type="text" class="form-control @error('Comm_Our_2') is-invalid @enderror" name="Comm_Our_2" value="100" readonly autocomplete="Comm_Our_2" >
        								                 @error('Comm_Our_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Comm_Our_3" type="text" class="form-control @error('Comm_Our_3') is-invalid @enderror" name="Comm_Our_3" value="100" readonly autocomplete="Comm_Our_3" >
        								                 @error('Comm_Our_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Partnership Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="30%" style="width: 30%;">Cricket</th>
        								            <th width="30%" style="width: 30%;">Soccer</th>
        								            <th width="30%" style="width: 30%;">Tennis</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_1" type="text" class="form-control @error('Part_Upline_1') is-invalid @enderror" name="Part_Upline_1" value="0" required autocomplete="Part_Upline_1" >

                                                        @error('Part_Upline_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_2" type="text" class="form-control @error('Part_Upline_2') is-invalid @enderror" name="Part_Upline_2" value="0" required autocomplete="Part_Upline_2" >

                                                        @error('Part_Upline_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Upline_3" type="text" class="form-control @error('Part_Upline_3') is-invalid @enderror" name="Part_Upline_3" value="0" required autocomplete="Part_Upline_3" >

                                                        @error('Part_Upline_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_1" type="text" class="form-control @error('Part_Downline_1') is-invalid @enderror" name="Part_Downline_1" value="0" required autocomplete="Part_Downline_1" >

                                                        @error('Part_Downline_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_2" type="text" class="form-control @error('Part_Downline_2') is-invalid @enderror" name="Part_Downline_2" value="0" required autocomplete="Part_Downline_2" >

                                                        @error('Part_Downline_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Downline_3" type="text" class="form-control @error('Part_Downline_3') is-invalid @enderror" name="Part_Downline_3" value="0" required autocomplete="Part_Downline_3" >

                                                        @error('Part_Downline_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Our</td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_1" type="text" class="form-control @error('Part_Our_1') is-invalid @enderror" name="Part_Our_1" value="0" required autocomplete="Part_Our_1" >

                                                        @error('Part_Our_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_2" type="text" class="form-control @error('Part_Our_2') is-invalid @enderror" name="Part_Our_2" value="0" required autocomplete="Part_Our_2" >

                                                        @error('Part_Our_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="30%" style="width: 30%;">
        								                <input id="Part_Our_3" type="text" class="form-control @error('Part_Our_3') is-invalid @enderror" name="Part_Our_3" value="0" required autocomplete="Part_Our_3" >

                                                        @error('Part_Our_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Bet Limit Setting:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        <tr>
        								            <th width="10%" style="width: 10%;"></th>
        								            <th width="18%" style="width: 18%;">Cricket</th>
        								            <th width="18%" style="width: 18%;">Soccer</th>
        								            <th width="18%" style="width: 18%;">Tennis</th>
        								            <th width="18%" style="width: 18%;">Fancy</th>
        								            <th width="18%" style="width: 18%;">Casino</th>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Up Line</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_1" type="text" class="form-control @error('Bet_Min_1') is-invalid @enderror" name="Bet_Min_1" value="0" required autocomplete="Bet_Min_1" >

                                                        @error('Bet_Min_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_2" type="text" class="form-control @error('Bet_Min_2') is-invalid @enderror" name="Bet_Min_2" value="0" required autocomplete="Bet_Min_2" >

                                                        @error('Bet_Min_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_3" type="text" class="form-control @error('Bet_Min_3') is-invalid @enderror" name="Bet_Min_3" value="0" required autocomplete="Bet_Min_3" >

                                                        @error('Bet_Min_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_4" type="text" class="form-control @error('Bet_Min_4') is-invalid @enderror" name="Bet_Min_4" value="0" required autocomplete="Bet_Min_4" >

                                                        @error('Bet_Min_4')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Min_5" type="text" class="form-control @error('Bet_Min_5') is-invalid @enderror" name="Bet_Min_5" value="0" required autocomplete="Bet_Min_5" >

                                                        @error('Bet_Min_5')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Down Line</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_1" type="text" class="form-control @error('Bet_Max_1') is-invalid @enderror" name="Bet_Max_1" value="0" required autocomplete="Bet_Max_1" >

                                                        @error('Bet_Max_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_2" type="text" class="form-control @error('Bet_Max_2') is-invalid @enderror" name="Bet_Max_2" value="0" required autocomplete="Bet_Max_2" >

                                                        @error('Bet_Max_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_3" type="text" class="form-control @error('Bet_Max_3') is-invalid @enderror" name="Bet_Max_3" value="0" required autocomplete="Bet_Max_3" >

                                                        @error('Bet_Max_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_4" type="text" class="form-control @error('Bet_Max_4') is-invalid @enderror" name="Bet_Max_4" value="0" required autocomplete="Bet_Max_4" >

                                                        @error('Bet_Max_4')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Max_5" type="text" class="form-control @error('Bet_Max_5') is-invalid @enderror" name="Bet_Max_5" value="0" required autocomplete="Bet_Max_5" >

                                                        @error('Bet_Max_5')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Delay</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_1" type="text" class="form-control @error('Bet_Delay_1') is-invalid @enderror" name="Bet_Delay_1" value="0" required autocomplete="Bet_Delay_1" >

                                                        @error('Bet_Delay_1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_2" type="text" class="form-control @error('Bet_Delay_2') is-invalid @enderror" name="Bet_Delay_2" value="0" required autocomplete="Bet_Delay_2" >

                                                        @error('Bet_Delay_2')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_3" type="text" class="form-control @error('Bet_Delay_3') is-invalid @enderror" name="Bet_Delay_3" value="0" required autocomplete="Bet_Delay_3" >

                                                        @error('Bet_Delay_3')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_4" type="text" class="form-control @error('Bet_Delay_4') is-invalid @enderror" name="Bet_Delay_4" value="0" required autocomplete="Bet_Delay_4" >

                                                        @error('Bet_Delay_4')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="Bet_Delay_5" type="text" class="form-control @error('Bet_Delay_5') is-invalid @enderror" name="Bet_Delay_5" value="0" required autocomplete="Bet_Delay_5" >

                                                        @error('Bet_Delay_5')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								    </table>
        								    
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="markets">
        							<div class="main-market">
        								<div class="market-title mt-1">
        									Min-Max Odds:
        									<!--<div class="mt-right">
        										<span class="mb-t">Maximum Bet <span>0</span></span>
        										<a href="javascript:void(0)" class="m-r-5 game-rules-icon"><span><i class="fa fa-info-circle float-right"></i></span></a>
        									</div>-->
        								</div>
        								
        								<div class="market-pairs border-0">
        								    
        								    <table class="table">
        								        
        								        <tr>
        								            <td width="10%" style="width: 10%;">Minimum Odds</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="MinimumOdds" type="text" class="form-control @error('MinimumOdds') is-invalid @enderror" name="MinimumOdds" value="{{ old('MinimumOdds') }}" required autocomplete="MinimumOdds" >

                                                        @error('MinimumOdds')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        <tr>
        								            <td width="10%" style="width: 10%;">Maximum Odds</td>
        								            <td width="18%" style="width: 18%;">
        								                <input id="MaximumOdds" type="text" class="form-control @error('MaximumOdds') is-invalid @enderror" name="MaximumOdds" value="{{ old('MaximumOdds') }}" required autocomplete="MaximumOdds" >

                                                        @error('MaximumOdds')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
        								            </td>
        								        </tr>
        								        
        								    </table>
        								    
        								    <div class="form-group">
                                                <label for="TransctionCode" class="col-form-label text-md-right">{{ __('TransctionCode') }}</label>
                    
                                                <input id="TransctionCode" type="text" class="form-control @error('TransctionCode') is-invalid @enderror" name="TransctionCode" value="{{ old('TransctionCode') }}" required autocomplete="TransctionCode" >
                    
                                                @error('TransctionCode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        								</div>
        								
        								
        							</div>
        							
        						</div>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        

                        

                        
                        
                        
						
						
						
						
						
						
						
                        
                        
                        
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="show_password" onclick="myFunction();" id="show_password" {{ old('show_password') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="show_password">
                                        {{ __('Show Password') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-theme btn-submit">
                                    {{ __('Add User') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>   
            </div>
















@endsection


@section('scripts')
<script type="text/javascript">
$( "#Comm_Downline_1" ).keyup(function(e) {
     e.preventdefault();
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_1").val(result);
    }else{
         $("#Comm_Our_1").val(100);
    }
    e.preventDefault();
});
$( "#Comm_Downline_2" ).keyup(function() {
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_2").val(result);
    }else{
         $("#Comm_Our_2").val(100);
    }
});
$( "#Comm_Downline_3" ).keyup(function() {
    var v = $(this).val();
    if(v!="" && v != 0){
    var result = (100 - parseInt(v));
    $("#Comm_Our_3").val(result);
    }else{
         $("#Comm_Our_3").val(100);
    }
});
function myFunction() {
    
  var checkBox = document.getElementById("show_password");
  //var text = document.getElementById("text");
  let password2=document.getElementById('password');
  let passwordconfirm2=document.getElementById('password-confirm');

  if (checkBox.checked == true){
    password2.setAttribute('type','text');
    passwordconfirm2.setAttribute('type','text');
  } else {
     password2.setAttribute('type','password');
     passwordconfirm2.setAttribute('type','password');
  }
}

// $("body").on('click','.btn-submit',function(e)
// {
//     e.preventDefault();
//     var mid = $(this).attr("mid");
//     if(mid != '')
//     {
//       $.ajax({
//         'type': 'POST',
//         url: {!! json_encode(url('registeruser')) !!},
//         //dataType: "json",
//         'data': {"_token": "{{ csrf_token() }}",mem_id: mid},
//         'cache': false,
//         'success': function (response)
//         {
//           //$('#get_list_data').DataTable().ajax.reload();
//           alert(response);
//         }
//         });
//     }   
// });
</script>
@endsection


