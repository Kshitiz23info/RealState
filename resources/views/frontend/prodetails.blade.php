@extends('frontend.layouts.main')
@section('main-container')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <form  method="POST" action="{{url('prodetails')}}" enctype="multipart/form-data" >
            @csrf
          <div class="title-single-box">
            <h1 class="title-single">{{$propertydetail->tole}},</h1>
            <h1 class="title-single">{{$propertydetail->city}}</h1>
            {{-- <span class="color-text-a">{{$propertydetail->city}}</span> --}}
          </div>  
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$propertydetail->tole}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img  src="{{ asset('storage/images/'.$propertydetail ->img_link) }}" alt="Property Image" style="height: 500px" width="400px">
            </div>
            <div class="carousel-item-b">
              <img src="frontend/img/slide-3.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="frontend/img/slide-1.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-5">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico align-self-center ">
                                <h2>Price: Rs {{$propertydetail->price}}</h2>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Property Details</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{$propertydetail->property_id}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{$propertydetail->tole}}, {{$propertydetail->city}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>House</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>Sale</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>{{$propertydetail->area}} m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{$propertydetail->bedroom}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{$propertydetail->bathroom}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Livingroom:</strong>
                      <span>{{$propertydetail->livingroom}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Kitchen:</strong>
                      <span>{{$propertydetail->kitchen}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Parking:</strong>
                      <span>{{$propertydetail->parking}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Road width:</strong>
                      <span>{{$propertydetail->road_width}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Number of storeys:</strong>
                      <span>{{$propertydetail->no_of_stories}}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Year built:</strong>
                      <span>{{$propertydetail->year_built}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{$propertydetail->description}}    
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Address</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a">
                 <li><strong>Country: </strong>{{$propertydetail->country}}</li>
                <li><strong>State: </strong>{{$propertydetail->state}}</li>
                <li><strong>District:</strong> {{$propertydetail->district}}</li>
                <li><strong>City: </strong>{{$propertydetail->city}}</li>
                <li><strong>Tole: </strong>{{$propertydetail->tole}}</li>
                <li><strong>Street: </strong>{{$propertydetail->street}}</li>
                <li><strong>Latitude: </strong>{{$propertydetail->latitude}}</li>
                <li><strong>Longitude: </strong>{{$propertydetail->longitude}}</li>
                </ul>
              </div>
              <div class="row section ">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Seller Details</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list" >
                  <li><strong>Fullname: </strong>{{$propertydetail->fullname}}</li>
                 <li><strong>Phone Number:  </strong>{{$propertydetail->phn_number}}</li>
                 <li><strong>Email: </strong>{{$propertydetail->email}}</li>
                 </ul>
               </div>
               <style>
                 .list{
                   line-height: 2
                 }
               </style> 
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                aria-controls="pills-video" aria-selected="true">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                aria-selected="false">Floor Plans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                aria-selected="false">Ubication</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            {{-- <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div> --}}
            <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="img/plan2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->
  @endsection