@extends('app')

@section('htmlheader_title')
    Admin Orders
@endsection

@section('contentheader_title')
    Admin Orders
@endsection

@section('main-content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
                    <h3 class="box-title">Orders</h3>
                </div><!-- /.box-header -->

				@if (Session::has('message'))

				    <p class="alert alert-success">{{ Session::get('message') }}</p>

				@endif

				<div class="box-body">
                    {{--{!! Form::model(Request::all(), ['url' => 'admin/orders/index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                      <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario']) !!}
                        {!! Form::select('type', config('options.types'), null, ['class' => 'form-control']) !!}
                      </div>
                      <button type="submit" class="btn btn-default">Buscar</button>
                    {!! Form::close() !!}
                    --}}
				    <p>
				        <a class="btn btn-info" href="{{ url('admin/orders/create') }}" role="button">
				            New Order
				        </a>
				    </p>
				    <!-- <p>Hay {{-- $orders->total() --}} usuarios</p> -->
                    
                    @include('admin.orders.partials.table')
                    {{--
                    {!! $orders->appends(Request::only(['name', 'type']))->render() !!}
                    --}}
				</div>
			</div>
		</div>
	</div>
</section>

<form action="{{ url('/admin/orders') }}" method="post" id="form-delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="delete">
</form>

@endsection

@section('scripts')
<script>
$(document).ready(function () {

    $('.btn-delete').click(function (e) {

        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        console.log(form);
        var uri = form.attr('action');
        console.log(uri);
        var url = form.attr('action')+'/'+id;
        console.log(url);
        var data = form.serialize();

        row.fadeOut();

        $.post(url, data, function (result) {
            alert(result.message);
        }).fail(function () {
            alert('El usuario no fue eliminado');
            row.show();
        });
    });

    function deleteOrder(element) {
        console.log("Hola");
        var row = $(this).parents('tr');
        var id = row.data('id');
        console.log(id);
        var form = $('#form-delete');
        var url = form.attr('action').replace(':ORDER_ID', id);
        var data = form.serialize();

        row.fadeOut();

        $.post(url, data, function (result) {
            alert(result.message);
        }).fail(function () {
            alert('El usuario no fue eliminado');
            row.show();
        });
    }
});


</script>
@endsection