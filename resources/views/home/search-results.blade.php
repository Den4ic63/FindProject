
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
                        <th></th>
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
                            @if (!$project->users->contains(Auth::user()))
                                <td>
                                    <form id="join-form" action="{{ route('project.addUser', $project) }}" method="POST">
                                        @csrf
                                        <button id="join-project-btn" type="submit" class="btn btn-primary">Присоедениться</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <form id="leave-form" action="{{ route('project.deleteUser', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id="leave-project-btn" type="submit" class="btn btn-primary">Выйти</button>
                                    </form>
                                </td>
                            @endif
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
<script>
    $(function() {
        // отправка запроса на присоединение к проекту
        $(document).on('submit', '#join-project-form', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: form.serialize(),
                success: function(response) {
                    // изменение состояния кнопки
                    $('#join-project-btn').text('Выйти').attr('id', 'leave-project-btn');
                    form.attr('action', "{{ route('project.deleteUser', $project) }}");
                }
            });
        });

        // отправка запроса на выход из проекта
        $(document).on('submit', '#leave-project-form', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: 'DELETE',
                data: form.serialize(),
                success: function(response) {
                    // изменение состояния кнопки
                    $('#leave-project-btn').text('Присоединиться').attr('id', 'join-project-btn');
                    form.attr('action', "{{ route('project.addUser', $project) }}");
                }
            });
        });
    });
</script>

