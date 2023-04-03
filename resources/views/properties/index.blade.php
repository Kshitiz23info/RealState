@extends('frontend.layouts.main')
@section('main-container')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-20">
                    <div class="title-single-box mb-5">
                        <h1 class="title-single">All Properties</h1>
                    </div>

                    <div class="row">
                        @foreach ($listings as $item)
                            <div class="col-md-4 my-2">
                                <div class="card-box-a card-shadow">
                                    <h4><span class="badge text-bg-warning text-white text-lg" style="position: absolute;">For {{ ucfirst(trans($item->type))}}</span></h4>
                                    <div class="img-box-a" style="height: 53vh">
                                        @if($item->photo_url)
                                            <img src="{{$item->photo_url[0]}}"
                                                 alt="Property Image"
                                                 class="img-a img-fluid thumbnail" style="object-fit: cover">
                                        @else
                                            <img src="{{asset('img/download.png')}}" alt="Property Image"
                                                 class="img-a img-fluid thumbnail" style="object-fit: cover">
                                        @endif
                                    </div>
                                    <div class="card-overlay">
                                        <div class="card-overlay-a-content">
                                            <div class="card-header-a">
                                                <h4 class="card-title-a text-sm">
                                                    <a href="{{route('listings.show', $item->id)}}">{{$item->title}}
                                                        <br/> </a>
                                                </h4>
                                            </div>
                                            <div class="card-body-a">
                                                <div class="price-box d-flex">
                                                    <span class="price-a">Price | Rs {{$item->price}}</span>
                                                </div>
                                                <a href="{{route('listings.show', $item->id)}}" class="link-a mr-2">Click
                                                    here to
                                                    view
                                                    <span class="ion-ios-arrow-forward"></span>
                                                </a>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
