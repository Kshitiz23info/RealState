@extends('frontend.layouts.main')
@section('main-container')
    <section class="form-container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-20">
                    <h2 class="mb-3">Rent Property Details</h2><br>
                    <form method="POST"  enctype="multipart/form-data" action="{{route($route.'store')}}">
                        @csrf
                        @include('user.sell.form', ['item'=>null])

{{--                        <div class="form-group">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input " type="checkbox" value="" id="invalidCheck3" required >--}}
{{--                                <label class="form-check-label" for="invalidCheck3">--}}
{{--                                    Agree to terms and conditions--}}
{{--                                </label>--}}
{{--                                <div class="">--}}
{{--                                    You must agree before submitting.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!--/ Intro Single End /-->
@endsection
@push('scripts')
    <script>
        $(document).on('click', '#file-upload', function (e) {
            e.preventDefault();
            $('#file-upload-hidden').trigger('click');
        });
        $('#file-upload-hidden').on('change', function () {
            var numFiles = $("#file-upload-hidden")[0].files.length;
            $('.file-section > .file-message').html('');
            $('.file-section').append(`<span class=" bg-light h4 file-message">${numFiles ==1 ? "1 Image": numFiles+" Images"} Uploaded</span>`);
        });

        checkType();
        $(document).on('change', '#type', function () {
            checkType()
        })

        function checkType()
        {
            let val = $('#type').val();
            if(val == "Land")
            {
                $('#bedroomLabel').css('display', 'none');
                $('#bathroomLabel').css('display', 'none');
                $('#no_of_storiesLabel').css('display', 'none');
                $('#livingroomLabel').css('display', 'none');
                $('#kitchenLabel').css('display', 'none');
                $('#road_widthLabel').css('display', 'none');
                $('#parkingLabel').css('display', 'none');
            }
            else{
                $('#bedroomLabel').show();
                $('#bathroomLabel').show();
                $('#no_of_storiesLabel').show();
                $('#livingroomLabel').show();
                $('#kitchenLabel').show();
                $('#road_widthLabel').show();
                $('#parkingLabel').show();
            }
        }
    </script>
@endpush
