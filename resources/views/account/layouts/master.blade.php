<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Account</title>
  <link href="https://bizkit.in/front/img/fav.png" rel="shortcut icon" type="image/ico" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');

    h1,
    h2,
    h3,
    h4 {
      font-family: 'Inter', sans-serif !important;
      font-weight: 600;
    }

    p {
      font-family: 'Inter', sans-serif !important;
      font-weight: 500;
      font-size: 14px;
    }


    .nav-item a.invite-user {
      border: 2px solid green !important;
      border-radius: 37px;
      padding: 6px 30px !important;
      color: green !important;
      font-size: 15px;
      font-weight: 600;
      margin-right: 15px;
      text-decoration: none;
    }

    .nav-item a.invite-user:hover {
      color: white !important;
      background: green !important;
    }

    .log_prof {
      width: 45px;
      height: auto;
      border-radius: 100px;
    }

    .log_prof img {
      border-radius: 100px;
    }

    .acc_tltp {
      font-size: 16px;
      font-weight: 600;
      display: grid;
      grid-template-columns: 1fr auto;
      grid-gap: 0.5rem;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    #v-pills-tab .nav-link {
      display: block;
      padding: 0.5rem 1rem;
      color: #000;
      text-decoration: none;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out;
      text-align: left;
      font-weight: 500;
      font-size: 16px;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #fff !important;
      background: #5236ff;
      transition: 0.2s all ease;
      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,
        rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
      margin: 0px 0px;
      border-radius: 0px;
      /* border-right: 6px solid #fff; */
    }

    .top_bg {
      background: #f9f9f9;
    height: 100%;
    }

    .acc_top_head {
      border-bottom: 1px solid #f8f8f8;
    }

    .accp {
      padding: 10px 10% 20px 10%;
    }

    div#v-pills-tab {
      background-color: #f8f8f8;
    }

    .acc_box {
      padding: 20px 0px 20px 0px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      text-align: center;
      border-right: 1px solid #f8f8f8;
    }

    .acc_box h1 {
      margin: 0;
      font-size: 18px;
      font-weight: 500;
      display: flex;
      transition: 0.2s all ease;
      font-family: "Inter", sans-serif;
    }

    .acc_box2 {
      padding: 20px;
    }

    .acc_box2 h1 {
      margin: 0;
      align-items: center;
      display: flex;
      justify-content: center;
      transition: 0.2s all ease;
      padding: 5px;
      color: #000;
      font-size: 25px;
      font-weight: 700;
      font-family: "Inter", sans-serif;
    }

    .acc_sec_back {
      background: #f5f5f5ab;
      display: inline-flex;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      align-items: center;
      font-size: 18px;
      justify-content: center;
      color: #5236ff;
      margin-right: 10px;
      box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }

    .acc_sec_back:hover {
      background: #5236ff;
      color: #fff;
      text-decoration: none;
    }

    .acc_pers_info img {
      width: 50px;
      height: auto;
      border-radius: 100px;
    }

    .acc_pers_info h2 {
      color: #000;
      font-size: 18px;
      margin-top: 10px;
    }

    .btnlink {
      color: #1d1d20;
      text-decoration: underline;
      font-size: 13px;
      font-family: 'Inter', sans-serif !important;
      font-weight: 500;
    }

    .btnlink:hover {
      color: #1d1d20;
      font-size: 13px;
    }

    .tab-content .form-label {
      margin-bottom: 3px;
      font-size: 13px;
    }

    .btn-update {
      display: inline-block;
      background: linear-gradient(to left, #2a9f25 50%, #0275d8 50%) right;
      border: none !important;
      color: #fff;
      padding: 8px 35px;
      font-weight: 600;
      border-radius: 24px;
      background-size: 200%;
      transition: .5s ease-out;
    }

    .btn-update:hover {
      background-position: left;
      color: #fff;
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.3rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .tab-content form h6 {
      margin: 0px;
      padding: 0px;
      font-size: 15px;
    }

    .bg-light {
      background-color: #fff !important;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    }

    .teams_user {
      display: flex;
      gap: 25px;
      justify-content: center;
      border-bottom: 2px solid #f9f9f9;
    }

    .teams_user h3 {
      font-size: 18px;
      color: #000;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif !important;
    }

    .btn-invite-user {

      border: none !important;
      color: #fff;
      padding: 8px 35px;
      font-weight: 600;
      border-radius: 24px;
      display: inline-block;
      background: linear-gradient(to left, #2a9f25 50%, #0275d8 50%) right;
      background-size: 200%;
      transition: .5s ease-out;
    }

    .btn-invite-user:hover {
      background-position: left;
      color: #fff;
    }

.mt-top-bar {
  margin-top: 85px;
}


    .btn-car {
      background: linear-gradient(to left, #2a9f25 50%, #0275d8 50%) right;
      border: none !important;
      color: #fff;
      padding: 8px 45px;
      font-weight: 600;
      border-radius: 24px;
      display: inline-block;
      background-size: 200%;
      transition: .5s ease-out;
    }

    .btn-car:hover {
      background-position: left;
      color: #fff;
    }


    .acc_no_emp {
      display: flex;
      justify-content: space-between;
      gap: 10px;

    }

    .billingbg button#home-tab,
    button#profile-tab {
      font-size: 15px;
      font-weight: 600;
      align-items: center;
      font-family: 'Inter', sans-serif;
      color: #000;
    }


    .btn-check+.btn-outline-primary,
    .btn-check:checked+.btn-outline-primary,
    .btn-outline-primary,
    .btn-outline-primary.dropdown-toggle.show,
    .btn-outline-primary {
      background-color: #f9f9f9;
      border-color: #000;
      color: #000;
      padding: 5px 25px;
      font-weight: 600;
      border-radius: 24px;
      font-size: 13px;
    }

    .btn-check:active+.btn-outline-primary,
    .btn-check:checked+.btn-outline-primary,
    .btn-outline-primary.active,
    .btn-outline-primary.dropdown-toggle.show,
    .btn-outline-primary:active {
      color: #fff;
      padding: 5px 25px;
      font-weight: 600;
      border-radius: 24px;
      font-size: 13px;
      background-color: #5236ff;
      border-color: transparent;

    }

    .tab-content form {
      padding: 1rem 2rem 1rem 2rem;
      margin-top: 5px;
      border-radius: 10px;
      background-color: #fafafa;
    }

    .billingbg {
      padding: 1rem 2rem 1rem 2rem;
      margin-top: 5px;
      border-radius: 10px;
      background-color: #fafafa;
    }

    .billing_content {
      padding-top: 20px;
      text-align: center;
    }

    .container-fluid.top_bg {
      margin-top: 67px;
    }

    .payment_cardicon {
      display: flex;
      align-items: baseline;
      gap: 20px;
      margin: 30px 0px 15px 0px;
    }

    .licence_box {
      height: auto;
      background-color: #f9f9f9;
      border: 1px dashed #0275d8;
      margin: 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px 15%;
      text-align: center;
      border-radius: 20px;
    }

    .licence_box h2 {

      margin-top: 10px;
      transition: 0.2s all ease;
      color: #000;
      font-size: 22px;
      font-weight: 600;
      font-family: "Inter", sans-serif;
    }

    .licence_box p {
      margin-top: 10px;
      color: #000;
      font-size: 14px;
      font-weight: 500;
      font-family: "Inter", sans-serif;
    }

    .lic_key_details {
      display: flex;
      justify-content: space-between;

    }

    .lic_key_details .left {
      text-align: left;
    }

    #changepass_inputs {
      width: 100%;
    padding: 20px 10px;
    background-color: #eee;
    border-radius: 10px;
    margin-top: 2px;
}

.btn-check:focus+.btn, .btn:focus {
    box-shadow: none;
}

.sub_para {
  font-size: 13px;
    margin: 0px;
}

#v-pills-billing .tab-content form {
    padding: 1rem 2rem 1rem 2rem;
    margin-top: 0px;
    border-radius: 10px;
    background-color: #fafafa;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
  color: #fff !important;
    background-color: #5236ff;
    border-color: #dee2e6 #dee2e6 #fff;
    
}

.form-select {
    line-height: 1.4 !important;
}

.billingbg ul#myTab {
    display: flex;
    justify-content: space-evenly;
}

.navbar-light .navbar-nav .nav-link {
    color: #5236ff;
}
.navbar-brand {
 
    margin-right: 1rem;
    font-size: 1.25rem;
    text-decoration: none;
    white-space: nowrap;
}
/* popover__wrapper */

.popover__wrapper {
  position: relative;
  display: inline-block;
}
.popover__content {
    border-radius: 10px;
    opacity: 0;
    top: 40px;
    visibility: hidden;
    position: absolute;
    left: -150px;
    transform: translate(0, 10px);
    padding: 10px;
    width: 150px;
    background-color: #fff;
    -webkit-box-shadow: 0 5px 15px 3px hsla(0,0%,78%,.5);
    box-shadow: 0 5px 15px 3px hsla(0,0%,78%,.5);
    font-size: 14px;
}
.popover__content:before {
  position: absolute;
  z-index: -1;
  content: "";
  right: calc(50% - 10px);
  top: -8px;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent #bfbfbf transparent;
  transition-duration: 0.3s;
  transition-property: transform;
}
.popover__wrapper:hover .popover__content {
  z-index: 10;
  opacity: 1;
  visibility: visible;
  transform: translate(0, -20px);
  transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
}
 
.popover__message {
  text-align: center;
  margin: 0px;
  padding: 0px;
}

.piusernameicon {
  display: flex;
    gap: 25px;
    justify-content: center;
}

.img-logo {
    max-width: 70%;
    height: auto;
}

#fixed { 
    position: sticky !important;
    position: -webkit-sticky;
    top: 0;
    overflow-y: auto; 
    z-index: 1020;
}

#fixed2 {
    position: fixed !important;
    position: -webkit-fixed;
    top: 150px;
    overflow-y: auto;
    width: 26%;
}


  </style>


</head>
       
  @include('account.layouts.header')
  <section id="fixed">
    <div class="container-fluid top_bg ">
      <div class="acc_top_head">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="acc_box">
              <a href="{{url('/dashboard')}}">
              <i class="fa fa-arrow-left acc_sec_back" aria-hidden="true"></i></a>
              <h1>Back to Templates</h1>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="acc_box2 mx-auto">
              @if(request()->is('user-account'))
                <h1>Personal information</h1>
              @elseif(request()->is('business-information')) 
                <h1>Business Information</h1>
              @elseif(request()->is('my-team'))
                <h1>My Team</h1>
              @elseif(request()->is('billing'))
                <h1>Billing</h1>
              @elseif(request()->is('license') || request()->is('subscription'))
                <h1>My Plan</h1>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="d-flex align-items-start">
          @include('account.layouts.sidebar')
          @yield('content')
        </div>
      </div>
    </div>
    </div>
  </section>
  
  <!-- For Model -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- For Model -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
      function myFunction() {
        var x = document.getElementById("changepass_inputs");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      </script>
      <script>

@if(Session::get('success'))

toastr.options =

{

  "closeButton" : true,

  "progressBar" : true

}

    toastr.success("{{ $message ?? '' }}");

@endif



@if(Session::get('fail'))

toastr.options =

{

  "closeButton" : true,

  "progressBar" : true

}

    toastr.error("{{ $message ?? '' }}");

@endif



@if(Session::has('info'))

toastr.options =

{

  "closeButton" : true,

  "progressBar" : true

}

    toastr.info("{{ $message ?? '' }}");

@endif



@if(Session::has('warning'))

toastr.options =

{

  "closeButton" : true,

  "progressBar" : true

}

    toastr.warning("{{ $message ?? '' }}");

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

  function deleteUser()
  {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
      });

        $.ajax({

        type: "GET",

        url : "{{url('delete-user')}}",

        data: {

            _token:'{{csrf_field()}}',

       
            },

        success: function(data) {

        console.log(data); 
            // alert('Youe Account has been successfully Deleted');
            swal({
                        title: "Success",
                        text : data.success,
                        icon : "success",

                        closeModal: true,
                        buttons: {
                            cancel: false,
                            ok:true
                        },
                    })
                    .then((value) => {
                      location.href="{{route('index')}}";
                    });
            

        }

        });
  }

  function myFunction() {
        var x = document.getElementById("changepass_inputs");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
</script>
</body>

</html>