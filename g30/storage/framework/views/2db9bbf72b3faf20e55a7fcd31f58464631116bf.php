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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <span id="submit_gp_msg"></span>
                   <input id="UserID" type="hidden" class="form-control" name="UserID" value="">
                    
                    <div class="form-group row">
                        <label for="Boltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="Boltonline1" type="text" class="form-control <?php $__errorArgs = ['Boltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Boltonline1" value="<?php echo e(old('Boltonline1')); ?>" readonly>
                                    
                                    <?php $__errorArgs = ['Boltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <input id="Boltonline2" type="text" class="form-control <?php $__errorArgs = ['Boltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Boltonline2" readonly value="<?php echo e(old('Boltonline2')); ?>"> 
                                    <?php $__errorArgs = ['Boltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="Points" class="col-md-4 col-form-label"><?php echo e(__('Points')); ?></label>
        
                        <div class="col-md-8">
                            
                            <input id="Points" type="text" class="form-control <?php $__errorArgs = ['Points'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Points" value="<?php echo e(old('Points')); ?>" autocomplete="Points">
                            <?php $__errorArgs = ['Points'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                           
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="TransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="TransctionCode" type="text" class="form-control <?php $__errorArgs = ['TransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TransctionCode" value="<?php echo e(old('TransctionCode')); ?>" required autocomplete="TransctionCode">
        
                            <?php $__errorArgs = ['TransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_gp"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                     <span id="submit_deposite_msg"></span>
                    <input id="dUserID" type="hidden" class="form-control" name="dUserID" value="">
                    
                    <!--<div class="form-group row">-->
                    <!--    <label for="Bolt" class="col-md-4 col-form-label"><?php echo e(__('Bolt')); ?></label>-->
        
                    <!--    <div class="col-md-8">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="Bolt1" type="text" class="form-control <?php $__errorArgs = ['Bolt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bolt1" value="<?php echo e(old('Bolt1')); ?>" readonly>-->
                                    
                    <!--                <?php $__errorArgs = ['Bolt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong><?php echo e($message); ?></strong>-->
                    <!--                    </span>-->
                    <!--                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                    <!--            </div>-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="Bolt2" type="text" class="form-control <?php $__errorArgs = ['Bolt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bolt2" value="<?php echo e(old('Bolt2')); ?>" readonly>-->
                
                    <!--                <?php $__errorArgs = ['Bolt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong><?php echo e($message); ?></strong>-->
                    <!--                    </span>-->
                    <!--                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group row">
                        <label for="Boltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="dBoltonline1" type="text" class="form-control <?php $__errorArgs = ['dBoltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dBoltonline1" value="<?php echo e(old('dBoltonline1')); ?>" readonly>
                                    
                                    <?php $__errorArgs = ['dBoltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <input id="dBoltonline2" type="text" class="form-control <?php $__errorArgs = ['dBoltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dBoltonline2" value="<?php echo e(old('dBoltonline2')); ?>" readonly>
                
                                    <?php $__errorArgs = ['dBoltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="Amount" class="col-md-4 col-form-label"><?php echo e(__('Amount')); ?></label>
        
                        <div class="col-md-8">
                            <input id="Amount" type="text" class="form-control <?php $__errorArgs = ['Amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Amount" value="<?php echo e(old('Amount')); ?>" required autocomplete="Amount" autofocus>
        
                            <?php $__errorArgs = ['Amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                     
                    
                    
                    <div class="form-group row">
                        <label for="Remarks" class="col-md-4 col-form-label"><?php echo e(__('Remarks')); ?></label>
        
                        <div class="col-md-8">
                            <!--<input id="Remarks" type="text" class="form-control <?php $__errorArgs = ['Remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Remarks" value="<?php echo e(old('Remarks')); ?>" required autocomplete="Remarks">-->
                            <textarea id="Remarks" class="form-control <?php $__errorArgs = ['Remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Remarks" required><?php echo e(old('Remarks')); ?></textarea>
                            <?php $__errorArgs = ['Remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="dTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="dTransctionCode" type="text" class="form-control <?php $__errorArgs = ['dTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dTransctionCode" value="<?php echo e(old('dTransctionCode')); ?>" required autocomplete="dTransctionCode">
        
                            <?php $__errorArgs = ['dTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_deposite"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <span id="submit_withdraw_msg"></span>
                    <input id="wUserID" type="hidden" class="form-control" name="wUserID" value="">
                    
                    <!--<div class="form-group row">-->
                    <!--    <label for="wBolt" class="col-md-4 col-form-label"><?php echo e(__('Bolt')); ?></label>-->
        
                    <!--    <div class="col-md-8">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="wBolt1" type="text" class="form-control <?php $__errorArgs = ['wBolt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wBolt1" value="<?php echo e(old('wBolt1')); ?>" readonly>-->
                                    
                    <!--                <?php $__errorArgs = ['wBolt1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong><?php echo e($message); ?></strong>-->
                    <!--                    </span>-->
                    <!--                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                    <!--            </div>-->
                    <!--            <div class="col-md-6">-->
                    <!--                <input id="wBolt2" type="text" class="form-control <?php $__errorArgs = ['wBolt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wBolt2" value="<?php echo e(old('wBolt2')); ?>" readonly>-->
                
                    <!--                <?php $__errorArgs = ['wBolt2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                    <!--                    <span class="invalid-feedback" role="alert">-->
                    <!--                        <strong><?php echo e($message); ?></strong>-->
                    <!--                    </span>-->
                    <!--                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                    <!--            </div>-->
                    <!--        </div>-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group row">
                        <label for="wBoltonline" class="col-md-4 col-form-label popupusername"></label>
        
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="wBoltonline1" type="text" class="form-control <?php $__errorArgs = ['wBoltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wBoltonline1" value="<?php echo e(old('wBoltonline1')); ?>" readonly>
                                    
                                    <?php $__errorArgs = ['wBoltonline1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6">
                                    <input id="wBoltonline2" type="text" class="form-control <?php $__errorArgs = ['wBoltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wBoltonline2" value="<?php echo e(old('wBoltonline2')); ?>" readonly>
                
                                    <?php $__errorArgs = ['wBoltonline2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label for="Amount" class="col-md-4 col-form-label"><?php echo e(__('Amount')); ?></label>
        
                        <div class="col-md-8">
                            <input id="wAmount" type="text" class="form-control <?php $__errorArgs = ['wAmount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wAmount" value="<?php echo e(old('wAmount')); ?>" required autocomplete="wAmount" autofocus>
        
                            <?php $__errorArgs = ['wAmount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="WithdrawType" class="col-md-4 col-form-label"><?php echo e(__('Withdraw Type')); ?></label>
        
                        <div class="col-md-8">
                            <!--<input id="Amount" type="text" class="form-control <?php $__errorArgs = ['Amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Amount" value="<?php echo e(old('Amount')); ?>" required autocomplete="Amount" autofocus>-->
                            <select class="form-control <?php $__errorArgs = ['WithdrawType'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="WithdrawType" name="WithdrawType" required>
                                <option value="UPI">UPI</option>
                                <option value="BANK">BANK</option>
                                
                            </select>
                            <?php $__errorArgs = ['WithdrawType'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="wRemarks" class="col-md-4 col-form-label"><?php echo e(__('Remarks')); ?></label>
        
                        <div class="col-md-8">
                            <!--<input id="Remarks" type="text" class="form-control <?php $__errorArgs = ['Remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Remarks" value="<?php echo e(old('Remarks')); ?>" required autocomplete="Remarks">-->
                            <textarea id="wRemarks" class="form-control <?php $__errorArgs = ['wRemarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wRemarks" required><?php echo e(old('wRemarks')); ?></textarea>
                            <?php $__errorArgs = ['Remarks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="wTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="wTransctionCode" type="text" class="form-control <?php $__errorArgs = ['wTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="wTransctionCode" value="<?php echo e(old('wTransctionCode')); ?>" required autocomplete="wTransctionCode">
        
                            <?php $__errorArgs = ['wTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="submit" class="btn btn-dark submit_withdraw"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    
                    <span id="submit_MinMaxOdds_msg"></span>
                    <input id="mUserID" type="hidden" class="form-control" name="mUserID" value="">
                    
                    
                    
                    <div class="form-group row">
                        <label for="MinimumOdds" class="col-md-4 col-form-label"><?php echo e(__('Minimum Odds')); ?></label>
        
                        <div class="col-md-8">
                            <input id="MinimumOdds" type="number" class="form-control <?php $__errorArgs = ['MinimumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Lay Oddf" name="MinimumOdds" value="<?php echo e(old('MinimumOdds')); ?>" required autocomplete="MinimumOdds">
        
                            <?php $__errorArgs = ['MinimumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="MaximumOdds" class="col-md-4 col-form-label"><?php echo e(__('Maximum Odds')); ?></label>
        
                        <div class="col-md-8">
                            <input id="MaximumOdds" type="number" class="form-control <?php $__errorArgs = ['MaximumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Back Oddf" name="MaximumOdds" value="<?php echo e(old('MaximumOdds')); ?>" required autocomplete="MaximumOdds">
        
                            <?php $__errorArgs = ['MaximumOdds'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="mmTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="mmTransctionCode" type="text" class="form-control <?php $__errorArgs = ['mmTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mmTransctionCode" value="<?php echo e(old('mmTransctionCode')); ?>" required autocomplete="mmTransctionCode">
        
                            <?php $__errorArgs = ['mmTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_MinMaxOdds"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    
                    <span id="submit_ExposureLimit_msg"></span>
                    <input id="eUserID" type="hidden" class="form-control" name="eUserID" value="">
                    
                    <div class="form-group row">
                        <label for="oldLimit" class="col-md-4 col-form-label"><?php echo e(__('Old Limit')); ?></label>
        
                        <div class="col-md-8">
                            <input id="oldLimit" type="text" class="form-control <?php $__errorArgs = ['oldLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="oldLimit" value="<?php echo e(old('oldLimit')); ?>" readonly>
        
                            <?php $__errorArgs = ['oldLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="ExposureLimit" class="col-md-4 col-form-label"><?php echo e(__('Exposure Limit')); ?></label>
        
                        <div class="col-md-8">
                            <input id="ExposureLimit" type="text" class="form-control <?php $__errorArgs = ['ExposureLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ExposureLimit" value="<?php echo e(old('ExposureLimit')); ?>" required autocomplete="ExposureLimit">
        
                            <?php $__errorArgs = ['ExposureLimit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="eTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="eTransctionCode" type="text" class="form-control <?php $__errorArgs = ['eTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="eTransctionCode" value="<?php echo e(old('eTransctionCode')); ?>" required autocomplete="eTransctionCode">
        
                            <?php $__errorArgs = ['eTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_ExposureLimit"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <span id="submit_CreditReference_msg"></span>
                    <input id="cUserID" type="hidden" class="form-control" name="cUserID" value="">
                   
                    <div class="form-group row">
                        <label for="oldCredit" class="col-md-4 col-form-label"><?php echo e(__('Old Credit')); ?></label>
        
                        <div class="col-md-8">
                            <input id="oldCredit" type="text" class="form-control <?php $__errorArgs = ['oldCredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="oldCredit" value="<?php echo e(old('oldCredit')); ?>" readonly>
        
                            <?php $__errorArgs = ['oldCredit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="CreditReference" class="col-md-4 col-form-label"><?php echo e(__('Credit Reference')); ?></label>
        
                        <div class="col-md-8">
                            <input id="CreditReference" type="text" class="form-control <?php $__errorArgs = ['CreditReference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="CreditReference" value="<?php echo e(old('CreditReference')); ?>" required autocomplete="CreditReference">
        
                            <?php $__errorArgs = ['CreditReference'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="cTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="cTransctionCode" type="text" class="form-control <?php $__errorArgs = ['cTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cTransctionCode" value="<?php echo e(old('cTransctionCode')); ?>" required autocomplete="cTransctionCode">
        
                            <?php $__errorArgs = ['cTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_CreditReference"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                     <span id="submit_UserPassword_msg"></span>
                    <input id="cpUserID" type="hidden" class="form-control" name="cpUserID" value="">
                    
                    
                    <div class="form-group row">
                        <label for="Password" class="col-md-4 col-form-label"><?php echo e(__('New Password')); ?></label>
        
                        <div class="col-md-8">
                            <input id="Password" type="password" class="form-control <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Password" value="<?php echo e(old('Password')); ?>" required autocomplete="Password">
        
                            <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="ConfirmPassword" class="col-md-4 col-form-label"><?php echo e(__('Confirm Password')); ?></label>
        
                        <div class="col-md-8">
                            <input id="ConfirmPassword" type="password" class="form-control <?php $__errorArgs = ['ConfirmPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ConfirmPassword" value="<?php echo e(old('ConfirmPassword')); ?>" required autocomplete="ConfirmPassword">
        
                            <?php $__errorArgs = ['ConfirmPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="upTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="upTransctionCode" type="text" class="form-control <?php $__errorArgs = ['upTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="upTransctionCode" value="<?php echo e(old('upTransctionCode')); ?>" required autocomplete="upTransctionCode">
        
                            <?php $__errorArgs = ['upTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_UserPassword"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
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
                        <label for="ssTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="ssTransctionCode" type="text" class="form-control <?php $__errorArgs = ['ssTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ssTransctionCode" value="<?php echo e(old('ssTransctionCode')); ?>" required autocomplete="ssTransctionCode">
        
                            <?php $__errorArgs = ['ssTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_changeStatus"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
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
                        <label for="acTransctionCode" class="col-md-4 col-form-label"><?php echo e(__('Transction Code')); ?></label>
        
                        <div class="col-md-8">
                            <input id="acTransctionCode" type="text" class="form-control <?php $__errorArgs = ['acTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="acTransctionCode" value="<?php echo e(old('acTransctionCode')); ?>" required autocomplete="acTransctionCode">
        
                            <?php $__errorArgs = ['acTransctionCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success cls_button_page" data-dismiss="modal"><i class="fa fa-undo"></i> Close</button>
                    <button type="button" class="btn btn-dark submit_SuperMasterAccess"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>
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
                <?php echo csrf_field(); ?>
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
                    <!--<button type="button" class="btn btn-dark submit_SuperMasterAccess"><?php echo e(__('Submit')); ?> <i class="fa fa-angle-double-right"></i></button>-->
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/Chart.bundle.min.js')); ?>"></script>
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(asset('public/frontend/js/script.js')); ?>"></script>
</body>
</html><?php /**PATH /home/nationaltenders/public_html/crawling_tenders/g30/resources/views/partials/_footer.blade.php ENDPATH**/ ?>