@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{url('/dashboard')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Settings</h2>
  </section>

   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            <div>
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('setting.settingPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <hr>
                  <h3><strong>Basic Setting</strong></h3>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="title">ADMIN-MAIL:</label>
                              <input type="text" class="form-control" name="input['ADMIN-MAIL']" value="{{ getDataFromSetting('ADMIN-MAIL') }}" placeholder="ADMIN-MAIL ">
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                     <label for="slug">Mobile:</label>
                              <input type="text" class="form-control" name="input['mobile']" value="{{ getDataFromSetting('mobile') }}" placeholder="mobile ">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="slug">Email:</label>
                              <input type="text" class="form-control" name="input['email']" value="{{ getDataFromSetting('email') }}" placeholder="email ">
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="slug">Alternative Email:</label>
                              <input type="text" class="form-control" name="input['alternative-email']" value="{{ getDataFromSetting('alternative-email') }}" placeholder="Alternative email ">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="description">Address:</label>
                              <textarea class="form-control" name="input['address']" placeholder="address">{{ getDataFromSetting('address') }}</textarea>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="short_description">Alternate Mobile:</label>
                              <input type="text" class="form-control" name="input['mobile1']" placeholder="mobile" value="{{ getDataFromSetting('mobile1') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Copyright:</label>
                              <input type="text" class="form-control" name="input['copyright']" placeholder="copyright" value="{{ getDataFromSetting('copyright') }}">
                     </div>
                  </div>
                  </hr>
                  <h3><strong>Email Setting</strong></h3>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Mail Driver:</label>
                              <input type="text" class="form-control" name="input['mail_driver']" value="{{ getDataFromSetting('mail_driver') }}" placeholder="mail_driver">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">SMTP Host:</label>
                              <input type="text" class="form-control" name="input['smtp_host']" value="{{ getDataFromSetting('smtp_host') }}" placeholder="smtp_host">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">SMTP Port:</label>
                              <input type="text" class="form-control" name="input['smtp_port']" value="{{ getDataFromSetting('smtp_port') }}" placeholder="smtp_port">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Email Encryption:</label>
                              <input type="text" class="form-control" name="input['email_encryption']" value="{{ getDataFromSetting('email_encryption') }}" placeholder="email_encryption">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">SMTP User:</label>
                              <input type="text" class="form-control" name="input['smtp_user']" value="{{ getDataFromSetting('smtp_user') }}" placeholder="smtp_user">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">SMTP Password:</label>
                              <input type="text" class="form-control" name="input['smtp_pass']" value="{{ getDataFromSetting('smtp_pass') }}" placeholder="smtp_pass">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Contact Us Mail Receiving E-mail:</label>
                              <input type="text" class="form-control" name="input['contact_us_receiving_mail']" value="{{ getDataFromSetting('contact_us_receiving_mail') }}" placeholder="contact_us_receiving_mail">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Mail From:</label>
                              <input type="text" class="form-control" name="input['mail_from']" value="{{ getDataFromSetting('mail_from') }}" placeholder="mail_from">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="long_description">Mail From Name:</label>
                              <input type="text" class="form-control" name="input['mail_from_name']" value="{{ getDataFromSetting('mail_from_name') }}" placeholder="mail_from_name">
                     </div>
                  </div>
                  </hr>
                  <h3><strong>Social Site Setting</strong></h3>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Facebook:</label>
                              <input type="text" class="form-control" name="input['facebook']" value="{{ getDataFromSetting('facebook') }}" placeholder="Facebook Link">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Twitter:</label>
                              <input type="text" class="form-control"  name="input['twitter']" value="{{ getDataFromSetting('twitter') }}"  placeholder="Twitter Link">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Instagram:</label>
                              <input type="text" class="form-control"  name="input['instagram']" value="{{ getDataFromSetting('instagram') }}"  placeholder="Instagram Link">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="long_description">Linkedin:</label>
                              <input type="text" class="form-control"  name="input['linkedin']" value="{{ getDataFromSetting('linkedin') }}"  placeholder="Linkedin Link">
                     </div>
                  </div>


                  <div class="box-footer">
                     <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop