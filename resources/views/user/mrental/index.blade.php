@extends('frontend.layouts.main')
@push('styles')
    <style>
        a
        {
            text-decoration: none;
        }
    </style>
    @endpush
@section('main-container')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-20">
                    <div class="title-single-box mb-5">
                        <h1 class="title-single">Rental Property Listings</h1>
                    </div>
                    <div class="add">
                        <h4><a href="{{route($route.'create')}}" ><img src="frontend\icons\addicon.png" alt="" style="width: 22px; height: 22px; hover">
                                Add a property</a></h4>
                    </div>
                    <div class="row">
                        @foreach ($listings as $item)
                            <div class="col-md-4 my-2">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a" style="height: 53vh">
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
                                                <h4 class="card-title-a text-sm">
                                                    <a href="{{route($route.'show', $item->id)}}">{{$item->title}}
                                                        <br/> </a>
                                                </h4>
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-md-3">--}}
{{--                                <div class="card h-100 m-0 p-0">--}}
{{--                                    <div class="img">--}}
{{--                                        <img class="panel-img" src="{{$rentdetail->getMedia('listings')[0]->getFullUrl()}}" alt="Rent Property Image" style="width: 100%; height: 30vh; object-fit: cover">--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body mb-0 pb-0">--}}
{{--                                        <p class="text-sm font-weight-bold m-0 p-0">Rs. {{ $rentdetail->price }}</p>--}}
{{--                                        <p class="text-xs m-0 p-0"><span class="font-weight-bold"> {{ json_decode($rentdetail->features)->bedroom }}</span> beds | <span class="font-weight-bold">{{ json_decode($rentdetail->features)->bathroom }}</span>baths | <span class="font-weight-bold">{{ json_decode($rentdetail->features)->area }}</span>m<sup>2</sup> </p>--}}
{{--                                        <p class="text-xs m-0 p-0">{{ explode(',', $rentdetail->location)[0] . ','. explode(',', $rentdetail->location)[1]. ','. explode(',', $rentdetail->location)[3]}} </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="footer mx-3 mb-3 mt-0">--}}
{{--                                        <div class="d-inline-flex float-left text-xs my-3">--}}
{{--                                            <a href="{{route($route.'show', $rentdetail->id)}}">Click here to view ></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-inline-flex float-right">--}}
{{--                                            <a href="{{route($route.'edit', $rentdetail->id)}}" class="btn btn-primary mr-2"><i class="fas fa-fw fa-pencil-alt"></i></a>--}}
{{--                                            <form class="d-inline" action="{{ route($route.'destroy',$rentdetail->id) }}"--}}
{{--                                                  method="POST" onclick="return confirm('Are you sure?')">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button href="{{route($route.'destroy',$rentdetail->id)}}" type="submit" class="btn btn-danger"><i class="fas fa-trash fa-md"></i></button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}



{{--                                </div>--}}
{{--                            </div>--}}
                        @endforeach
                    </div>
                </div>
    </section>
@endsection
