@extends('templates.edit')
@section('form_content')
    @include('user.listings.form')
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
        $(document).on('click', '.deleteFile', function (e) {
            e.preventDefault();
            let del = confirm('Are You Sure?');
            if (del) {
                model_id = $(this).attr('data-model-id');
                dataId = $(this).attr('data-id');
                parentDiv = $(this).parents('.file-row');

                // console.log(model_id, dataId, parentDiv);

                if (model_id && dataId) {
                    $.ajax({
                        type: 'GET',
                        url: "{{route('admin.listings.image.delete')}}",
                        data: {
                            id: dataId,
                        },
                        error: function (xhr) {
                            showFailedMessage();
                        }
                    }).done(function (response) {
                        if (response.status) {
                            showSuccessMessage(response.message);
                            $(parentDiv).remove();
                        } else {
                            showFailedMessage();
                        }
                    })
                } else {
                    showFailedMessage();
                }
            }
        });
        function showSuccessMessage(message) {
            $('#message').append(`<div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            ${message}
            </div>`)
        }

        function showFailedMessage(error_message) {
            $('#message').append(`<div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            ${message}
            </div>`)
        }
    </script>
    @endpush
