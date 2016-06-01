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
        @foreach ($orders as $order)
        <tr data-id="{{ $order->id }}">
            <td>{{ $order->id }}</td>
            <td>{{ $order->firstname }}</td>
            <td>{{ $order->lastname }}</td>
            <td>{{ $order->dni }}</td>
            <td>{{ $order->email }}</td>
            <td>
                <a href="{{ url('admin/orders', $order) }}">Edit</a>
                <a href="" class="btn-delete" data-id="{{ $order->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
    <tbody>
</table>
