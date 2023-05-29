<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title','Bizkit Docs')</title>
      <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
      <meta name="description" content="@yield('meta_description','default description')">
      <link rel="canonical" href="{{url()->current()}}"/>
      <meta charset="utf-8">
      <link href="https://bizkit.in/front/img/fav.png" rel="shortcut icon" type="image/ico">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
  
      <!-- Easy Autocomplete -->
        <link rel="stylesheet" href="{{asset('front/css/easy-autocomplete.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/easy-autocomplete.themes.min.css')}}">
        <!-- End Easy Autocomplete -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://bizkit.in/front/css/ouibounce.min.css" type="text/css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      
</head>
<body>
  
  @include('front.layouts.header')
  
  @yield('content')
  <!--Show pop up on page leave-->
  @include('front.layouts.footer')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
  <script src="{{asset('front/js/js.js')}}"></script>
   
  <!-- Easy Autocomplete -->
  <script src="{{asset('front/js/jquery.easy-autocomplete.min.js')}}" type="text/javascript"></script>
  <!-- End Easy Autocomplete -->
 
   <script>
         $('.header-search-wrapper .search-main').click(function(){
             $('.search-form-main').toggleClass('active-search');
             $('.search-form-main .search-field').focus();
         });
        
        
                  $('#news-carousel .owl-carousel').owlCarousel({
                              loop:true,
                              margin:10,
                              nav:true,
                              dots:false,
                              autoplay:true,
                              responsiveClass:true,
                              responsive:{
                          0:{
                              items:3,
                              nav:false
                          },
                          600:{
                              items:3,
                              nav:false
                          },
                          1000:{
                              items:8,
                              nav:true,
                              loop:true
                          }
                              }
                          })
                  
                  
                                    $('.testmonial-sec .owl-carousel').owlCarousel({
                                        loop:true,
                                        margin:30,
                                        nav:true,
                                        dots:false,
                                        responsive:{
                                            0:{
                                                items:1
                                            },
                                            600:{
                                                items:1
                                            },
                                            1000:{
                                                items:1,
                                                nav:true
                                            }
                                        }
                                    })
    
        
  @if(Session::get('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ $message }}");
  @endif

  @if(Session::get('fail'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ $message }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ $message }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ $message }}");
  @endif

  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))

        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ Session::get('alert-' . $msg) }}");

    @endif
   @endforeach

$(document).ready(function() {
    $('#login').on('click', function(e) {
      e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if(email == '')
        {
            $('#emails').html('Please enter your email id');
          }
          else if(reg.test(email) == false)
          {
            $('#emails').html('The email must be a valid email address.');
          }else{
                $('#emails').html("");
            }
          
          if(password == false)
          {
            $('#passwords').html('Please enter your password');
          }else if(password.length <= 5)
          {
            $('#passwords').html('The password must be at least 6 characters.');
          }else{
                $('#passwords').html("");
            } 

          if(email == '' && reg.test(email) == false && password == false && password.length <= 6 && password.length <= 5)
          {
            return false;
          }
          $("#login").html('<button type="button" class="login-btn" value="LOGIN" id="login" disabled>LOGIN... <i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>');
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

              }
          });

          $.ajax({
              type: 'POST',
              url: "{{route('customer')}}",
              data: {
                "_token":'{{csrf_token()}}',
                     email:email,
                  password:password,
              },
              //  dataType: 'json',
               success: function(data){
                // console.log(data.success);
                if(data.success){
                 
                  window.location.href="{{route('dashboard')}}";
                    
                 }
                 
                 if(data.error){
                  swal({
                        title: "Error",
                        text : data.error,
                        icon : "warning",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    })
                    .then((value) => {
                      location.reload();
                    });
                 }      
              },
              error: function(response, status, error){
                  console.log(response.responseJSON.errors);
                  var arr = response.responseJSON.errors;
                  $('#emails').html(arr.email);
                  $('#passwords').html(arr.password);
                  
              }
          });
    });


    $('#subscribes').on('click', function(e) {
    
      e.preventDefault();
        var email_id = $('#email_id').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if(email_id == '')
        {
            $('#email_subscribe').html('Please enter your email id');
            return false;
          }
          else if(reg.test(email_id) == false)
          {
            $('#email_subscribe').html('The email must be a valid email address.');
            return false;
          }else{
                $('#email_subscribe').html("");
          }

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

              }
          });

          $.ajax({
              type: 'POST',
              url: "{{route('subscribe')}}",
              data: {
                "_token":'{{csrf_token()}}',
                     email:email_id,
              },
              //  dataType: 'json',
               success: function(data){
                console.log(data.error);
                if(data.success){
                 
                  swal({
                        title: "Success",
                        text : data.success,
                        icon : "success",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      $('input[name=email').val('');
                    });
                    
                 }else{
                  swal({
                        title: "Error",
                        text : data.error,
                        icon : "warning",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      $('input[name=email').val('');
                    });
                    
                 }      
              },
              error: function(response, status, error){
                  console.log(response.responseJSON.errors);
                  var arr = response.responseJSON.errors;
                  $('#email_subscribe').html(arr.email);
                  
              }
          });

    });
   
    $('#enquiry').on('click', function(e) {
        e.preventDefault();
        
        var name = $('#name').val();
        var mobile_number = $('#mobile_number').val();
        var email = $('#email').val();
        var document_center_id = $('#document_center_id').val();
        var password = 123456;
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if(name == '')
          {
            $('#names').html('The name field is required.');
          }else{
            $('#names').html('');
          }

          
         if(mobile_number == '')
          {
            $('#mobile_numbers').html('The mobile number field is required.');
          }else if(mobile_number.length != 10)
          {
            $('#mobile_numbers').html('The mobile number must be at least 10 characters.');
          }else{
                $('#mobile_numbers').html("");
            } 

          if(email == '')
          {
            $('#emails').html('The email field is required.');
            
          }
          else if(reg.test(email) == false)
          {
            $('#emails').html('The email must be a valid email address.');
            
          }else{
                $('#emails').html("");
          }
          
          if(name == '' &&  mobile_number == '' && mobile_number.length != 10 && email == '' && reg.test(email) == false)
          {
            return false;
          }
          
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          
          $("#enquiry").html('<button type="button" id="enquiry" disabled>DOWNLOAD... <div class="spinner-border text-white" role="status"></div></button>');

          $.ajax({
              type: 'POST',
              url: "{{route('enquiry')}}",
              data: {
                "_token":'{{csrf_token()}}',
                name:name,
                mobile_number:mobile_number,
                email:email,
                document_center_id:document_center_id,
                password : password,
              },
              //  dataType: 'json',
               success: function(data){
                console.log(data.success);
                
                if(data.success){
                  window.location.href="{{route('subscription')}}?enid=" + data.enquiry_id;
                  // swal({
                  //       title: "Success",
                  //       text : data.success,
                  //       icon : "success",

                  //       closeModal: true,
                  //       buttons: {
                  //           cancel: false,
                  //           ok:true
                  //       },
                  //   }).then((value) => {
                  //     $('input[name=name').val('');
                  //     $('input[name=mobile_number').val('');
                  //     $('input[name=email').val('');
                  //     window.location.href="{{route('subscription')}}";
                  //   });
                    
                 }else{
                  swal({
                        title: "Error",
                        text : data.error,
                        icon : "warning",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      location.reload();
                    });
                    
                 }      
              },
              error: function(response, status, error){
                  console.log(response.responseJSON.errors);
                  var arr = response.responseJSON.errors;
                  $('#names').html(arr.name);
                  $('#mobile_numbers').html(arr.mobile_number);
                  $('#emails').html(arr.email);
                  
              }
          });
         
    });

    $('#registration').on('click', function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var mobile_number = $('#mobile_number').val();
        var email = $('#email').val();
        var refferal_code = $('#refferal_code').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if(name == '')
          {
            $('#names').html('The name field is required.');
          }else{
            $('#names').html('');
          }
          
         if(mobile_number == '')
          {
            $('#mobile_numbers').html('The mobile number field is required.');
          }else if(mobile_number.length != 10)
          {
            $('#mobile_numbers').html('The mobile number must be at least 10 characters.');
          }else{
                $('#mobile_numbers').html("");
            } 

          if(email == '')
          {
            $('#emails').html('The email field is required.');
            
          }
          else if(reg.test(email) == false)
          {
            $('#emails').html('The email must be a valid email address.');
            
          }else{
                $('#emails').html("");
          }

          if(password == false)
          {
            $('#passwords').html('The password field is required.');
          }else if(password.length <= 5)
          {
            $('#passwords').html('The password must be at least 6 characters');
          }else if(password_confirmation == '' || password != password_confirmation)
          {
            $('#passwords').html('Password is not match');
          }else{
            $('#passwords').html("");
          }
          
          if(name = '' &&  mobile_number == '' && mobile_number.length != 10 && email == '' && reg.test(email) == false && password == false)
          {
            return false;
          }
          var name = $('#name').val();

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $("#registration").html('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>');
          $.ajax({
              type: 'POST',
              url: "{{route('register')}}",
              data: {
                "_token":'{{csrf_token()}}',
                name:name,
                email:email,
                password:password,
                password_confirmation:password_confirmation,
                mobile_number:mobile_number,
                refferal_code:refferal_code,
              },
              //  dataType: 'json',
               success: function(data){
                console.log(data.error);
                if(data.success){
                 
                  swal({
                        title: "Success",
                        text : data.success,
                        icon : "success",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      $('input[name=name').val('');
                      $('input[name=mobile_number').val('');
                      $('input[name=email').val('');
                      $('input[name=password').val('');
                      $('input[name=password_confirmation').val('');
                      window.location.href="{{route('customerLogin')}}";
                    });
                    
                 }else{
                  swal({
                        title: "Error",
                        text : data.error,
                        icon : "warning",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      location.reload();
                    });
                    
                 }      
              },
              error: function(response, status, error){
                  console.log(response.responseJSON.errors);
                  var arr = response.responseJSON.errors;
                  $('#names').html(arr.name);
                  $('#emails').html(arr.email);
                  $('#passwords').html(arr.password);
                  $('#mobile_numbers').html(arr.mobile_number);
                  
              }
          });
         
    });

    $('#payment').on('click', function(e) {
        e.preventDefault();
        
        var name = $('#name').val();
        var email = $('#email').val();
        var mobile_number = $('#mobile_number').val();
        var state_id = $('#state_id').val();
        var sub_id = $('#sub_id').val();
        var price = $('#price').val();
        var agree = $('#term');
        var password = 123456;
        var subscription_type = $('#subscription_type').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if(name == '')
          {
            $('#first_names').html('The name field is required.');
          }else{
            $('#first_names').html('');
          }

          if(agree.is(':checked') == false)
          {
            $('#checke').html("Agree to Terms & Conditions checkbox before submitting ");
          }else{
            $('#checke').html('');
            var term = $('#term').val();
          }
          
         if(mobile_number == '')
          {
            $('#mobile_numbers').html('The mobile number field is required.');
          }else if(mobile_number.length != 10)
          {
            $('#mobile_numbers').html('The mobile number must be at least 10 characters.');
          }else{
                $('#mobile_numbers').html("");
            } 

          if(email == '')
          {
            $('#emails').html('The email field is required.');
            
          }
          else if(reg.test(email) == false)
          {
            $('#emails').html('The email must be a valid email address.');
            
          }else{
                $('#emails').html("");
          }

          if(state_id == '')
          {
            $('#state_ids').html('The state field is required.');
          }else{
            $('#state_ids').html("");
          }

          
          if(name == '' && agree.is(':checked') == false && mobile_number == '' && mobile_number.length != 10 && email == '' && reg.test(email) == false && state_id == '')
          {
            return false;
          }
          
          
          
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          
          // $("#payment").html('<button type="button" id="payment" disabled>PAY NOW...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>');
          
          $.ajax({
              type: 'GET',
              url: "{{route('payment')}}",
              data: {
                "_token":'{{csrf_token()}}',
                name         : name,
                mobile_number: mobile_number,
                email        : email,
                state_id     : state_id,
                sub_id       : sub_id,
                price        : price,
                password     : password,
                agree        : term,
                subscription_type        : subscription_type,
              },
              //  dataType: 'json',
               success: function(data){
                console.log(data.error);
                if(data.success){
                  window.location.href="{{url('payu-money-payment?amount=')}}"+data.price+'?'+data.trnsid+'?'+data.first_name+'?'+data.last_name+'?'+data.email+'?'+data.mobile_number;
                  // swal({
                  //       title: "Success",
                  //       text : data.success,
                  //       icon : "success",

                  //       closeModal: true,
                  //       buttons: {
                  //           cancel: false,
                  //           ok:true
                  //       },
                  //   }).then((value) => {
                     
                  //     console.log(price);
                  //     console.log(sub_id);
                  //     window.location.href="{{url('payu-money-payment?amount=')}}"+data.price+'?'+data.trnsid+'?'+data.first_name+'?'+data.last_name+'?'+data.email+'?'+data.mobile_number;
                  //   });
                    
                 }else{
                  swal({
                        title: "Error",
                        text : data.error,
                        icon : "warning",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    }).then((value) => {
                      location.reload();
                    });
                    
                 }      
              },
              error: function(response, status, error){
                  console.log(response.responseJSON.errors);
                  var arr = response.responseJSON.errors;
                  $('#first_names').html(arr.name);
                  $('#mobile_numbers').html(arr.mobile_number);
                  $('#emails').html(arr.email);
                  $('#state_ids').html(arr.state_id);
                  $('#checke').html(arr.agree);
                  
              }
          });
         
    });

    


    $('#forget-password').on('click', function(e) {
    
    e.preventDefault();
      var email_id = $('#email').val();
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

      if(email_id == '')
      {
          $('#emails').html('Please enter your email id');
          return false;
        }
        else if(reg.test(email_id) == false)
        {
          $('#emails').html('The email must be a valid email address.');
          return false;
        }else{
              $('#emails').html("");
        }
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            
          }
        });
        
        document.getElementById("forget").innerHTML = '<input type="button" class="send-otp" id="forget-password" value="Reset Password..." disabled><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>';

        $.ajax({
            type: 'POST',
            url: "{{route('forgotpassword')}}",
            data: {
              "_token":'{{csrf_token()}}',
                   email:email_id,
            },
            //  dataType: 'json',
             success: function(data){
              console.log(data.error);
              if(data.success){
               
                swal({
                      title: "Success",
                      text : data.success,
                      icon : "success",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    location.reload();
                  });
                  
               }else{
                swal({
                      title: "Error",
                      text : data.error,
                      icon : "warning",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    $('input[name=email').val('');
                  });
                  
               }      
            },
            error: function(response, status, error){
                console.log(response.responseJSON.errors);
                var arr = response.responseJSON.errors;
                $('#emails').html(arr.email);
                
            }
        });

  });

  $('#reset-password').on('click', function(e) {
    
    e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();

        if(password == false)
          {
            $('#passwords').html('The password field is required.');
          }else if(password.length <= 5)
          {
            $('#passwords').html('The password must be at least 6 characters');
          }else if(password_confirmation == '' || password != password_confirmation)
          {
            $('#passwords').html('Password is not match');
          }else{
            $('#passwords').html("");
          }
          
          if(password == false && password.length <= 5 && password_confirmation == '' || password != password_confirmation)
          {
            return false;
          }

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            
          }
        });
        
        document.getElementById("reset-password").innerHTML = '<input type="button" class="send-otp" id="forget-password" value="Reset Password..." disabled><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>';

        $.ajax({
            type: 'POST',
            url: "{{route('changePassword')}}",
            data: {
              "_token":'{{csrf_token()}}',
                email:email,
                password:password,
                password_confirmation:password_confirmation,
            },
            //  dataType: 'json',
             success: function(data){
              console.log(data.error);
              if(data.success){
               
                swal({
                      title: "Success",
                      text : data.success,
                      icon : "success",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    location.reload();
                  });
                  
               }else{
                swal({
                      title: "Error",
                      text : data.error,
                      icon : "warning",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    $('input[name=password').val('');
                  });
                  
               }      
            },
            error: function(response, status, error){
                console.log(response.responseJSON.errors);
                var arr = response.responseJSON.errors;
                $('#passwords').html(arr.password);
                
            }
        });

  });

  $('#contactus').on('click', function(e) {
    
    e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var mobile_number = $('#mobile_number').val();
        var description = $('#description').val();
        var subject = $('#subject').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if(name == '')
          {
            $('#names').html('The name field is required.');
          }else{
            $('#names').html('');
          }

          if(subject == '')
          {
            $('#subjects').html('The subject field is required.');
          }else{
            $('#subjects').html('');
          }

          if(mobile_number == '')
          {
            $('#mobile_numbers').html('The mobile number field is required.');
          }else if(mobile_number.length != 10)
          {
            $('#mobile_numbers').html('The mobile number must be at least 10 characters.');
          }else{
                $('#mobile_numbers').html("");
          } 

          if(email == '')
          {
            $('#emails').html('The email field is required.');
            
          }
          else if(reg.test(email) == false)
          {
            $('#emails').html('The email must be a valid email address.');
            
          }else{
                $('#emails').html("");
          }
         
          if(name == '' && subject=='' && mobile_number=='' && mobile_number.length != 10 && email == '' && reg.test(email) == false)
          {
            return false;
          }
          
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            
          }
        });
        
        document.getElementById("contact_data").innerHTML = '<button type="button" class="btn btn btn-send" disabled>Send Message...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>';

        $.ajax({
            type: 'POST',
            url: "{{route('contactus')}}",
            data: {
              "_token":'{{csrf_token()}}',
                name:name,
                email:email,
                mobile_number:mobile_number,
                subject:subject,
                description:description,
            },
            //  dataType: 'json',
             success: function(data){
              console.log(data.error);
              if(data.success){
               
                swal({
                      title: "Success",
                      text : data.success,
                      icon : "success",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    location.href="{{route('contact.thankyou')}}";
                  });
                  
               }else{
                swal({
                      title: "Error",
                      text : data.error,
                      icon : "warning",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    $('#names').val('');
                    $('#emails').val('');
                    $('#mobile_numbers').val('');
                    $('#subjects').val('');
                    $('#description').val('');
                  });
                  
               }      
            },
            error: function(response, status, error){
                console.log(response.responseJSON.errors);
                var arr = response.responseJSON.errors;
                $('#names').html(arr.name);
                $('#emails').html(arr.email);
                $('#mobile_numbers').html(arr.mobile_number);
                $('#subjects').html(arr.subject);
                
            }
        });

  });
    
  $('#document_search').on('click', function(e) {
    
    e.preventDefault();

        var document_name = $('#document_name').val();
      
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            
          }
        });
       
        $.ajax({
            type: 'POST',
            url: "{{route('search.document')}}",
            data: {
              "_token":'{{csrf_token()}}',
              document_name:document_name,
            },
             dataType: 'html',
             success: function(data){
              console.log(data.error);
              if(data.success){
               
                swal({
                      title: "Success",
                      text : data.success,
                      icon : "success",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    location.reload();
                  });
                  
               }else{
                swal({
                      title: "Error",
                      text : data.error,
                      icon : "warning",

                      closeModal: true,
                      buttons: {
                          cancel: false,
                          ok:true
                      },
                  }).then((value) => {
                    $('input[name=password').val('');
                  });
                  
               }      
            },
            error: function(response, status, error){
                console.log(response.responseJSON.errors);
                var arr = response.responseJSON.errors;
                $('#first_names').html(arr.first_name);
                $('#last_names').html(arr.last_name);
                $('#emails').html(arr.email);
                $('#mobile_numbers').html(arr.mobile_number);
                
            }
        });

  });

 

});   

function filterFunction(e) {
    console.log(e.target.value);
    $.get("{{route('filter.documents')}}", { docName: e.target.value }, function (data) {
      $("#myDropdown").html('');
       if (data.length > 0) {
        
           $.each(data, function () {
               $("#myDropdown").append($("<a class='selCustomer'    />").attr('id',this.id).text(this.document_name));
           });
          
       }
   });
  }

var options = {

url: function(phrase) {
  return "{{route('filter.documents')}}";
},

getValue: function(element) {
  console.log(element);
  return element.document_name;
},

ajaxSettings: {
  dataType: "json",
  method: "GET",
  data: {
    dataType: "json"
  }
},

preparePostData: function(data) {
  data.phrase = $("#example-ajax-post").val();
  return data;
},

requestDelay: 400
};

$("#example-ajax-post").easyAutocomplete(options);

/*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
$(document).ready(function () {            
            $('#state_id').on('change', function () {
                var idState = this.value;
                $("#city_id").html('');
                $.ajax({
                    url: "{{route('state.city')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city_id').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city_id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
  
        });



function close_custom(){
  $(".collapse").removeClass('show');
}

 
</script>
<script>
      $(" #temp .owl-carousel").owlCarousel({
        loop: false,
        nav: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
          1200: {
            items: 5,
          },
        },
      });

      $(" #home_templete .owl-carousel").owlCarousel({
        loop: false,
        nav: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
          1200: {
            items: 5,
          },
        },
      });

      $("#temp_mob .owl-carousel").owlCarousel({

      loop: false,

      margin: 10,

     nav: true,

     responsive: {

     0: {

     items: 2,

      },

      700: {

       items: 4,

      },

       },

     });
    </script>
 
</body>
</html>
