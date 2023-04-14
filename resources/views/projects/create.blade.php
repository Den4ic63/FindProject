@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создание проекта</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('project.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название проекта</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Описание</label>

                                <div class="col-md-6">
                                    <textarea id="description" name="description" type="text" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="office_id" class="col-md-4 col-form-label text-md-end">Выберите офис:</label>
                                <div class="col-md-6">
                                    <select name="office" class="form-control">
                                        @foreach ($offices as $office)
                                            <option value="{{ $office->id }}">{{ $office->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Создать проект
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
