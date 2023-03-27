@extends('frontend.layouts.main')
@section('main-container')

  <section class="form-container ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-20">
          <h2 class="mb-3">Rent Property Details</h2>
          {{-- <form action="{{ url('rentdetail-update', $rentdetail->id) }}" method="POST" enctype="multipart/form-data"> --}}
          <form  method="POST" action="{{ route('rentdetail-update', $rentdetail->id) }}" enctype="multipart/form-data" >
            @csrf
            
            <div class="form-row" >
              <div class="col-md-4 mb-3">
                <label for="validationServer01">Rent</label>
                <input type="number" class="form-control" id="validationServer01" placeholder="Price" value="{{$rentdetail->rent}}" required name="rent">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer01">Deposit</label>
                <input type="number" class="form-control" id="validationServer01" placeholder="Price" value="{{$rentdetail->deposit}}" required name="deposit">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer01">Lease Duration</label>
                <input type="number" class="form-control" id="validationServer01" placeholder="Price" value="{{$rentdetail->duration}}" required name="duration">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Area</label>
                <input type="number" class="form-control" id="validationServer02" placeholder="Area" value="{{$rentdetail->area}}" required name="area" >
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bedroom</label>
                <input type="number" class="form-control" id="validationServer03" placeholder="Bedroom" value="{{$rentdetail->bedroom}}" required name="bedroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bathroom</label>
                <input type="number" class="form-control" id="validationServer04" placeholder="Bathroom" value="{{$rentdetail->bathroom}}" required name="bathroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Living Room</label>
                <input type="number" class="form-control" id="validationServer05"img placeholder="Living room" value="{{$rentdetail->livingroom}}" required name="livingroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Kitchen</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="Kitchen" value="{{$rentdetail->kitchen}}" required name="kitchen">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Date available for rent</label>
                <input type="date" class="form-control" id="validationServer06" placeholder="Year built" value="{{$rentdetail->rent_date}}" required name="rent_date">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Number of stories</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="No of stories" value="{{$rentdetail->no_of_stories}}" required name="no_of_stories">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Road width</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Road width" value="{{$rentdetail->road_width}}" required name="road_width">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Parking</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Parking" value="{{$rentdetail->parking}}" required name="parking">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Image</label>
                <input type="file" class="" id="validationServer06" placeholder="" value="{{$rentdetail->img_link}}" required name="img_link">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Describe the property</label>
                  <textarea class="form-control desc" id="exampleFormControlTextarea1" rows=8" name="description">{{$rentdetail->description }}</textarea>
                </div>
              </div>


            <h2 class="mt-3 mb-3">Address Details</h2>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Country</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Country" value = "{{$rentdetail->country}}" required name="country">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="State" value = "{{$rentdetail->state}}" required name="state">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">DIstrict</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="District" value = "{{$rentdetail->district}}" required name="district">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">City/Muncipality</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="City/Muncipality" value = "{{$rentdetail->city}}" required name="city">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Ward No</label>
                <input type="number" class="form-control " id="validationServer08" placeholder="Ward No" value = "{{$rentdetail->ward_no}}" required name="ward_no">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="number" class="form-control " id="validationServer09" placeholder="Zip" value = "{{$rentdetail->zipcode}}" required name="zipcode">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Tole</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Tole" value = "{{$rentdetail->tole}}" required name="tole">
                <div class="">
                  <!-- {{-- Please provide a valid city. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Street</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="Street" value = "{{$rentdetail->street}}" required name="street">
                <div class="">
                  <!-- {{-- Please provide a valid state. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Latitude</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="Latitude" value = "{{$rentdetail->latitude}}" required name="latitude">
                <div class="">
                  <!-- {{-- Please provide a valid zip. --}} -->
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Longitude</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Longitude" value = "{{$rentdetail->longitude}}" required name="longitude">
                <div class="">
                </div>
              </div>
            </div>

              <h2 class="mt-3 mb-3">Seller Details</h2>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationServer03">Full Name</label>
                  <input type="text" class="form-control " id="validationServer07" placeholder="Full name" value = "{{$rentdetail->fullname}}"  required name="fullname">
                  <div class="">
                    {{-- Please provide a valid city. --}}
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer04">Phone Number</label>
                  <input type="number"class="form-control " id="validationServer08" placeholder="Phone Number"  required value = "{{$rentdetail->phn_number}}"  name="phn_number">
                  <div class="">
                    {{-- Please provide a valid state. --}}
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer05">Email</label>
                  <input type="email" class="form-control " id="validationServer09" placeholder="Email" value = "{{$rentdetail->email}}"  required name="email">
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






