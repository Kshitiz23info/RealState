@extends('frontend.layouts.main')
@section('main-container')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                        @if($item->title || $item->location)

                            <div class="title-single-box">
                                <h1 class="title-single">{{$item->Title}}</h1>
                                <h1 class="title-single">{{$item->location ? explode(',', $item->location)[1]:''}}</h1>
                                {{-- <span class="color-text-a">{{$item->city}}</span> --}}
                            </div>
                    @endif

                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{--                {{$item->tole}}--}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        @foreach($item->getMedia('listings') ?? [] as $image)

                            <div class="carousel-item-b text-center">
                                <img src="{{ $image->getFullUrl() }}" alt="Property Image"
                                     style="height: 500px; width:400px; object-fit:cover">
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-5">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico align-self-center ">
                                        <h2>Price: Rs {{$item->price}}</h2>
{{--                                        @if(isset($favorite))--}}
                                        @if(auth()->user())

                                            <div class="favorite">
{{--                                            @if(isset($favorite))--}}
                                            <i class="{{$favorite ? 'fa-solid fa-heart fa-xl favorite' : 'fa-regular fa-heart fa-xl favorite'}}" data-value="{{$item->id}}" style="color: #fa0000;"></i>
{{--                                                @endif--}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Property Details</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>{{$item->location?:'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->type ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->area ?:'N/A':'N/A'}} m
                        <sup>2</sup>
                      </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->bedroom ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->bathroom ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Livingroom:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->livingroom ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Kitchen:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->kitchen ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Parking:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->parking ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Road width:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->road_width ?:'N/A':'N/A'}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Number of storeys:</strong>
                                            <span>{{json_decode($item->features)?json_decode($item->features)->no_of_stories ?:'N/A':'N/A'}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    {{$item->description?:'N/A'}}
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Address</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a">
                                    <li><strong>Location: </strong>{{$item->location?:'N/A'}}</li>
                                    <li><strong>Latitude: </strong>{{$item->latitude?:'N/A'}}</li>
                                    <li><strong>Longitude: </strong>{{$item->longitude?:'N/A'}}</li>
                                </ul>
                            </div>
                            <style>
                                .list {
                                    line-height: 2
                                }
                            </style>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Contact Info</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="color-text-a">
                                <div class="card w-50 my-3" style="height:100% ">
                                    <div class="row">
                                        <div class="col-md-4 pt-4 pl-4">
                                            <img src="{{asset('/img/user.png')}}" alt="Image" width="80%">
                                        </div>
                                        <div class="col-md-8 my-3">
                                            <ul>
                                                <li>{{$item->user->name}}</li>
                                                <li>{{$item->user->phone}}</li>
                                                <li>{{$item->user->email}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="pills-map-tab" data-toggle="pill" href="#pills-map"
                               role="tab" aria-controls="pills-map"
                               aria-selected="false">Ubication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                               aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                               aria-controls="pills-plans"
                               aria-selected="false">Floor Plans</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                            @if($item->getImage('video'))
                                <iframe src="{{$item->getImage('video')}}" width="100%" height="460" frameborder="0"
                                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade active show" id="pills-map" role="tabpanel"
                             aria-labelledby="pills-map-tab">
                            <div id="map" style="height: 280px;"></div>
                            <script>

                                var latitude = "{{$item->latitude}}";
                                var longitude = "{{$item->longitude}}";
                                let proplocation = "{{explode(',', $item->location)[0]}}";
                                var map = L.map('map');
                                map.setView([latitude, longitude], 14);
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
                                    maxZoom: 18,
                                }).addTo(map);
                                L.marker([latitude, longitude]).addTo(map)
                                    .bindPopup(proplocation)
                                    .openPopup();
                            </script>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Contact Via Email</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 w-100">
                        <div class="row">
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$item->id}}" name="property_id">
                                <input type="hidden" value="{{$item->user_id}}" name="property_owner">
                                <div class="form-group row mb-4">
                                    <div class="contact-form_input_wrapper col-12 col-md-6 mb-4 mb-md-0">
                                        <label for="name" class="input_label">Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" autocomplete="off"
                                               class=" contact-form_input w-100" placeholder="Sonam Hitang"
                                               value="{{isset($user)?$user->name:null}}" required/>
                                    </div>
                                    <div class="contact-form_input_wrapper col-12 col-md-6">
                                        <label for="email" class="input_label">Email <span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" autocomplete="off"
                                               class=" contact-form_input w-100" placeholder="sonam@gmail.com"
                                               value="{{isset($user)?$user->email:null}}" required/>
                                    </div>

                                </div>

                                <div class="contact-form_input_wrapper mb-4">
                                    <label for="phone" class="input_label">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="number" id="phone" name="phone" autocomplete="off"
                                           class=" contact-form_input w-100" placeholder="9806657898"
                                           value="{{isset($user)?$user->phone:null}}" required/>
                                </div>
                                <div class="form-group row mb-4">
                                    <div class="contact-form_input_wrapper  col-lg-12 col-md-7 mb-4 mb-md-0">
                                        <label for="message" class="input_label">Message</label>
                                        <textarea id="message" autocomplete="off" name="message"
                                                  class=" contact-form_textarea w-100" placeholder="I would like to...">

                                    </textarea>
                                    </div>
                                </div>


                                <button class="btn send-button w-100 p-3 mt-md-4" id="submit_btn" type="submit">
                                    Send
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#submit_btn').on('click', function () {
                $('#form').submit();
            });
        });
        $(document).on('click', '.favorite', function(){
            $.ajax({
                url: "{{route('favorite.store')}}",
                type: 'GET',
                data: {
                    'favorite' : $(this).data('value')
                },
                success : function (data) {
                    $(document).find('.favorite').each(function () {
                        if($(this).data('value') == data.listing_id)
                        {
                            if($(this).hasClass('fa-solid'))
                            {
                                $(this).removeClass('fa-solid').addClass('fa-regular');
                            }
                            else if($(this).hasClass('fa-regular'))
                            {
                                $(this).addClass('fa-solid').removeClass('fa-regular');

                            }
                        }
                    })
                    // $(document).find('.favorite').load(location.href+" .favorite>*","");
                }
            })
            // $(this).prev().submit();
        })
    </script>
@endpush
