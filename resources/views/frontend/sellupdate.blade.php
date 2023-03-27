@extends('frontend.layouts.main')
@section('main-container')

  <section class="form-container ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-20">
          <h2 class="mb-3">Property Details</h2>
          {{-- <form action="{{ url('propertydetail-update', $propertydetail->id) }}" method="POST" enctype="multipart/form-data"> --}}
          <form  method="POST" action="{{ route('propertydetail-update', $propertydetail->id) }}" enctype="multipart/form-data" >
            @csrf
            
            <div class="form-row" >
              <div class="col-md-4 mb-3">
                <label for="validationServer01">Price</label>
                <input type="number" class="form-control" id="validationServer01" placeholder="Price" value="{{$propertydetail->price}}" required name="price">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Area</label>
                <input type="number" class="form-control" id="validationServer02" placeholder="Area" value="{{$propertydetail->area}}" required name="area" >
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bedroom</label>
                <input type="number" class="form-control" id="validationServer03" placeholder="Bedroom" value="{{$propertydetail->bedroom}}" required name="bedroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bathroom</label>
                <input type="number" class="form-control" id="validationServer04" placeholder="Bathroom" value="{{$propertydetail->bathroom}}" required name="bathroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Living Room</label>
                <input type="number" class="form-control" id="validationServer05"img placeholder="Living room" value="{{$propertydetail->livingroom}}" required name="livingroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Kitchen</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="Kitchen" value="{{$propertydetail->kitchen}}" required name="kitchen">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Year it was built on</label>
                <input type="date" class="form-control" id="validationServer06" placeholder="Year built" value="{{$propertydetail->year_built}}" required name="year_built">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Number of stories</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="No of stories" value="{{$propertydetail->no_of_stories}}" required name="no_of_stories">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Road width</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Road width" value="{{$propertydetail->road_width}}" required name="road_width">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Parking</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Parking" value="{{$propertydetail->parking}}" required name="parking">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Image</label>
                <input type="file" class="" id="validationServer06" placeholder="" value="{{$propertydetail->img_link}}" required name="img_link">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Describe the property</label>
                <textarea class="form-control desc" id="exampleFormControlTextarea1" rows=8" name="description">{{$propertydetail->description }}</textarea>
              </div>
            </div>



            <h2 class="mt-3 mb-3">Address Details</h2>  
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Country</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Country" value = "{{$propertydetail->country}}" required name="country">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="State" value = "{{$propertydetail->state}}" required name="state">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">DIstrict</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="District" value = "{{$propertydetail->district}}" required name="district">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">City/Muncipality</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="City/Muncipality" value = "{{$propertydetail->city}}" required name="city">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Ward No</label>
                <input type="number" class="form-control " id="validationServer08" placeholder="Ward No" value = "{{$propertydetail->ward_no}}" required name="ward_no">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="number" class="form-control " id="validationServer09" placeholder="Zip" value = "{{$propertydetail->zipcode}}" required name="zipcode">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Tole</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Tole" value = "{{$propertydetail->tole}}" required name="tole">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Street</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="Street" value = "{{$propertydetail->street}}" required name="street">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Latitude</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="Latitude" value = "{{$propertydetail->latitude}}" required name="latitude">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Longitude</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Longitude" value = "{{$propertydetail->longitude}}" required name="longitude">
                <div class="">
                </div>
              </div>
            </div>

              <h2 class="mt-3 mb-3">Seller Details</h2>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationServer03">Full Name</label>
                  <input type="text" class="form-control " id="validationServer07" placeholder="Full name" value = "{{$propertydetail->fullname}}"  required name="fullname">
                  <div class="">
                    {{-- Please provide a valid city. --}}
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer04">Phone Number</label>
                  <input type="number"class="form-control " id="validationServer08" placeholder="Phone Number"  required value = "{{$propertydetail->phn_number}}"  name="phn_number">
                  <div class="">
                    {{-- Please provide a valid state. --}}
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer05">Email</label>
                  <input type="email" class="form-control " id="validationServer09" placeholder="Email" value = "{{$propertydetail->email}}"  required name="email">
                  <div class="">
                    {{-- Please provide a valid zip. --}}
                  </div>
                </div>
              </div>
  
              

            <div class="form-group">
            </div>
            <button class="btn btn-primary" type="submit">Update data</button>
          </form>
        </div>
      </div>
    </div>

  </section> 
  <!--/ Intro Single End /-->
@endsection






