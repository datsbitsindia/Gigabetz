@extends('main')

@section('stylesheet')
    
@stop

@section('title')
Add Aaradhak
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

<div class="section page-title">
    <div class="container">
        <h1>Add Aaradhak</h1>
    </div>
</div>

<!-- section about begin -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-lg">
          <div class="card-header"> 
            <img src="{{ asset('public/frontend/images/banner_form.jpg') }}" alt="registration image" width="100%">
            <div class="border-bottomimg"></div>
          </div>
          <div class="card-body">
              <?php if(isset($msg)){ echo '<div class="alert alert-success">'.$msg.'</div>'; } ?>
            <form action="{{route('postadduser')}}" name="registerForm" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <div class="row">
                <div class="col-md-3 form-group">
                  <!--<input type="text" class="form-control" name="register_num" placeholder="Sr No." value="">-->
                </div>
                <div class="col-md-6 heading-regis">
                  <h2>यात्रिक आवेदन पत्र</h2>
                </div>
                <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-9">
                            <p class="py-2 text-danger font-weight-bold">* Fields are Required</p>
                        </div>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-9 form-group">
                          <input type="text" class="form-control @error('applicant_name') is-invalid @enderror" name="applicant_name" id="applicant_name" placeholder="*Name of Applicant / आराधक श्रीमान / श्रीमती:" autocomplete="off" value="{{old('applicant_name')}}">
                         @error('applicant_name')
                            <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder="*Age / उम्र:" autocomplete="off" value="{{old('age')}}"> 
                            @error('age')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 form-group">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender">
                              <option value="">*Select Gender</option>
                              <option value="Male"  @if (old('gender') == 'Male') selected="selected" @endif>Male</option>
                              <option value="Female" @if (old('gender') == 'Female') selected="selected" @endif>Female</option>
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <!-- <label for="InputName">Sr No.</label> -->
                            <input type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" id="father_name" placeholder="*Father / Husband Name / पिता / पति का नाम:" autocomplete="off" value="{{old('father_name')}}">
                            @error('father_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control @error('village') is-invalid @enderror" name="village" id="village" placeholder="*Native Village / मूल गांव:" autocomplete="off" value="{{old('village')}}">
                            @error('village')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="*Email / ईमेल:" value="{{ Auth::user()->email }}" readonly>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="number" class="form-control @error('aadhar_no') is-invalid @enderror" name="aadhar_no" id="aadhar_no" placeholder="*Aadhar No / आधार कार्ड नं.:" value="{{old('aadhar_no')}}">
                            @error('aadhar_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                      </div>
                    </div>
                    <div class="col-md-3 imgUp form-group">
                      <div class="imagePreview"></div>
                      <label class="btn btn-block btn-primary">
                        *Upload Photo<input type="file" class="uploadFile img" value="" name="applicant_image" id="applicant_image" required style="width: 0px;height: 0px;overflow: hidden;">
                      </label>
                      <span id="err_applicant_image" class="error"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="adharcard_image" name="adharcard_image" required>
                            <label class="custom-file-label" for="customFile">*Upload aadhar card</label>
                        </div>
                        <span id="err_adharcard_image" class="error"></span>
                    </div>
                    <div class="col-md-9 form-group">
                        <input type="text" class="form-control @error('postal_address') is-invalid @enderror" name="postal_address" id="postal_address" placeholder="*Postal Address / पत्र व्यवहार का पता:" value="{{old('postal_address')}}">
                        @error('postal_address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="*City / शहर:" value="{{old('city')}}">
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control @error('district') is-invalid @enderror" name="district" id="district" placeholder="*District / जिला:" value="{{old('district')}}">
                        @error('district')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="state" placeholder="*State / राज्य:" value="{{old('state')}}">
                        @error('state')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" id="pincode" placeholder="*Pincode / पिन कोड:" value="{{old('pincode')}}">
                        @error('pincode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" placeholder="*Mobile No / मोबाइल:" value="{{old('mobile')}}">
                        @error('mobile')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" id="whatsapp"  placeholder="*Whatsapp No / व्हाट्सएप:" value="{{old('whatsapp')}}">
                        @error('whatsapp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--<div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="ongoing_tapasya" placeholder="Ongoing Tapasya / वर्तमान तपस्या क वगत:" value="">
                    </div>-->
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control @error('health_issue') is-invalid @enderror" name="health_issue" placeholder="Health Issue / स्वास्थय समस्या:" value="{{old('health_issue')}}">
                        @error('health_issue')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="number" class="form-control @error('emergency_contact') is-invalid @enderror" name="emergency_contact" id="emergency_contact" placeholder="*Emergency Contact / आपातकालीन संपर्क:" value="{{old('emergency_contact')}}">
                        @error('emergency_contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--<div class="col-md-12 form-group">
                        <p class="text-danger">निम्न विवरण भरकर भिजवायें :</p>
                    </div>-->
                    <div class="col-md-12 form-group">
                      <label for="InputName" class="">Are you a mumukshu? / क्या आप मुमुक्षु है ?</label>
                     
                       <select class="form-control" name="mumuksh" id="mumuksh">
                         
                          <option value="No"  @if (old('mumuksh') == 'No') selected="selected" @endif>No</option>
                          <option value="Yes" @if (old('mumuksh') == 'Yes') selected="selected" @endif>Yes</option>
                        </select>
                      
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">Do you want to sacrifice champal, shoes and Beard Shaving to earn full merit of Chha’ri Paalit Sangh? / क्या आप छ'रि पालक संघ का पूरा पुण्य कमाने हेतु चंपल जूते व दाढ़ी सेविंग का त्याग करना चाहते है ?</label>
                    
                      <select class="form-control" name="punya_kamane_hetu" id="punya_kamane_hetu">
                          <option value="Yes" @if (old('punya_kamane_hetu') == 'Yes') selected="selected" @endif>Yes</option>
                          <option value="No"  @if (old('punya_kamane_hetu') == 'No') selected="selected" @endif>No</option>
                         
                        </select>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="InputName">Preference will be given to the person taking Paushadh during the Sangh. / संघ में पौषद  लेनेवाले को प्राथमिकता दी जायेगी। पौषद</label>
                      <input type="text" class="formStyle" name="posad_din" placeholder="" value="{{ old('posad_din') }}">
                      <label for="InputName">दिन करूँगा/करुँगी</label>
                    </div>
                    <!--<div class="col-md-12 form-group">
                      <label for="InputName">Chhath Karke Saat Jatra / छठ करके साथ जात्रा <small>(17-18 Feb, 2021) (Only For Man)</small> &nbsp;</label>
                      <label class="radio-inline">
                        <input type="radio" name="chhath_yatra" value="Yes"> Yes
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="chhath_yatra" value="No" checked> No
                      </label>
                    </div>-->
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <h3 class="notice-title">यात्रा संघ के आवश्यक नियम एवं सुचना</h3>
                        <ul class="notice-list">
                          <li>यात्रिक को जिनाझा एवं छ:री नियमो का पालन करना होगा।</li>
                          <li>यात्रिक को नित्य एकासणा तप , व्याख्यान , दोनों समय प्रतिक्रमण एवं सर्व कार्यक्रमों में सामुहिक आराधना करनी आवश्यक है।</li>
                          <li>वर्षीतप एवं 500 आयंबिल करनेवाले आराधको को सुबह 9 बजे व शाम को 4 बजे बियासणा कराया जायेगा।</li>
                          <li>आयोजक परिवार द्वारा सभी यात्रिकों को बहुमान स्वरूप यात्रा में आवश्यक वस्तुओं का किट प्रदान की जायेगी।</li>
                          <li>पौषध , पूजा के कपडे उपकरण सामग्री आपकी नियमित दवाईया एवं डॉक्टर की फाइल साथ में लेकर पधारे।</li>
                          <li>किंमती सामान (दागिना) , सुटकेश , पेटी एवं अतिरित्क सामान साथ में नहीं लावे।</li>
                          <li>तीर्थयात्रा संघ में लुंगी ,बरमुडा , गाउन एवं अभद्र वस्र परिधान नहीं करे।</li>
                          <li>कार्यक्रम में परिवर्तन करने का अधिकार आयोजक कमिटी का रहेगा।</li>
                          <li>यात्रा दरम्यान बेझ लगा के रखना है और वाहन प्रयोग का सर्वथा निषेध रहेगा।</li>
                          <li>फ़ोन से स्वीकृति मिलने के बाद ही दि. 19 -12 -2021 को दासपाँ नगर पधारें।</li>
                        </ul>
                      </div>
                  </div>
                  
                    <div class="row">
                      <div class="col-md-12">
                        <p class="useful-things">संघ के सभी नियम हमने पढ़ लिए है। हम नियमो का पालन एवं स्वीकार करते है।</p>
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <input type="submit" name="submit" id="btn_save_user" value="submit" class="btn btn-theme">
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

             
            
            
            
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-danger"><strong>सूचना : आवेदन पत्र   01/10/2021  दिनांक तक उपलब्ध होगा</strong></p>
                </div>
            </div>
            
             
            </form>
            
              

        </div><!---modal-body--->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section about end -->

@endsection

@section('scripts')
<script>

</script>
@stop