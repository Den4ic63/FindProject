@extends('layouts.app')

@section('content')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-1">

            <form id="search-form" action="{{ route('projects.search') }}">
                <input type="text" name="query" placeholder="Найти..." class="form-control">
            </form>

        </div>

        <div class="mt-1" id="search-results"></div>

        </div>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $('#search-form').on('keyup', function (event) {
                event.preventDefault();

                var query = $(this).find('input[name="query"]').val();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'GET',
                    data: { query: query },
                    success: function (response) {
                        $('#search-results').html(response);
                    },
                    error: function () {
                        console.log('Error');
                    }
                });
            });
        });
    </script>
@endsection
