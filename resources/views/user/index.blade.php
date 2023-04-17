@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="row justify-content-center">Сотрудники</h1>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <form method="POST" action="{{ route('user.update', $user) }}">
                                @csrf
                                @method('PUT')
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                    </div>

                                </td>
                                <td>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ $role->id === $user->role_id ? 'selected' : '' }}>{{ $role->role_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                                <td >
                                    <button type="submit" class="btn btn-success justify-content-center">Update</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-1">
            {{ $users->links() }}
        </div>
    </div>

@endsection
