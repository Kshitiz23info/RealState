@extends('frontend.layouts.main')
@section('main-container')

  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-20">
            <div class="title-single-box mb-5">
                <h1 class="title-single">Rental Property Listings</h1>
            </div>
            <div class="add">
              <h4><a href="/listrental" ><img src="frontend\icons\addicon.png" alt="" style="width: 22px; height: 22px; hover">
                Add a property</a></h4>
            </div>
            <div class="row">
              @foreach ($rentdetail as $rentdetail)
            <div class="card mr-5 mb-5" style="width: 18rem">
              <div class="img">
                <img class="panel-img" src="{{ asset('storage/images/'.$rentdetail ->img_link) }}" alt="Rent Property Image">
              </div>
                <div class="card-body">
                  <h5 class="card-title">Area : {{ $rentdetail->area }} m<sup>2</sup></h5>
                  <h5 class="card-title">Price : Rs {{ $rentdetail->price }}</h5>
                  {{-- <p class="card-text"> Price :{{ $rentdetail->price }}</p> --}}
                  <a href="{{ url('rent-edit',$rentdetail->id) }}" type="submit" class="btn btn-primary">Edit</a> 
                  <a href="{{url('rentdelete',$rentdetail->id)}}" type="submit" class="btn btn-danger ml-5">Delete</a> 
                </div>


              </div>
              @endforeach
            </div>
        </div>
  </section> 
@endsection