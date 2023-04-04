@extends('frontend.layouts.main')
@push('styles')
    <style>
        a {
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
                        <h1 class="title-single">Your Property Listings on Sale</h1>
                    </div>
                    <div class="add">
                        <h4><a href="{{route($route.'create')}}"><i class="fa-solid fa-circle-plus addIcon"></i>
                                Add a property</a></h4>
                    </div>
                    <div class="row">
                        @if($listings->isNotEmpty())
                        @foreach ($listings as $item)
                            <div class="col-md-4 my-2">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a" style="height: 53vh">
                                        @if($item->getMedia('listings')->isNotEmpty())
                                            <img src="{{$item->getMedia('listings')[0]->getFullUrl()}}"
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
                                                    <a href="{{route($route.'show', $item->id)}}">{{$item->title}}
                                                        <br/> </a>
                                                </h4>
                                            </div>
                                            <div class="card-body-a">
                                                <div class="price-box d-flex">
                                                    <span class="price-a">Price | Rs {{$item->price}}</span>
                                                </div>
                                                <a href="{{route($route.'show', $item->id)}}" class="link-a mr-2">Click
                                                    here
                                                    to
                                                    view
                                                    <span class="ion-ios-arrow-forward"></span>
                                                </a>
                                                <div class="d-inline-flex float-right">
                                                    <a href="{{ route($route.'edit',$item->id) }}" type="submit"
                                                       class="btn btn-primary mr-2"><i
                                                            class="fas fa-pencil-alt fa-md"></i></a>
                                                    <form class="d-inline"
                                                          action="{{ route($route.'destroy',$item->id) }}"
                                                          method="POST" onclick="return confirm('Are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button href="{{route($route.'destroy',$item->id)}}"
                                                                type="submit"
                                                                class="btn btn-danger"><i
                                                                class="fas fa-trash fa-md"></i>
                                                        </button>
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
                        @endforeach
                        @else
                        <div class="alert alert-info">
                            <h5>There is no any property on sale.</h5>
                            <p>To sell your property, simply tap the "Add a property" button.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).on('mouseover', '.add', function () {
            $('.addIcon').addClass('fa-bounce');
        })
        $(document).on('mouseout', '.add', function () {
            $('.addIcon').removeClass('fa-bounce');
        })
    </script>
@endpush
