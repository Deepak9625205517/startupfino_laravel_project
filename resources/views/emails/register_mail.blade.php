<!DOCTYPE html>
<html>
<head>
  <title>Welcome Email</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800&display=swap" rel="stylesheet">
</head>
<body>

<table style="width: 600px; background: #fff; padding: 0px 0; margin:auto; display:block; box-shadow: 0px 0px 4px #ccc;" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background: #84f9ff;">
      <p style="text-align: center; font-size: 40px; fill:#10484b;">
        <svg  style="width:100px;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M256,60c-57.897,0-105,47.103-105,105c0,35.943,18.126,69.015,48.487,88.467c31.003,19.863,69.06,21.974,104.426,5.703
      c7.525-3.462,10.82-12.37,7.357-19.896c-3.462-7.525-12.369-10.82-19.896-7.358c-25.86,11.898-53.454,10.545-75.703-3.709
      C193.961,214.298,181,190.669,181,165c0-41.355,33.645-75,75-75s75,33.645,75,75c0,8.271-6.729,15-15,15
      c-7.558,0-14.618-5.732-14.998-14.772C301.001,165.152,301,165.076,301,165c0-24.813-20.187-45-45-45s-45,20.187-45,45
      s20.187,45,45,45c11.516,0,22.031-4.353,29.999-11.494C293.966,205.648,304.483,210,316,210c24.813,0,45-20.187,45-45
      C361,107.103,313.897,60,256,60z M270.789,167.406C269.631,174.535,263.45,180,256,180c-8.271,0-15-6.729-15-15s6.729-15,15-15
      c7.691,0,14.04,5.82,14.895,13.285C270.671,164.648,270.634,166.035,270.789,167.406z"/>
  </g>
</g>
<g>
  <g>
    <path d="M480.999,196.976c-0.004-3.879-1.566-7.756-4.393-10.583L421,130.787V15c0-8.284-6.716-15-15-15H106
      c-8.284,0-15,6.716-15,15v115.787l-55.606,55.606c-0.052,0.052-0.096,0.11-0.147,0.163c-2.811,2.896-4.24,6.709-4.246,10.42
      c0,0.01-0.001,0.019-0.001,0.029V467c0,24.845,20.216,45,45,45h360c24.839,0,45-20.207,45-45V197.005
      C481,196.995,480.999,196.986,480.999,196.976z M421,173.213L444.787,197L421,220.787V173.213z M121,137.005
      c0-0.003,0-0.007,0-0.01V30h270v106.995c0,0.003,0,0.007,0,0.01v113.782L309.787,332H202.213L121,250.787V137.005z M91,173.213
      v47.574L67.213,197L91,173.213z M61,460.787V233.213L174.787,347L61,460.787z M82.214,482l119.999-120h107.574l119.999,120H82.214
      z M451,460.787L337.213,347L451,233.213V460.787z"/>
  </g>
</g>
</svg>

      </p>
    </td>
  </tr>
  <tr>
    <td>
      <h2 style="text-align: center; color: #0e0f0f; font-size:20px; font-weight: 700; padding-top: 40px; font-family: 'Montserrat', sans-serif; text-transform: uppercase; ">
      Welcome to India’s No. 1 Platform for Business Documents
      </h2>
        <p style="font-size: 18px; font-weight: 500; color: #333; padding: 50px 40px 0; margin:0px; font-family: 'Montserrat', sans-serif;">
          Dear {{$user['name']}},
        </p>
        <p style="font-size: 15px; line-height: 1.6; color: #333; padding: 10px 40px 40px; margin: 0; font-family: 'Montserrat', sans-serif; font-weight: 400;">Thank you for registering with us. One of our team members will contact you to confirm your details. Gear up to become a part of the biggest document revolution in the country with Bizkit.
    </p>
   
      <a href="{{route('customerLogin')}}" style="text-align: center; background: #55af27; padding: 10px 20px; color: #fff; border-radius: 3px; margin:0 auto 50px; display: table; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 500;">Login</a>
    </td>
  </tr>

</table>



</body>
</html>
