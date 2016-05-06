<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->dni }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ url('admin/users', $user) }}">Edit</a>
                <a href="#!" class="btn-delete">Delete</a>
            </td>
        </tr>
        @endforeach
    <tbody>
</table>
