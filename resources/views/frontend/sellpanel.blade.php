@extends('frontend.layouts.main')
@section('main-container')

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-20">
            <div class="title-single-box mb-5">
                <h1 class="title-single">Sell Property Listings</h1>
            </div>
            <div class="add">
              <h4><a href="/sell" ><img src="frontend\icons\addicon.png" alt="" style="width: 22px; height: 22px; ">
                Add a property</a></h4>
            </div>
            <div class="row">
              @foreach ($propertydetail as $propertydetail)
            <div class="card mr-5 mb-5" style="width: 18rem">
              <div class="img">
                <img class="panel-img" src="{{ asset('storage/images/'.$propertydetail ->img_link) }}" alt="Property Image">
              </div>
                <div class="card-body">
                  <h5 class="card-title">Area : {{ $propertydetail->area }} m<sup>2</sup></h5>
                  <h5 class="card-title">Price : Rs {{ $propertydetail->price }}</h5>
                  {{-- <p class="card-text"> Price :{{ $propertydetail->price }}</p> --}}
                  <a href="{{ url('property-edit',$propertydetail->id) }}" type="submit" class="btn btn-primary">Edit</a> 
                  <a href="{{url('property-delete',$propertydetail->id)}}" type="submit" class="btn btn-danger ml-5">Delete</a> 
                </div>
              </div>
              @endforeach
            </div>
        </div>
  </section> 
@endsection




















