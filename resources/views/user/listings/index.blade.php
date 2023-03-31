@extends('frontend.layouts.main')
@section('main-container')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Rent Property Listings</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="success" style="margin: 0 200px;" >
        @if (session('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="grid-option">
                    <form class="rent-filter">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" aria-label="Username" >
                        </div>

                        <div class="form-group">
                            <label for="bedrooms"></label>
                            <select class="form-control custom-select"  id="bath">
                                <option>Type</option>
                                <option>All</option>
                                <option>Room</option>
                                <option>Flat</option>
                                <option>House</option>
                                <option>Land</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="bedrooms"></label>
                            <select class="form-control custom-select"  id="price">
                                <option>Price</option>
                                <option>All</option>
                                <option>1,00,000-2,00,000</option>
                                <option>2,00,000-3,00,000</option>
                                <option>3,00,000-4,00,000</option>
                            </select>
                        </div>
                        <button class="searchbtn">Save Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="add">
        <h4><a href="{{route('listings.create')}}" id="addProperty"><i class="fas fa-plus-circle"></i>
                Add a property</a></h4>
    </div>

    {{--      <div class="row">--}}
    {{--          @foreach ($rentdetail as $rentdetail)--}}
    {{--              <div class="card mr-5 mb-5" style="width: 18rem">--}}
    {{--                  <div class="img">--}}
    {{--                      <img class="panel-img" src="{{ asset('storage/images/'.$rentdetail ->img_link) }}" alt="Rent Property Image">--}}
    {{--                  </div>--}}
    {{--                  <div class="card-body">--}}
    {{--                      <h5 class="card-title">Area : {{ $rentdetail->area }} m<sup>2</sup></h5>--}}
    {{--                      <h5 class="card-title">Price : Rs {{ $rentdetail->price }}</h5>--}}
    {{--                      --}}{{-- <p class="card-text"> Price :{{ $rentdetail->price }}</p> --}}
    {{--                      <a href="{{ url('rent-edit',$rentdetail->id) }}" type="submit" class="btn btn-primary">Edit</a>--}}
    {{--                      <a href="{{url('rentdelete',$rentdetail->id)}}" type="submit" class="btn btn-danger ml-5">Delete</a>--}}
    {{--                  </div>--}}


    {{--              </div>--}}
    {{--          @endforeach--}}
    {{--      </div>--}}
    {{--  </div>--}}
    <!--/ Intro Single End /-->

    <!--/ property Grid Star /-->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
{{--                    {{dd($listings['3']->getMedia('listings'))}}--}}
                    @foreach ($listings ?? [] as $item)
                        <div class="col-md-4">
                            <div class="card-box-a card-shadow">
                                <div class="img-box-a">
                                    @if($item->getMedia('listings')->isNotEmpty())
                                        <img src="{{$item->getMedia('listings')[0]->getFullUrl()}}" alt="Property Image"
                                             class="img-a img-fluid thumbnail" style="object-fit: cover">
                                    @else
                                        <img src="{{asset('img/download.png')}}" alt="Property Image"
                                             class="img-a img-fluid thumbnail" style="object-fit: cover">
                                    @endif
                                </div>
                                <div class="card-overlay">
                                    <div class="card-overlay-a-content">
                                        <div class="card-header-a">
                                            <h2 class="card-title-a">
                                                <a href="{{route('listings.show', $item->id)}}">{{$item->title}}
                                                    <br/> </a>
                                            </h2>
                                        </div>
                                        <div class="card-body-a">
                                            <div class="price-box d-flex">
                                                <span class="price-a">Price | Rs {{$item->price}}</span>
                                            </div>
                                            <a href="{{route('listings.show', $item->id)}}" class="link-a mr-2">Click here to
                                                view
                                                <span class="ion-ios-arrow-forward"></span>
                                            </a>
                                            <div class="d-inline-flex float-right">
                                                <form class="d-inline" action="{{ route('contact.index') }}"
                                                      method="GET">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                    <input type="hidden" name="property_id" value="{{$item->id}}">
                                                    <button href="{{ route('contact.index') }}" type="submit" class="btn btn-success contact">Contact Agent</button>
                                                </form>
                                            </div>

                                        </div>
                                        <div class="card-footer-a">
                                            <ul class="card-info d-flex justify-content-around">
                                                <li>
                                                    <h4 class="card-info-title">Area</h4>
                                                    {{json_decode($item->features)->area}}
                                                    <span> m
                        <sup>2</sup>
                      </span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Beds</h4>
                                                    <span>{{json_decode($item->features)->bedroom}}</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Baths</h4>
                                                    <span>{{json_decode($item->features)->bathroom}}</span>
                                                </li>
                                                <li>
                                                    <h4 class="card-info-title">Parking</h4>
                                                    <span>{{json_decode($item->features)->parking}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).on('mouseover', '#addProperty', function () {
            $(this).find('i').addClass('fa-bounce');
        })
        $(document).on('mouseout', '#addProperty', function () {
            $(this).find('i').removeClass('fa-bounce');
        })
    </script>
@endpush
