@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('home.page.create')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Pages</h2>
  </section>

   <div class="row">
      
      <div class="col-md-12">
      
         <!-- @if ($message = Session::get('fail'))
         <div class="alert alert-danger">
            <p>{{ $message }}</p>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('home.page.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf 
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="title">Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['description']" placeholder="Description">{{ getDataHomePage('description') }}</textarea> -->
                              <input type="hidden" id="description" name="input['description']" value="{{getDataHomePage('description')}}" style="display:none" />
                              <input type="hidden" id="description___Config" value="" style="display:none" />
                              <iframe id="description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>                              
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                     <label for="laptop_heading">Laptop Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['laptop_heading']" placeholder="Laptop Heading ">{{ getDataHomePage('laptop_heading') }}</textarea> -->
                              <input type="hidden" id="laptop_heading" name="input['laptop_heading']" value="{{getDataHomePage('laptop_heading')}}" style="display:none" />
                              <input type="hidden" id="laptop_heading___Config" value="" style="display:none" />
                              <iframe id="laptop_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=laptop_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_description">Laptop Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['laptop_description']" placeholder="Laptop Description ">{{ getDataHomePage('laptop_description') }}</textarea> -->
                              <input type="hidden" id="laptop_description" name="input['laptop_description']" value="{{getDataHomePage('laptop_description')}}" style="display:none" />
                              <input type="hidden" id="laptop_description___Config" value="" style="display:none" />
                              <iframe id="laptop_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=laptop_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>
                  
                  <!-- <div class="col-md-12">
                     <div class="form-group">
                              <label for="laptop_image">Laptop Image:</label>
                              <input type="file" class="form-control" name="input['laptop_image']" value="{{ getDataHomePage('laptop_image') }}">
                     </div>
                  </div> -->

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_one">Laptop Points One:</label>
                              <input type="text" class="form-control" name="input['laptop_point_one']" value="{{ getDataHomePage('laptop_point_one') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_two">Laptop Points Two:</label>
                              <input type="text" class="form-control" name="input['laptop_point_two']" value="{{ getDataHomePage('laptop_point_two') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_three">Laptop Points Three:</label>
                              <input type="text" class="form-control" name="input['laptop_point_three']" value="{{ getDataHomePage('laptop_point_three') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_four">Laptop Points Four:</label>
                              <input type="text" class="form-control" name="input['laptop_point_four']" value="{{ getDataHomePage('laptop_point_four') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_five">Laptop Points Five:</label>
                              <input type="text" class="form-control" name="input['laptop_point_five']" value="{{ getDataHomePage('laptop_point_five') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_six">Laptop Points Six:</label>
                              <input type="text" class="form-control" name="input['laptop_point_six']" value="{{ getDataHomePage('laptop_point_six') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_seven">Laptop Points Seven:</label>
                              <input type="text" class="form-control" name="input['laptop_point_seven']" value="{{ getDataHomePage('laptop_point_seven') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="laptop_point_eight">Laptop Points Eight:</label>
                              <input type="text" class="form-control" name="input['laptop_point_eight']" value="{{ getDataHomePage('laptop_point_eight') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="slider_heading">Slider Heading:</label>
                              <!-- <textarea class="form-control ckeditor" name="input['slider_heading']" placeholder="Slider Heading">{{ getDataHomePage('slider_heading') }}</textarea> -->
                              <input type="hidden" id="slider_heading" name="input['slider_heading']" value="{{getDataHomePage('slider_heading')}}" style="display:none" />
                              <input type="hidden" id="slider_heading___Config" value="" style="display:none" />
                              <iframe id="slider_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=slider_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="toolkit_description">Toolkit Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['toolkit_description']" placeholder="Toolkit Description">{{ getDataHomePage('toolkit_description') }}</textarea> -->
                              <input type="hidden" id="toolkit_description" name="input['toolkit_description']" value="{{getDataHomePage('toolkit_description')}}" style="display:none" />
                              <input type="hidden" id="toolkit_description___Config" value="" style="display:none" />
                              <iframe id="toolkit_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=toolkit_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="template_description">Template Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['template_description']" placeholder="Template Description">{{ getDataHomePage('template_description') }}</textarea> -->
                              <input type="hidden" id="template_description" name="input['template_description']" value="{{getDataHomePage('template_description')}}" style="display:none" />
                              <input type="hidden" id="template_description___Config" value="" style="display:none" />
                              <iframe id="template_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=template_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="subscription_heading">Subscription Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['subscription_heading']" placeholder="Subscription Heading">{{ getDataHomePage('subscription_heading') }}</textarea> -->
                              <input type="hidden" id="subscription_heading" name="input['subscription_heading']" value="{{getDataHomePage('subscription_heading')}}" style="display:none" />
                              <input type="hidden" id="subscription_heading___Config" value="" style="display:none" />
                              <iframe id="subscription_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=subscription_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="testmonial_heading">Testmonial Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['testmonial_heading']" placeholder="Testmonial Heading">{{ getDataHomePage('testmonial_heading') }}</textarea> -->
                              <input type="hidden" id="testmonial_heading" name="input['testmonial_heading']" value="{{getDataHomePage('testmonial_heading')}}" style="display:none" />
                              <input type="hidden" id="testmonial_heading___Config" value="" style="display:none" />
                              <iframe id="testmonial_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=testmonial_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="policy_description">Policy Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['policy_description']" placeholder="Policy Description">{{ getDataHomePage('policy_description') }}</textarea> -->
                              <input type="hidden" id="policy_description" name="input['policy_description']" value="{{getDataHomePage('policy_description')}}" style="display:none" />
                              <input type="hidden" id="policy_description___Config" value="" style="display:none" />
                              <iframe id="policy_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=policy_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="policy_note_one">Policy Note One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['policy_note_one']" placeholder="Policy Note One">{{ getDataHomePage('policy_note_one') }}</textarea> -->
                              <input type="hidden" id="policy_note_one" name="input['policy_note_one']" value="{{getDataHomePage('policy_note_one')}}" style="display:none" />
                              <input type="hidden" id="policy_note_one___Config" value="" style="display:none" />
                              <iframe id="policy_note_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=policy_note_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="policy_note_two">Policy Note Two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['policy_note_two']" placeholder="Policy Note Two">{{ getDataHomePage('policy_note_two') }}</textarea> -->
                              <input type="hidden" id="policy_note_two" name="input['policy_note_two']" value="{{getDataHomePage('policy_note_two')}}" style="display:none" />
                              <input type="hidden" id="policy_note_two___Config" value="" style="display:none" />
                              <iframe id="policy_note_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=policy_note_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="policy_note_three">Policy Note three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['policy_note_three']" placeholder="Policy Note three">{{ getDataHomePage('policy_note_three') }}</textarea> -->
                              <input type="hidden" id="policy_note_three" name="input['policy_note_three']" value="{{getDataHomePage('policy_note_three')}}" style="display:none" />
                              <input type="hidden" id="policy_note_three___Config" value="" style="display:none" />
                              <iframe id="policy_note_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=policy_note_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="policy_note_four">Policy Note four:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['policy_note_four']" placeholder="Policy Note four">{{ getDataHomePage('policy_note_four') }}</textarea> -->
                              <input type="hidden" id="policy_note_four" name="input['policy_note_four']" value="{{getDataHomePage('policy_note_four')}}" style="display:none" />
                              <input type="hidden" id="policy_note_four___Config" value="" style="display:none" />
                              <iframe id="policy_note_four___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=policy_note_four&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_heading">Benefits Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_heading']" placeholder="Benefits Heading">{{ getDataHomePage('benefits_heading') }}</textarea> -->
                              <input type="hidden" id="benefits_heading" name="input['benefits_heading']" value="{{getDataHomePage('benefits_heading')}}" style="display:none" />
                              <input type="hidden" id="benefits_heading___Config" value="" style="display:none" />
                              <iframe id="benefits_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_one">Benefits One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_one']" placeholder="Benefits One">{{ getDataHomePage('benefits_one') }}</textarea> -->
                              <input type="hidden" id="benefits_one" name="input['benefits_one']" value="{{getDataHomePage('benefits_one')}}" style="display:none" />
                              <input type="hidden" id="benefits_one___Config" value="" style="display:none" />
                              <iframe id="benefits_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_two">Benefits two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_two']" placeholder="Benefits two">{{ getDataHomePage('benefits_two') }}</textarea> -->
                              <input type="hidden" id="benefits_two" name="input['benefits_two']" value="{{getDataHomePage('benefits_two')}}" style="display:none" />
                              <input type="hidden" id="benefits_two___Config" value="" style="display:none" />
                              <iframe id="benefits_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_three">Benefits three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_three']" placeholder="Benefits three">{{ getDataHomePage('benefits_three') }}</textarea> -->
                              <input type="hidden" id="benefits_three" name="input['benefits_three']" value="{{getDataHomePage('benefits_three')}}" style="display:none" />
                              <input type="hidden" id="benefits_three___Config" value="" style="display:none" />
                              <iframe id="benefits_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_four">Benefits four:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_four']" placeholder="Benefits four">{{ getDataHomePage('benefits_four') }}</textarea> -->
                              <input type="hidden" id="benefits_four" name="input['benefits_four']" value="{{getDataHomePage('benefits_four')}}" style="display:none" />
                              <input type="hidden" id="benefits_four___Config" value="" style="display:none" />
                              <iframe id="benefits_four___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_four&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_five">Benefits five:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_five']" placeholder="Benefits five">{{ getDataHomePage('benefits_five') }}</textarea> -->
                              <input type="hidden" id="benefits_five" name="input['benefits_five']" value="{{getDataHomePage('benefits_five')}}" style="display:none" />
                              <input type="hidden" id="benefits_five___Config" value="" style="display:none" />
                              <iframe id="benefits_five___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_five&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="benefits_six">Benefits six:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['benefits_six']" placeholder="Benefits six">{{ getDataHomePage('benefits_six') }}</textarea> -->
                              <input type="hidden" id="benefits_six" name="input['benefits_six']" value="{{getDataHomePage('benefits_six')}}" style="display:none" />
                              <input type="hidden" id="benefits_six___Config" value="" style="display:none" />
                              <iframe id="benefits_six___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=benefits_six&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="blogs_heading">Blog Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['blogs_heading']" placeholder="Blog Heading">{{ getDataHomePage('blogs_heading') }}</textarea> -->
                              <input type="hidden" id="blogs_heading" name="input['blogs_heading']" value="{{getDataHomePage('blogs_heading')}}" style="display:none" />
                              <input type="hidden" id="blogs_heading___Config" value="" style="display:none" />
                              <iframe id="blogs_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=blogs_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="vedio_heading">Vedio Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['vedio_heading']" placeholder="vedio_heading">{{ getDataHomePage('vedio_heading') }}</textarea> -->
                              <input type="hidden" id="vedio_heading" name="input['vedio_heading']" value="{{getDataHomePage('vedio_heading')}}" style="display:none" />
                              <input type="hidden" id="vedio_heading___Config" value="" style="display:none" />
                              <iframe id="vedio_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=vedio_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <!-- <div class="col-md-6">
                     <div class="form-group">
                              <label for="vedio">Upload Vedio:</label>
                              <input type="file" class="form-control" name="input['vedio']" placeholder="vedio" value="{{ getDataHomePage('vedio') }}">
                     </div>
                  </div> -->

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="vedio_des_one">Vedio Description One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['vedio_des_one']" placeholder="vedio_des_one">{{ getDataHomePage('vedio_des_one') }}</textarea> -->
                              <input type="hidden" id="vedio_des_one" name="input['vedio_des_one']" value="{{getDataHomePage('vedio_des_one')}}" style="display:none" />
                              <input type="hidden" id="vedio_des_one___Config" value="" style="display:none" />
                              <iframe id="vedio_des_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=vedio_des_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="vedio_des_two">Vedio Description Two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['vedio_des_two']" placeholder="vedio_des_two">{{ getDataHomePage('vedio_des_two') }}</textarea> -->
                              <input type="hidden" id="vedio_des_two" name="input['vedio_des_two']" value="{{getDataHomePage('vedio_des_two')}}" style="display:none" />
                              <input type="hidden" id="vedio_des_two___Config" value="" style="display:none" />
                              <iframe id="vedio_des_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=vedio_des_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="vedio_des_three">Vedio Description Three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['vedio_des_three']" placeholder="vedio_des_three">{{ getDataHomePage('vedio_des_three') }}</textarea> -->
                              <input type="hidden" id="vedio_des_three" name="input['vedio_des_three']" value="{{getDataHomePage('vedio_des_three')}}" style="display:none" />
                              <input type="hidden" id="vedio_des_three___Config" value="" style="display:none" />
                              <iframe id="vedio_des_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=vedio_des_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>
                 
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="counter_heading">Counter Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['counter_heading']" placeholder="counter_heading Link">{{ getDataHomePage('counter_heading') }}</textarea> -->
                              <input type="hidden" id="counter_heading" name="input['counter_heading']" value="{{getDataHomePage('counter_heading')}}" style="display:none" />
                              <input type="hidden" id="counter_heading___Config" value="" style="display:none" />
                              <iframe id="counter_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=counter_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_one_heading">Counter Heading One:</label>
                              <input type="text" class="form-control" name="input['counter_one_heading']" placeholder="Counter One Heading" value="{{ getDataHomePage('counter_one_heading') }}">                              
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_one">Counter One:</label>
                              <input type="text" class="form-control" name="input['counter_one']" placeholder="Counter One" value="{{ getDataHomePage('counter_one') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_two_heading">Counter Two Heading:</label>
                              <input type="text" class="form-control" name="input['counter_two_heading']" placeholder="Counter Two Heading" value="{{ getDataHomePage('counter_two_heading') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_two">Counter Two:</label>
                              <input type="text" class="form-control" name="input['counter_two']" placeholder="Counter Two" value="{{ getDataHomePage('counter_two') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_three_heading">Counter Three Heading:</label>
                              <input type="text" class="form-control" name="input['counter_three_heading']" placeholder="Counter Three Heading" value="{{ getDataHomePage('counter_three_heading') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_three">Counter Three:</label>
                              <input type="text" class="form-control" name="input['counter_three']" placeholder="Counter Three" value="{{ getDataHomePage('counter_three') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_four_heading">Counter Four Heading:</label>
                              <input type="text" class="form-control" name="input['counter_four_heading']" placeholder="Counter Four Heading" value="{{ getDataHomePage('counter_four_heading') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="counter_four">Counter Four:</label>
                              <input type="text" class="form-control" name="input['counter_four']" placeholder="Counter Three" value="{{ getDataHomePage('counter_four') }}">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="newsletter_heading">Newsletter Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['newsletter_heading']" placeholder="Newsletter Heading">{{ getDataHomePage('newsletter_heading') }}</textarea> -->
                              <input type="hidden" id="newsletter_heading" name="input['newsletter_heading']" value="{{getDataHomePage('newsletter_heading')}}" style="display:none" />
                              <input type="hidden" id="newsletter_heading___Config" value="" style="display:none" />
                              <iframe id="newsletter_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=newsletter_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <!-- <div class="col-md-6">
                     <div class="form-group">
                              <label for="newsletter_image">Newsletter Image:</label>
                              <input type="file" class="form-control"  name="input['newsletter_image']" placeholder="Instagram Link" value="{{ getDataHomePage('newsletter_image') }}">
                     </div>
                  </div> -->

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="newsletter_offer">Newsletter Offer:</label>
                              <input type="text" class="form-control"  name="input['newsletter_offer']" placeholder="Newsletter Offer" value="{{ getDataHomePage('newsletter_offer') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="newsletter_tips">Newsletter Tips:</label>
                              <input type="text" class="form-control"  name="input['newsletter_tips']" placeholder="Newsletter Tips" value="{{ getDataHomePage('newsletter_tips') }}">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="newsletter_update">Newsletter Update:</label>
                              <input type="text" class="form-control"  name="input['newsletter_update']" placeholder="Newsletter Update" value="{{ getDataHomePage('newsletter_update') }}">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="sticky_note_heading">Sticky Note Heading:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['sticky_note_heading']" placeholder="Sticky Note Heading">{{ getDataHomePage('sticky_note_heading') }}</textarea> -->
                              <input type="hidden" id="sticky_note_heading" name="input['sticky_note_heading']" value="{{getDataHomePage('sticky_note_heading')}}" style="display:none" />
                              <input type="hidden" id="sticky_note_heading___Config" value="" style="display:none" />
                              <iframe id="sticky_note_heading___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sticky_note_heading&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="sticky_note_one">Sticky Note One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['sticky_note_one']" placeholder="Sticky Note One">{{ getDataHomePage('sticky_note_one') }}</textarea> -->
                              <input type="hidden" id="sticky_note_one" name="input['sticky_note_one']" value="{{getDataHomePage('sticky_note_one')}}" style="display:none" />
                              <input type="hidden" id="sticky_note_one___Config" value="" style="display:none" />
                              <iframe id="sticky_note_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sticky_note_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="sticky_note_two">Sticky Note Two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['sticky_note_two']" placeholder="Sticky Note Two">{{ getDataHomePage('sticky_note_two') }}</textarea> -->
                              <input type="hidden" id="sticky_note_two" name="input['sticky_note_two']" value="{{getDataHomePage('sticky_note_two')}}" style="display:none" />
                              <input type="hidden" id="sticky_note_two___Config" value="" style="display:none" />
                              <iframe id="sticky_note_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sticky_note_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="sticky_note_three">Sticky Note Three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['sticky_note_three']" placeholder="Sticky Note Three">{{ getDataHomePage('sticky_note_three') }}</textarea> -->
                              <input type="hidden" id="sticky_note_three" name="input['sticky_note_three']" value="{{getDataHomePage('sticky_note_three')}}" style="display:none" />
                              <input type="hidden" id="sticky_note_three___Config" value="" style="display:none" />
                              <iframe id="sticky_note_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sticky_note_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="sticky_note_four">Sticky Note Four:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['sticky_note_four']" placeholder="Sticky Note Four">{{ getDataHomePage('sticky_note_four') }}</textarea> -->
                              <input type="hidden" id="sticky_note_four" name="input['sticky_note_four']" value="{{getDataHomePage('sticky_note_four')}}" style="display:none" />
                              <input type="hidden" id="sticky_note_four___Config" value="" style="display:none" />
                              <iframe id="sticky_note_four___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=sticky_note_four&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <hr>
                  <h3><strong>For Contact US Page</strong></h3>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="office_address_one">Office Address One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['office_address_one']" placeholder="Office Address One">{{ getDataHomePage('office_address_one') }}</textarea> -->
                              <input type="hidden" id="office_address_one" name="input['office_address_one']" value="{{getDataHomePage('office_address_one')}}" style="display:none" />
                              <input type="hidden" id="office_address_one___Config" value="" style="display:none" />
                              <iframe id="office_address_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=office_address_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="office_address_two">Office Address Two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['office_address_two']" placeholder="Office Address Two">{{ getDataHomePage('office_address_two') }}</textarea> -->
                              <input type="hidden" id="office_address_two" name="input['office_address_two']" value="{{getDataHomePage('office_address_two')}}" style="display:none" />
                              <input type="hidden" id="office_address_two___Config" value="" style="display:none" />
                              <iframe id="office_address_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=office_address_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="office_address_three">Office Address Three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['office_address_three']" placeholder="Office Address Three">{{ getDataHomePage('office_address_three') }}</textarea> -->
                              <input type="hidden" id="office_address_three" name="input['office_address_three']" value="{{getDataHomePage('office_address_three')}}" style="display:none" />
                              <input type="hidden" id="office_address_three___Config" value="" style="display:none" />
                              <iframe id="office_address_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=office_address_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <hr>
                  <h3><strong>For About US Page</strong></h3>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="about_us_sticky_note_one">About US Sticky Note One:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['about_us_sticky_note_one']" placeholder="Office Address Three">{{ getDataHomePage('about_us_sticky_note_one') }}</textarea> -->
                              <input type="hidden" id="about_us_sticky_note_one" name="input['about_us_sticky_note_one']" value="{{getDataHomePage('about_us_sticky_note_one')}}" style="display:none" />
                              <input type="hidden" id="about_us_sticky_note_one___Config" value="" style="display:none" />
                              <iframe id="about_us_sticky_note_one___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=about_us_sticky_note_one&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="about_us_sticky_note_two">About US Sticky Note Two:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['about_us_sticky_note_two']" placeholder="Office Address Three">{{ getDataHomePage('about_us_sticky_note_two') }}</textarea> -->
                              <input type="hidden" id="about_us_sticky_note_two" name="input['about_us_sticky_note_two']" value="{{getDataHomePage('about_us_sticky_note_two')}}" style="display:none" />
                              <input type="hidden" id="about_us_sticky_note_two___Config" value="" style="display:none" />
                              <iframe id="about_us_sticky_note_two___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=about_us_sticky_note_two&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="about_us_sticky_note_three">About US Sticky Note Three:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['about_us_sticky_note_three']" placeholder="Office Address Three">{{ getDataHomePage('about_us_sticky_note_three') }}</textarea> -->
                              <input type="hidden" id="about_us_sticky_note_three" name="input['about_us_sticky_note_three']" value="{{getDataHomePage('about_us_sticky_note_three')}}" style="display:none" />
                              <input type="hidden" id="about_us_sticky_note_three___Config" value="" style="display:none" />
                              <iframe id="about_us_sticky_note_three___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=about_us_sticky_note_three&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="our_mission_one">Our Mission One:</label>
                              <input type="text" class="form-control"  name="input['our_mission_one']" placeholder="Our Mission One" value="{{ getDataHomePage('our_mission_one') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="our_mission_two">Our Mission Two:</label>
                              <input type="text" class="form-control"  name="input['our_mission_two']" placeholder="Our Mission Two" value="{{ getDataHomePage('our_mission_two') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="our_mission_three">Our Mission Three:</label>
                              <input type="text" class="form-control"  name="input['our_mission_three']" placeholder="Our Mission Three" value="{{ getDataHomePage('our_mission_three') }}">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="our_team_description">Our Team Description:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['our_team_description']" placeholder="Office Address Three">{{ getDataHomePage('our_team_description') }}</textarea> -->
                              <input type="hidden" id="our_team_description" name="input['our_team_description']" value="{{getDataHomePage('our_team_description')}}" style="display:none" />
                              <input type="hidden" id="our_team_description___Config" value="" style="display:none" />
                              <iframe id="our_team_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=our_team_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="about_us_our_history">About US Our History:</label>
                              <!-- <textarea type="text" class="form-control ckeditor" name="input['about_us_our_history']" placeholder="About US Our History">{{ getDataHomePage('about_us_our_history') }}</textarea> -->
                              <input type="hidden" id="about_us_our_history" name="input['about_us_our_history']" value="{{getDataHomePage('about_us_our_history')}}" style="display:none" />
                              <input type="hidden" id="about_us_our_history___Config" value="" style="display:none" />
                              <iframe id="about_us_our_history___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=about_us_our_history&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                     </div>
                  </div>


                  <div class="box-footer text-center">
                     <button type="submit" name="submit" class="btn btn-primary pull-left">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
<script type="text/javascript" src="{{asset('admin/fckeditor/fckeditor.js')}}"></script>