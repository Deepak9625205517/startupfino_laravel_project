<footer id="footer">

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

                  <div class="inner-footer-corpbiz">

                     <h3>Product</h3>

                     <ul class="list-unstyled">

                       @foreach(getFooterMenu() as $head)

                        <li>

                        <a href="{{url($head->slug)}}">{{$head->title}}</a>

                        </li>

                        @endforeach   

                        

                     </ul>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

                  <div class="inner-footer-corpbiz">

                     <h3>Document Kits</h3>

                     <ul class="list-unstyled">
                     
                        @foreach(getLatestSubCategoryDocumentList() as $list)    

                            <li>

                                <a href="{{ route('templates.subcategory', [$list->category->slug, $list->slug])}}">{{ $list->name}}</a>

                            </li>

                        @endforeach                        

                     </ul>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

                  <div class="inner-footer-corpbiz">

                     <h3>Legal</h3>

                     <ul class="list-unstyled">

                        @foreach(getLatestMenu() as $legal)    

                            <li>

                                <a href="{{url($legal->slug)}}">{{$legal->title}}</a>

                            </li>

                        @endforeach                        

                     </ul>

                  </div>

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">

                  <div class="inner-footer-corpbiz">

                     <h3>Follow Us</h3>

                     <ul class="list-unstyled">

                        <li>

                           <a href="{{ getDataFromSetting('facebook') }}"><span class="social-icon"><i class="fa fa-facebook"></i></span> <span><small>Facebook</small></span></a>

                        </li>

                        <li>

                           <a href="{{ getDataFromSetting('twitter') }}"><span class="social-icon"><i class="fa fa-twitter"></i></span> <span><small>Twitter</small></span></a>

                        </li>

                        <li>

                           <a href="{{ getDataFromSetting('linkedin') }}"><span class="social-icon"><i class="fa fa-linkedin"></i></span> <span><small>Linkedin</small></span></a>

                        </li>

                        <li>

                           <a href="{{ getDataFromSetting('instagram') }}"><span class="social-icon"><i class="fa fa-instagram"></i></span> <span><small>Instagram</small></span></a>

                        </li>

                     </ul>

                  </div>

               </div>

            </div>

         </div>

         <div class="container">

            <div class="row">

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <div class="inner-links d-flex justify-content-between align-items-center">

                     <ul class="list-inline m-0">

                        <li class="list-inline-item">

                           <a href="{{route('about-us')}}">About Us</a>

                        </li>
                        

                        <li class="list-inline-item">

                           <a href="{{route('contact-us')}}">Contact Us</a>

                        </li>

                     </ul>

                     <p class="ml-auto mb-0">{{ getDataFromSetting('copyright') }}</p>

                  </div>

               </div>

            </div>

         </div>

      </footer>

<!-- <div class="add-footer d-flex justify-content-betwwen align-items-center">

    <img src="{{asset('front/img/document.png')}}">

    <div class="ml-3">

        <p>Anuj from Delhi</p>

        <p><strong>Purchased Hr Document</strong></p>

        <p><small>10 Minute ago</small></p>

    </div>

</div> -->