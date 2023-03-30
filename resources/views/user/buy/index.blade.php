@extends('frontend.layouts.header')
@push('styles')
    <style>
        /* enable absolute positioning */
        .inner-addon {
            position: relative;
        }

        /* style icon */
        .inner-addon .fas {
            position: absolute;
            padding: 10px;
            pointer-events: none;
        }

        /* align icon */
        .left-addon .fas  { left:  0px;}
        .right-addon .fas { right: 0px;}

        /* add padding  */
        .left-addon input  { padding-left:  30px; }
        .right-addon input { padding-right: 30px; }
    </style>
@endpush

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single" style="padding: 4rem;">

    </section>
    <div>
        <div class="container-fluid bg-light m-0 py-2" >
            <div class="row">
                <form class="rent-filter">
                    <div class="form-group">
                        <div class="input-group inner-addon right-addon">
                            <input type="text" class="form-control" placeholder="Location" >
                            <span><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control custom-select"  id="type">
                            <option value="">Type</option>
                            <option value="all">All</option>
                            <option value="Home">House</option>
                            <option value="Land">Land</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control custom-select"  id="sale">
                            <option value="sale">For Sale</option>
                            <option value="rent">For Rent</option>
                        </select>
                    </div>

                    <div class="form-group">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" >
                        <div id="map" style="height:70vh">
                            <div id="map" style="height: 280px;"></div>
                            <script>
                                // Create map instance
                                var map = L.map('map');
                                map.setView([28.2096, 83.9856], 14);
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                                    maxZoom: 18,
                                }).addTo(map);
                                L.marker([28.2096, 83.9856]).addTo(map);
                                L.marker([28.2088043126984, 83.98594269607614]).addTo(map);
                                L.marker([28.217122739703402, 83.99007797197557]).addTo(map);


                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="overflow: hidden">
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
                                                            <a href="{{route($route.'show', $item->id)}}">{{$item->title}}
                                                                <br/> </a>
                                                        </h2>
                                                    </div>
                                                    <div class="card-body-a">
                                                        <div class="price-box d-flex">
                                                            <span class="price-a">Price | Rs {{$item->price}}</span>
                                                        </div>
                                                        <a href="{{route($route.'show', $item->id)}}" class="link-a mr-2">Click here to
                                                            view
                                                            <span class="ion-ios-arrow-forward"></span>
                                                        </a>
                                                        <div class="d-inline-flex float-right">
                                                            <a href="{{ route($route.'edit',$item->id) }}" type="submit" class="btn btn-primary mr-2"><i class="fas fa-pencil-alt fa-md"></i></a>
                                                            <form class="d-inline" action="{{ route($route.'destroy',$item->id) }}"
                                                                  method="POST" onclick="return confirm('Are you sure?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button href="{{route($route.'destroy',$item->id)}}" type="submit" class="btn btn-danger"><i class="fas fa-trash fa-md"></i></button>
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
                </div>
            </div>
        </div>
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
