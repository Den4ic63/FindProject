@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создание проекта</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('office.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название офиса</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Название">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country" class="col-md-4 col-form-label text-md-end">Страна</label>
                                <div class="col-md-6">
                                    <input id="country" type="text" name="country" class="form-control" placeholder="Страна">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">Город</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" name="city" class="form-control" placeholder="город">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="office_type" class="col-md-4 col-form-label text-md-end">Выберите тип Офиса</label>
                                <div class="col-md-6">
                                    <select name="office_type" class="form-control">
                                        <option value="Обычный">Обычный</option>
                                        <option value="Главный">Главный</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Создать офис
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
