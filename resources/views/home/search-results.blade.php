
@if ($projects->count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Доступные проекты</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>ID компании</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->office_id }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-1">
                <h1 >Ничего не найдено((</h1>
            </div>
        </div>
    </div>
    </div>

@endif

