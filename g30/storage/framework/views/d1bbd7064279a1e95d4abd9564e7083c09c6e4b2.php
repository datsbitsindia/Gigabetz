<div class="footer_main">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h5>QUICK LINKS</h5>
        <ul class="">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About SanghYatra</a></li>
          <li><a href="registration.php">Registration</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6">
        <h5>Contact Us</h5>
        <ul class="">
          <li><a href="tel:8264665715"><i class="fa fa-phone"></i> (+91) 8264665715</a></li>
          <li><a href="mailto:arhamaadisangh@gmail.com"><i class="fa fa-envelope"></i> arhamaadisangh@gmail.com</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-6">
        <h5>FOLLOW US</h5>
        <ul class="social_link">
                    <li><a href="https://www.facebook.com/ArhamAadiSangh" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/ArhamAadiSangh" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+918264665715" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
      </div>
    </div>
  </div>
</div>


<script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/popper.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontend/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
$(document).on("scroll", function(){
        if($(document).scrollTop() > 86){
            $("#banner").addClass("shrink");
        }
        else
        {
            $("#banner").removeClass("shrink");
        }
    });

    $(document).ready(function() {
       
        $("#owl-demo").owlCarousel({
          autoPlay : 3000,
          stopOnHover : true,
          navigation:false,
          pagination: false,
          paginationSpeed : 1000,
          goToFirstSpeed : 2000,
          singleItem : true,
          autoHeight : true,
          transitionStyle:"fade"
        });

        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        
        $(".zoom").hover(function(){
            
            $(this).addClass('transition');
        }, function(){
            
            $(this).removeClass('transition');
        });
       
    });

    $(function() {
        $(document).on("change",".uploadFile", function()
        {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
     
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
     
                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }
          
        });
    });
    
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
      var fileName = document.getElementById("adharcard_image").files[0].name;
      var nextSibling = e.target.nextElementSibling
      nextSibling.innerText = fileName
    });
    
    

    $('.date').datepicker();
    
    
       function register_user(){ 
        var mobile_number = $('#mobile').val();
        var email = $('#email').val();
        var aadhar = $('#aadhar_no').val();
        var applicant_name = $('#applicant_name').val();
        var age = $('#age').val();
        var gender = $('#gender').val();
        var father_name = $('#father_name').val();
        var village = $('#village').val();
        
        var postal_address = $('#postal_address').val();
        var city = $('#city').val();
        var district = $('#district').val();
        var state = $('#state').val();
        var pincode = $('#pincode').val();
        var whatsapp = $('#whatsapp').val();
        var emergency_contact = $('#emergency_contact').val();
        
        
        var err = new Array();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var reg = /^[0-9]+$/;
        if (mobile_number == '') {
            $('#err_mobile').text('Please enter mobile number');
            err.push(2);
        } else {
            if (!mobile_number.match(reg)) {
                $('#err_mobile').text('Please enter mobile number only digits');
                err.push(2);
            } else if (mobile_number.length < 10) {
                $('#err_mobile').text('please enter atleast 10 digit mobile number');
                err.push(2);
            } else {
                $('#err_mobile').text('');
            }
        }
        if (email == '') {
            $('#err_email').text('Please enter email');
            err.push(2);
        } else {
            if (!filter.test(email)) {
                $('#err_email').text('Please enter valid email');
                err.push(2);
            } else {
                $('#err_email').text('');
            }
        }
        
        if( document.getElementById("applicant_image").files.length == 0 ){
            //console.log("no files selected");
            $('#err_applicant_image').text("Profile Photo not selected!");
             err.push(2);
        } else {
            $('#err_applicant_image').text('');
        }
        
        if( document.getElementById("adharcard_image").files.length == 0 ){
            //console.log("no files selected");
            $('#err_adharcard_image').text("Aadhar card not selected!");
             err.push(2);
        } else {
            $('#err_adharcard_image').text('');
        }
        
        if (aadhar == '') {
            $('#err_aadhar').text('Please enter Aadhar number');
            err.push(2);
        } else {
                    if (aadhar.length == 12) {
                      $('#err_aadhar').text('');  
                    }else{
                       $('#err_aadhar').text('please enter 12 digit'); 
                       err.push(1);
                    }
                    
        }
        
        if (emergency_contact == '') {
            $('#err_emergency_contact').text('Please enter Emergency Contact');
            err.push(2);
        } else {
                
                $('#err_emergency_contact').text('');
           
        }
        
        if (applicant_name == '') {
            $('#err_applicant_name').text('Please enter applicant number');
            err.push(2);
        } else {
                
                $('#err_applicant_name').text('');
           
        }
        if (age == '') {
            $('#err_age').text('Please enter age');
            err.push(2);
        } else {
                if (age > 60) {
                    $('#err_age').text('Please age less than 60 year');
                    err.push(2);
                } else {
                        
                        $('#err_age').text('');
                   
                }
           
        }
        
        if (gender == '') {
            $('#err_gender').text('Please enter gender');
            err.push(2);
        } else {
                
                $('#err_gender').text('');
           
        }
        
        if (father_name == '') {
            $('#err_father_name').text('Please enter father name');
            err.push(2);
        } else {
                
                $('#err_father_name').text('');
           
        }
        
        if (village == '') {
            $('#err_village').text('Please enter village');
            err.push(2);
        } else {
                
                $('#err_village').text('');
           
        }
        
        if (postal_address == '') {
            $('#err_postal_address').text('Please enter postal address');
            err.push(2);
        } else {
                
                $('#err_postal_address').text('');
           
        }
        
        if (city == '') {
            $('#err_city').text('Please enter city');
            err.push(2);
        } else {
                
                $('#err_city').text('');
           
        }
        
        if (district == '') {
            $('#err_district').text('Please enter district');
            err.push(2);
        } else {
                
                $('#err_district').text('');
           
        }
        
        if (state == '') {
            $('#err_state').text('Please enter state');
            err.push(2);
        } else {
                
                $('#err_state').text('');
           
        }
        
        if (pincode == '') {
            $('#err_pincode').text('Please enter pincode');
            err.push(2);
        } else {
                
                $('#err_pincode').text('');
           
        }
        
        if (whatsapp == '') {
            $('#err_whatsapp').text('Please enter whatsapp');
            err.push(2);
        } else {
                
                $('#err_whatsapp').text('');
           
        }
        
        if (err.length > 0) {
            return false;
        } else {
            
            return true;         
            
        }
        return false;  
       }
      
           function submitAction()
        {
            $("#registerForm").submit(); 
            return true;
        }
       function check_status(aadhar){
           var is_chk = 0;
           $.ajax({
                'type': 'POST',
                'url': 'check_aadhar.php',
                'data': {aadhar: aadhar},
                'cache': false,
                'success': function (response) {
                    if(response == "success"){
                      
                      is_chk = 1;
                      return is_chk;
                      //return true;
                    }else{
                        $('#err_aadhar').text('already exist Aadhar number');
                        is_chk = 0;
                        return is_chk;
                        //return false;
                    }
                }
                
            });
            
       }
</script><?php /**PATH /home/tenderkings/public_html/crm/timir/g/resources/views/partials/_footer.blade.php ENDPATH**/ ?>