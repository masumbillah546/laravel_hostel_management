

@extends('frontend.master')
@section('content')



<!-- <router-outlet></router-outlet> -->





<section class="product-single theme3 pt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0"><br><br><br>
                <div class="position-relative">
                    <span class="badge badge-danger top-right"></span>
                </div>
                <div class="product-sync-init mb-20">
                    <div class="single-product">
                        <div class="product-thumb">
                            <img height="400" src="{{ asset('/assets/8.jpg') }}" alt="product-thumb">
                        </div>
                    </div>
                    <!-- single-product end -->
           
                    <!-- single-product end -->
                </div>

              
            </div>
            <div class="col-lg-6 mt-5 mt-md-0">
                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">10 BED MIXED DORM</h2>
                          <!-- <div class="star-content mb-20">
                              <span class="star-on"><i class="ion-ios-star"></i> </span>
                              <span class="star-on"><i class="ion-ios-star"></i> </span>
                              <span class="star-on"><i class="ion-ios-star"></i> </span>
                              <span class="star-on"><i class="ion-ios-star"></i> </span>
                              <span class="star-on"><i class="ion-ios-star"></i> </span>
                              <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                  Read reviews <span>(1)</span></a>
                              <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i
                                          class="far fa-edit"></i></span> Write a review</a>
                          </div> -->
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
                            <h3 class="product-price mr-20">
                                <span class="onsale">$500</span> per month</h3>
                            
                        </div>
                        <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</p>
                        <h3>Room Facilities</h3>
                        <ul>
                            <li>Duvet & Comfy Pillow</li>
                            <li>TV</li>
                            <li>Kettle & Coffee</li>
                            <li>Plug Sockets</li>
                            <li>Free WiFi</li>
                        </ul>
                    </div>
                    <div class="product-footer">
                        <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                            <!-- <div class="count d-flex">
                                <input type="number" min="1" max="10" step="1" value="1">
                                <div class="button-group">
                                    <button class="count-btn increment"><i class="fas fa-chevron-up"></i></button>
                                    <button class="count-btn decrement"><i class="fas fa-chevron-down"></i></button>
                                </div>
                            </div> -->
                            <div>
                                <a href="/register" class="btn btn-success">
                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                    Register Now
                                </a>
                            </div>
                        </div>
                       <!--  <div class="addto-whish-list">
                            <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                            <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                        </div>
                        <div class="pro-social-links mt-10">
                            <ul class="d-flex align-items-center">
                                <li class="share">Share</li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container text-center"> 
<div class="row">

  <div class="col-lg-12"><br><br><br>
     <h1>OUR ROOMS</h1><hr><br><br>
      <!--Grid row-->
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 project">
            <a href="#">
                <div>
                    <img src="{{ asset('/assets/2.jpg') }}" class="img-responsive"/>
                    <div class="fa fa-plus project-overlay"></div>
                </div>
                <div style="text-align:center;">
                    <h3>Project name</h3>
                    <p>Image description</p>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 project">
            <a href="#">
                <div>
                    <img src="{{ asset('/assets/10.jpg') }}" class="img-responsive"/>
                    <div class="fa fa-plus project-overlay"></div>
                </div>
                <div style="text-align:center;">
                    <h3>DOUBLE ROOM (PRIVATE)</h3>
                    <p>Image description</p>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 project">
            <a href="#">
                <div>
                    <img src="{{ asset('/assets/8.jpg') }}" class="img-responsive"/>
                    <div class="fa fa-plus project-overlay"></div>
                </div>
                <div style="text-align:center;">
                    <h3>10 BED MIXED DORM</h3>
                    <p>Image description</p>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 project">
            <a href="#">
                <div>
                    <img src="{{ asset('/assets/9.jpg') }}" class="img-responsive"/>
                    <div class="fa fa-plus project-overlay"></div>
                </div>
                <div style="text-align:center;">
                    <h3>Project name</h3>
                    <p>Image description</p>
                </div>
            </a>
        </div>


      </div>
  </div>

  <div class="col-lg-12"><br><br><br>
    <h1>FACILITIES</h1><hr><br><br>
    <div class="row text-center" style="">
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/4.png') }}" alt="lobby">
                    <h5 class="facility-home">Luxurious Lobby</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/3.png') }}" alt="24hour">
                    <h5 class="facility-home">24 Hours Security</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/16.png') }}" alt="air condition">
                    <h5 class="facility-home">Air Condition</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/1-1.png') }}" alt="meal">
                    <h5 class="facility-home" style="margin-top: 6px;">3 Times Meals</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" style="width: 95px" src="{{ asset('/assets/images/18.png') }}" alt="washng machine">
                    <h5 class="facility-home" style="line-height: 22px; margin-top: -2px;">Washing Machine &amp; Dryer</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="" src="{{ asset('/assets/images/8.png') }}" alt="wifi">
                    <h5 class="facility-home">Wi-Fi</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/2.png') }}" alt="fire safety">
                    <h5 class="facility-home">Fire Safety</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/12.png') }}" alt="house keeping">
                    <h5 class="facility-home">House Keeping</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/10.png') }}" alt="Hair Dryer">
                    <h5 class="facility-home">Hair Dryer</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/13.png') }}" alt="tv">
                    <h5 class="facility-home">Smart TV</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/11.png') }}" alt="generator">
                    <h5 class="facility-home">Generator</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px" class="width-95-px" src="{{ asset('/assets/images/14.png') }}" alt="reading">
                    <h5 class="facility-home">Reading Room</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px" src="{{ asset('/assets/images/17.png') }}" alt="facility home">
                    <h5 class="facility-home">Personal Locker</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px" src="{{ asset('/assets/images/6.png') }}" alt="multi-function bed">
                    <h5 class="facility-home">Multi-functional Bed</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px" src="{{ asset('/assets/images/15.png') }}" alt="finger-print">
                    <h5 class="facility-home">Finger Print Entrance</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px" src="{{ asset('/assets/images/7.png') }}" alt="auto shoe polisher">
                    <h5 class="facility-home">Auto Shoe Polisher</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px"  src="{{ asset('/assets/images/5.png') }}" alt="gym">
                    <h5 class="facility-home">GYM</h5>
                </div>
                <div class="col-md-2 col-sm-6 col-6">
                    <img style="width: 95px;margin-top: 28px;" class="width-95-px"  src="{{ asset('/assets/images/9.png') }}" alt="playing zone">
                    <h5 class="facility-home">Cricket Playing Zone</h5>
                </div>


            </div>
  </div>
</div>   
  <!-- <h3>What We Do</h3><br> -->
  <div class="row">
   <!--  <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div> -->
    <div class="col-sm-12"> 
     <!--  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>  -->   

   <!--    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
   <hr>
   <br><br>
<h1 style="">Our Hostel Map</h1><br>
     <div class="mapouter"><div class="gmap_canvas"><iframe width="1100" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=jatrabari%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies free</a></div>
   </div>

    <!-- </div> -->
   <!--  <div class="col-sm-4">
      <div class="well">
       <h4>Our Cost</h4><span>------------------------</span>
       <ol class="list-group-item-text">
       	<li>Per Seat rent: 3000tk</li>
       	<li>Per Meale rate: 70tk</li>
       	<li></li>
       </ol>
      </div>
      <div class="well">
       <h4>Our Ruls</h4><hr>
       <ol class="list-group-item-text">
       	<li>No Smoking</li>
       	<li>Not allowed outer people</li>
       	<li>Not allowed to go outside of hostel</li>
       </ol>
      </div>
    </div> -->


   <!--  <div class="col-lg-12">
    	<google-map
  height="500px"
  width="100%"
  [zoom]="zoom"
  [center]="center"
  [options]="options"
></google-map>


<button (click)="zoomIn()">Zoom in</button>
<button (click)="zoomOut()">Zoom out</button>
    </div> -->
<!--     <div class="col-lg-12">
    	<agm-map [latitude]="lat" [longitude]="lng">
  <agm-marker [latitude]="lat" [longitude]="lng"></agm-marker>
</agm-map>
    </div> -->
<!--   </div> -->
<br><br><br><br>
</div>

 <div id="" class="container" style="padding-bottom: 200px">

            <div class="col-lg-12">
                <form (submit)="sand_sms()" class="form-group" action="">
                 <!--    <h3></h3> -->
                    <h1 id="contact">Contact Us</h1><br>
                    <input [(ngModel)]="sms.name" name="name" class="form-control" type="email" placeholder="Email"><br>
                    <input [(ngModel)]="sms.subject" name="subject" class="form-control" type="text" placeholder="Subject"><br>
                    <textarea [(ngModel)]="sms.dis" name="dis" class="form-control" required="" cols="100" rows="5" placeholder="Type your messages ..."></textarea><br>
                    <button (click)="goBack()" class=" btn btn-success btn-block btn-lg" type="submit">Send</button>
                </form>
            </div>
            
            </div>


<br>



@endsection

