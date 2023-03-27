@extends('frontend.layouts.main')
@section('main-container')

  <section class="form-container ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-20">
          <h2 class="mb-3">Property Details</h2>
          <form method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-row" >
              <div class="col-md-4 mb-3">
                <label for="validationServer01">Price</label>
                <input type="number" class="form-control" id="validationServer01" placeholder="Price" value="" required name="price">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Area</label>
                <input type="number" class="form-control" id="validationServer02" placeholder="Area" value="" required name="area" >
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bedroom</label>
                <input type="number" class="form-control" id="validationServer03" placeholder="Bedroom" value="" required name="bedroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Bathroom</label>
                <input type="number" class="form-control" id="validationServer04" placeholder="Bathroom" value="" required name="bathroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Living Room</label>
                <input type="number" class="form-control" id="validationServer05" placeholder="Living room" value="" required name="livingroom">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Kitchen</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="Kitchen" value="" required name="kitchen">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Year it was built on</label>
                <input type="date" class="form-control" id="validationServer06" placeholder="Year built" value="" required name="year_built">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServer02">Number of stories</label>
                <input type="number" class="form-control" id="validationServer06" placeholder="No of stories" value="" required name="no_of_stories">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Road width</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Road width" value="" required name="road_width">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Parking</label>
                <input type="text" class="form-control" id="validationServer06" placeholder="Parking" value="" required name="parking">
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Image</label>
                <input type="file" class="" id="validationServer06" placeholder="" value="" required name="img_link" >
                {{-- <div class="valid-feedback">
                  Looks good!
                </div> --}}  
              </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label>Property Type</label><br>
                  <select class="custom-select type"  id="price">
                    <option>Home</option>
                    <option>Land</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Describe the property</label>
                <textarea class="form-control desc" id="exampleFormControlTextarea1" rows=8" name="description"></textarea>
              </div>
              </div>

            <h2 class="mt-3 mb-3">Address Details</h2>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Country</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Country" required name="country">
                <div class="">
                  {{-- Please provide a valid city. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="State" required name="state">
                <div class="">
                  {{-- Please provide a valid state. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">DIstrict</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="District" required name="district">
                <div class="">
                  {{-- Please provide a valid zip. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">City/Muncipality</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="City/Muncipality" required name="city">
                <div class="">
                  {{-- Please provide a valid city. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Ward No</label>
                <input type="number" class="form-control " id="validationServer08" placeholder="Ward No" required name="ward_no">
                <div class="">
                  {{-- Please provide a valid state. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="number" class="form-control " id="validationServer09" placeholder="Zip" required name="zipcode">
                <div class="">
                  {{-- Please provide a valid zip. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Tole</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Tole" required name="tole">
                <div class="">
                  {{-- Please provide a valid city. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Street</label>
                <input type="text" class="form-control " id="validationServer08" placeholder="Street" required name="street">
                <div class="">
                  {{-- Please provide a valid state. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Latitude</label>
                <input type="text" class="form-control " id="validationServer09" placeholder="Latitude" required name="latitude">
                <div class="">
                  {{-- Please provide a valid zip. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Longitude</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Longitude" required name="longitude">
                <div class="">
                  {{-- Please provide a valid city. --}}
                </div>
              </div>
            </div>

            <h2 class="mt-3 mb-3">Seller Details</h2>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer03">Full Name</label>
                <input type="text" class="form-control " id="validationServer07" placeholder="Full Name" required name="fullname">
                <div class="">
                  {{-- Please provide a valid city. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer04">Phone Number</label>
                <input type="number"class="form-control " id="validationServer08" placeholder="Phone Number" required name="phn_number">
                <div class="">
                  {{-- Please provide a valid state. --}}
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer05">Email</label>
                <input type="email" class="form-control " id="validationServer09" placeholder="Email" required name="email">
                <div class="">
                  {{-- Please provide a valid zip. --}}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" required >
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div class="">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </section> 

  <script>
    @if (Session::has('success'))
      toastr.success("{{session('success')}}")
    @endif
  </script>
@endsection


