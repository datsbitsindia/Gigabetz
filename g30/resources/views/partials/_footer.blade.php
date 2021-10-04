</div>
    
</div>

<footer>
        <p class="text-center">
            &copy; Copyright 2020. All Rights Reserved.
        </p>
    </footer>
</div>


<!-- Modal -->
<div class="modal fade" id="generatePoint" tabindex="-1" role="dialog" aria-labelledby="generatePointLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Generate Point</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    <span id="submit_gp_msg"></span>
                   <input id="UserID" type="hidden" class="form-control" name="UserID" value="">
                    
                    <div class="form-group row">
                        <label for="Boltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="Boltonline1" type="text" class="form-control @error('Boltonline1') is-invalid @enderror" name="Boltonline1" value="{{ old('Boltonline1') }}" readonly>
                                    
                                    @error('Boltonline1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="Boltonline2" type="text" class="form-control @error('Boltonline2') is-invalid @enderror" name="Boltonline2" readonly value="{{ old('Boltonline2') }}"> 
                                    @error('Boltonline2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="Points" class="col-md-4 col-form-label">{{ __('Points') }}</label>
        
                        <div class="col-md-8">
                            
                            <input id="Points" type="text" class="form-control @error('Points') is-invalid @enderror" name="Points" value="{{ old('Points') }}" autocomplete="Points">
                            @error('Points')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                           
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="TransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="TransctionCode" type="text" class="form-control @error('TransctionCode') is-invalid @enderror" name="TransctionCode" value="{{ old('TransctionCode') }}" required autocomplete="TransctionCode">
        
                            @error('TransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_gp">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="Deposit" tabindex="-1" role="dialog" aria-labelledby="DepositLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                     <span id="submit_deposite_msg"></span>
                    <input id="dUserID" type="hidden" class="form-control" name="dUserID" value="">
                    
                    <!--<div class="form-group row">-->
                    <!--    <label for="Bolt" class="col-md-4 col-form-label">{{ __('Bolt') }}</label>-->
        
                    <!--    <div class="col-md-8">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="Bolt1" type="text" class="form-control @error('Bolt1') is-invalid @enderror" name="Bolt1" value="{{ old('Bolt1') }}" readonly>-->
                                    
                    <!--                @error('Bolt1')-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong>{{ $message }}</strong>-->
                    <!--                    </span>-->
                    <!--                @enderror-->
                    <!--            </div>-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="Bolt2" type="text" class="form-control @error('Bolt2') is-invalid @enderror" name="Bolt2" value="{{ old('Bolt2') }}" readonly>-->
                
                    <!--                @error('Bolt2')-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong>{{ $message }}</strong>-->
                    <!--                    </span>-->
                    <!--                @enderror-->
                    <!--            </div>-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group row">
                        <label for="Boltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="dBoltonline1" type="text" class="form-control @error('dBoltonline1') is-invalid @enderror" name="dBoltonline1" value="{{ old('dBoltonline1') }}" readonly>
                                    
                                    @error('dBoltonline1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="dBoltonline2" type="text" class="form-control @error('dBoltonline2') is-invalid @enderror" name="dBoltonline2" value="{{ old('dBoltonline2') }}" readonly>
                
                                    @error('dBoltonline2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="Amount" class="col-md-4 col-form-label">{{ __('Amount') }}</label>
        
                        <div class="col-md-8">
                            <input id="Amount" type="text" class="form-control @error('Amount') is-invalid @enderror" name="Amount" value="{{ old('Amount') }}" required autocomplete="Amount" autofocus>
        
                            @error('Amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                     
                    
                    
                    <div class="form-group row">
                        <label for="Remarks" class="col-md-4 col-form-label">{{ __('Remarks') }}</label>
        
                        <div class="col-md-8">
                            <!--<input id="Remarks" type="text" class="form-control @error('Remarks') is-invalid @enderror" name="Remarks" value="{{ old('Remarks') }}" required autocomplete="Remarks">-->
                            <textarea id="Remarks" class="form-control @error('Remarks') is-invalid @enderror" name="Remarks" required>{{ old('Remarks') }}</textarea>
                            @error('Remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="dTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="dTransctionCode" type="text" class="form-control @error('dTransctionCode') is-invalid @enderror" name="dTransctionCode" value="{{ old('dTransctionCode') }}" required autocomplete="dTransctionCode">
        
                            @error('dTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_deposite">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal WithdrawRequest -->
<div class="modal fade" id="WithdrawRequest" tabindex="-1" role="dialog" aria-labelledby="WithdrawRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Withdraw Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    <span id="submit_withdraw_msg"></span>
                    <input id="wUserID" type="hidden" class="form-control" name="wUserID" value="">
                    
                    <!--<div class="form-group row">-->
                    <!--    <label for="wBolt" class="col-md-4 col-form-label">{{ __('Bolt') }}</label>-->
        
                    <!--    <div class="col-md-8">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="wBolt1" type="text" class="form-control @error('wBolt1') is-invalid @enderror" name="wBolt1" value="{{ old('wBolt1') }}" readonly>-->
                                    
                    <!--                @error('wBolt1')-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong>{{ $message }}</strong>-->
                    <!--                    </span>-->
                    <!--                @enderror-->
                    <!--            </div>-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="wBolt2" type="text" class="form-control @error('wBolt2') is-invalid @enderror" name="wBolt2" value="{{ old('wBolt2') }}" readonly>-->
                
                    <!--                @error('wBolt2')-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong>{{ $message }}</strong>-->
                    <!--                    </span>-->
                    <!--                @enderror-->
                    <!--            </div>-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group row">
                        <label for="wBoltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="wBoltonline1" type="text" class="form-control @error('wBoltonline1') is-invalid @enderror" name="wBoltonline1" value="{{ old('wBoltonline1') }}" readonly>
                                    
                                    @error('wBoltonline1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input id="wBoltonline2" type="text" class="form-control @error('wBoltonline2') is-invalid @enderror" name="wBoltonline2" value="{{ old('wBoltonline2') }}" readonly>
                
                                    @error('wBoltonline2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label for="Amount" class="col-md-4 col-form-label">{{ __('Amount') }}</label>
        
                        <div class="col-md-8">
                            <input id="wAmount" type="text" class="form-control @error('wAmount') is-invalid @enderror" name="wAmount" value="{{ old('wAmount') }}" required autocomplete="wAmount" autofocus>
        
                            @error('wAmount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="WithdrawType" class="col-md-4 col-form-label">{{ __('Withdraw Type') }}</label>
        
                        <div class="col-md-8">
                            <!--<input id="Amount" type="text" class="form-control @error('Amount') is-invalid @enderror" name="Amount" value="{{ old('Amount') }}" required autocomplete="Amount" autofocus>-->
                            <select class="form-control @error('WithdrawType') is-invalid @enderror" id="WithdrawType" name="WithdrawType" required>
                                <option value="UPI">UPI</option>
                                <option value="BANK">BANK</option>
                                
                            </select>
                            @error('WithdrawType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="wRemarks" class="col-md-4 col-form-label">{{ __('Remarks') }}</label>
        
                        <div class="col-md-8">
                            <!--<input id="Remarks" type="text" class="form-control @error('Remarks') is-invalid @enderror" name="Remarks" value="{{ old('Remarks') }}" required autocomplete="Remarks">-->
                            <textarea id="wRemarks" class="form-control @error('wRemarks') is-invalid @enderror" name="wRemarks" required>{{ old('wRemarks') }}</textarea>
                            @error('Remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="wTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="wTransctionCode" type="text" class="form-control @error('wTransctionCode') is-invalid @enderror" name="wTransctionCode" value="{{ old('wTransctionCode') }}" required autocomplete="wTransctionCode">
        
                            @error('wTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="submit" class="btn btn-dark submit_withdraw">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal MinMaxOdds -->
<div class="modal fade" id="MinMaxOdds" tabindex="-1" role="dialog" aria-labelledby="MinMaxOddsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Min Max Odds</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    
                    <span id="submit_MinMaxOdds_msg"></span>
                    <input id="mUserID" type="hidden" class="form-control" name="mUserID" value="">
                    
                    
                    
                    <div class="form-group row">
                        <label for="MinimumOdds" class="col-md-4 col-form-label">{{ __('Minimum Odds') }}</label>
        
                        <div class="col-md-8">
                            <input id="MinimumOdds" type="number" class="form-control @error('MinimumOdds') is-invalid @enderror" placeholder="Lay Oddf" name="MinimumOdds" value="{{ old('MinimumOdds') }}" required autocomplete="MinimumOdds">
        
                            @error('MinimumOdds')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="MaximumOdds" class="col-md-4 col-form-label">{{ __('Maximum Odds') }}</label>
        
                        <div class="col-md-8">
                            <input id="MaximumOdds" type="number" class="form-control @error('MaximumOdds') is-invalid @enderror" placeholder="Back Oddf" name="MaximumOdds" value="{{ old('MaximumOdds') }}" required autocomplete="MaximumOdds">
        
                            @error('MaximumOdds')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="mmTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="mmTransctionCode" type="text" class="form-control @error('mmTransctionCode') is-invalid @enderror" name="mmTransctionCode" value="{{ old('mmTransctionCode') }}" required autocomplete="mmTransctionCode">
        
                            @error('mmTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_MinMaxOdds">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal ExposureLimit -->
<div class="modal fade" id="ExposureLimit" tabindex="-1" role="dialog" aria-labelledby="ExposureLimitLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exposure Limit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    
                    <span id="submit_ExposureLimit_msg"></span>
                    <input id="eUserID" type="hidden" class="form-control" name="eUserID" value="">
                    
                    <div class="form-group row">
                        <label for="oldLimit" class="col-md-4 col-form-label">{{ __('Old Limit') }}</label>
        
                        <div class="col-md-8">
                            <input id="oldLimit" type="text" class="form-control @error('oldLimit') is-invalid @enderror" name="oldLimit" value="{{ old('oldLimit') }}" readonly>
        
                            @error('oldLimit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="ExposureLimit" class="col-md-4 col-form-label">{{ __('Exposure Limit') }}</label>
        
                        <div class="col-md-8">
                            <input id="ExposureLimit" type="text" class="form-control @error('ExposureLimit') is-invalid @enderror" name="ExposureLimit" value="{{ old('ExposureLimit') }}" required autocomplete="ExposureLimit">
        
                            @error('ExposureLimit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="eTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="eTransctionCode" type="text" class="form-control @error('eTransctionCode') is-invalid @enderror" name="eTransctionCode" value="{{ old('eTransctionCode') }}" required autocomplete="eTransctionCode">
        
                            @error('eTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_ExposureLimit">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal CreditReference -->
<div class="modal fade" id="CreditReference" tabindex="-1" role="dialog" aria-labelledby="CreditReferenceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Credit Reference</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                    <span id="submit_CreditReference_msg"></span>
                    <input id="cUserID" type="hidden" class="form-control" name="cUserID" value="">
                   
                    <div class="form-group row">
                        <label for="oldCredit" class="col-md-4 col-form-label">{{ __('Old Credit') }}</label>
        
                        <div class="col-md-8">
                            <input id="oldCredit" type="text" class="form-control @error('oldCredit') is-invalid @enderror" name="oldCredit" value="{{ old('oldCredit') }}" readonly>
        
                            @error('oldCredit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="CreditReference" class="col-md-4 col-form-label">{{ __('Credit Reference') }}</label>
        
                        <div class="col-md-8">
                            <input id="CreditReference" type="text" class="form-control @error('CreditReference') is-invalid @enderror" name="CreditReference" value="{{ old('CreditReference') }}" required autocomplete="CreditReference">
        
                            @error('CreditReference')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="cTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="cTransctionCode" type="text" class="form-control @error('cTransctionCode') is-invalid @enderror" name="cTransctionCode" value="{{ old('cTransctionCode') }}" required autocomplete="cTransctionCode">
        
                            @error('cTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_CreditReference">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal UserPassword -->
<div class="modal fade" id="UserPassword" tabindex="-1" role="dialog" aria-labelledby="UserPasswordLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UserPasswordLabel">User Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                     <span id="submit_UserPassword_msg"></span>
                    <input id="cpUserID" type="hidden" class="form-control" name="cpUserID" value="">
                    
                    
                    <div class="form-group row">
                        <label for="Password" class="col-md-4 col-form-label">{{ __('New Password') }}</label>
        
                        <div class="col-md-8">
                            <input id="Password" type="password" class="form-control @error('Password') is-invalid @enderror" name="Password" value="{{ old('Password') }}" required autocomplete="Password">
        
                            @error('Password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="ConfirmPassword" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>
        
                        <div class="col-md-8">
                            <input id="ConfirmPassword" type="password" class="form-control @error('ConfirmPassword') is-invalid @enderror" name="ConfirmPassword" value="{{ old('ConfirmPassword') }}" required autocomplete="ConfirmPassword">
        
                            @error('ConfirmPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="upTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="upTransctionCode" type="text" class="form-control @error('upTransctionCode') is-invalid @enderror" name="upTransctionCode" value="{{ old('upTransctionCode') }}" required autocomplete="upTransctionCode">
        
                            @error('upTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_UserPassword">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal ChangeStatus -->
<div class="modal fade" id="changeStatus" tabindex="-1" role="dialog" aria-labelledby="changeStatusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                     <span id="submit_changeStatus_msg"></span>
                    <input id="ssUserID" type="hidden" class="form-control" name="ssUserID" value="">
                    <label for="" class="col-md-4 col-form-label popupusername"></label>
                    
                    <div class="row">
                        
                        <div class="col-md-6">
                             
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">User Active</label>
                                <div class="btn-switch">
                                    <input type="radio" id="useryes" name="useractive"  value="1" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="userno" name="useractive" value="0" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="useryes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="userno" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">Bet Active</label>
                                <div class="btn-switch">
                                    <input type="radio" id="betyes" name="betactive" value="1" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="betno" name="betactive" value="0" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="betyes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="betno" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group row">
                        <label for="ssTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="ssTransctionCode" type="text" class="form-control @error('ssTransctionCode') is-invalid @enderror" name="ssTransctionCode" value="{{ old('ssTransctionCode') }}" required autocomplete="ssTransctionCode">
        
                            @error('ssTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_changeStatus">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Super Master Access -->
<div class="modal fade" id="SuperMasterAccess" tabindex="-1" role="dialog" aria-labelledby="SuperMasterAccessLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusLabel">Super Master Access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                     
                     <span id="submit_SuperMasterAccess_msg"></span>
                    <input id="acUserID" type="hidden" class="form-control" name="acUserID" value="">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">Cricket</label>
                                <div class="btn-switch">
                                    <input type="radio" id="Cricketyes"  value="1" name="cricketAccess" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="Cricketno"  value="0" name="cricketAccess" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="Cricketyes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="Cricketno" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">Soccer</label>
                                <div class="btn-switch">
                                    <input type="radio" id="Socceryes" value="1" name="soccerAccess" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="Soccerno" value="0" name="soccerAccess" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="Socceryes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="Soccerno" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">Tennis</label>
                                <div class="btn-switch">
                                    <input type="radio" id="Tennisyes"  value="1" name="tennisAccess" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="Tennisno"  value="0" name="tennisAccess" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="Tennisyes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="Tennisno" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-center">
                                <label for="checkbox4" class="form-control-label d-block">Casino</label>
                                <div class="btn-switch">
                                    <input type="radio" id="Casinoyes" value="1" name="casinoAccess" class="btn-switch__radio btn-switch__radio_yes" />
                                    <input type="radio" checked id="Casinono" value="0" name="casinoAccess" class="btn-switch__radio btn-switch__radio_no" />		
                                    <label for="Casinoyes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt">On</span></label>
                                    <label for="Casinono" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt">Off</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group row">
                        <label for="acTransctionCode" class="col-md-4 col-form-label">{{ __('Transction Code') }}</label>
        
                        <div class="col-md-8">
                            <input id="acTransctionCode" type="text" class="form-control @error('acTransctionCode') is-invalid @enderror" name="acTransctionCode" value="{{ old('acTransctionCode') }}" required autocomplete="acTransctionCode">
        
                            @error('acTransctionCode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_SuperMasterAccess">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Super Master Access -->
<div class="modal fade" id="BetPrice" tabindex="-1" role="dialog" aria-labelledby="BetPriceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusLabel">Bet Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
                @csrf
                <div class="modal-body">
                     
                     <span id="submit_bitpopup_msg"></span>
                    <!--<input id="acUserID" type="hidden" class="form-control" name="acUserID" value="">-->
                    <input id="datasport" type="hidden" class="form-control" name="datasport" value="">
                    <input id="datafid" type="hidden" class="form-control" name="datafid" value="">
                    <input id="databetid" type="hidden" class="form-control" name="databetid" value="">
                    <input id="dataodval" type="hidden" class="form-control" name="dataodval" value="">
                    <input id="dataodcalval" type="hidden" class="form-control" name="dataodcalval" value="">
                    <input id="dataeventname" type="hidden" class="form-control" name="dataeventname" value="">
                    <input id="mgvalue" type="hidden" class="form-control" name="mgvalue" value="">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <!--<label for="checkbox4" class="form-control-label d-block">Cricket</label>-->
                                <div class="input-group">
                                    <input type="text" id="currentbetval" class="form-control" readonly>
                                    <input type="text" id="betamt" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-success submit_bitpopup" type="button">Place Bets</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">1000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">5000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">10000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">25000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">50000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">100000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">200000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">500000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">1000000</button>
                            <button type="button" class="btn btn-sm btn-secondary mb-1 setpopval">2500000</button>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <!--<button type="button" class="btn btn-dark submit_SuperMasterAccess">{{ __('Submit') }} <i class="fa fa-angle-double-right"></i></button>-->
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/Chart.bundle.min.js') }}"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('public/frontend/js/script.js') }}"></script>
</body>
</html>