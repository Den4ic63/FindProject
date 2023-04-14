@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $office->name }}</h1>
        <h2>Добавить сотрудника</h2>
        <form action="{{ route('office.users.store', $office->id) }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="user_id">Сотрудники</label>
                <select name="user_id[]" id="user_id" class="form-control" multiple>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Добавить сотрудника</button>
        </form>
        <h2>Удалить сотрудника</h2>
        <form action="{{ route('office.users.destroy', $office->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="user_id">Сотрудники</label>
                <select name="user_id[]" id="user_id" class="form-control" multiple>
                    @foreach ($office->users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Удалить сотрудника</button>
        </form>
    </div>

@endsection
