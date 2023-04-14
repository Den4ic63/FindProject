@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="row justify-content-center">Offices</h1>

                @foreach ($offices as $office)
                    <div class="col-md-8">
                        <div class="card mt-1">
                            <div class="card-header">
                                {{ $office->name }}
                            </div>
                            <div class="card-body">
                                <a class="btn btn-info" href="{{ route('office.show', $office->id) }}">Добавить сотрудников в офис</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="d-flex justify-content-center mt-1">
            {{ $offices->links() }}
        </div>
    </div>

@endsection
