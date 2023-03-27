@extends('frontend.layouts.main')
@section('main-container')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Buy</h1>
            <span class="color-text-a">Properties</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form class="filterbar">
              <div class="form-group">
                <input type="search" class="form-control" placeholder="City" aria-label="Username" name="search" >
              </div>

              <div class="form-group">
                <label for="bedrooms"></label>
                <select class="custom-select" id="bed" name="beds">
                  <option>Bedrooms</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>

              <div class="form-group">
                <label for="bedrooms"></label>
                <select class="custom-select"  id="bath" name="baths">
                  <option>Bathrooms</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>

              <div class="form-group">
                <label for="bedrooms"></label>
                <select class="custom-select"  id="price">
                  <option>Price</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
              <button class="searchbtn">Save Search</button>
            </form>
          </div>
        </div>

        @foreach ($propertydetail as $propertydetail)
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{ asset('storage/images/'.$propertydetail ->img_link) }}" alt="Property Image" class="img-a img-fluid thumbnail">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="/prodetails">{{ $propertydetail->street }}
                      <br /> {{ $propertydetail->city }}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Price | Rs {{ $propertydetail->price }}</span>
                  </div>
                  <a href="{{url('prodetails',$propertydetail->id)}}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>{{ $propertydetail->area }} m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>{{ $propertydetail->bedroom }}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>{{ $propertydetail->bathroom }}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Parking</h4>
                      <span>{{ $propertydetail->parking }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        