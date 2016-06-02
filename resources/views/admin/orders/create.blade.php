@extends('app')

@section('htmlheader_title')
    Create Orders
@endsection

@section('contentheader_title')
    Create Orders
@endsection

@section('main-content')
<section class="content">
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Order</h3>
            </div><!-- /.box-header -->

			@include('admin.partials.messages')

            <form action="{{ url('/admin/orders') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="box-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="customer_id">Customer</label>
                            <input type="text" name="customer_id" class="form-control" placeholder="Enter DNI to search">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="item">Item</label>
                            <input type="text" name="item" class="form-control" placeholder="Enter Item to search">
                        </div>
                    </div>

                    <div class="col-md-12">
                        Tabla aquí.
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="item">Fecha</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="item">Total</label>
                                <input type="number" name="total" class="form-control" min="0" placeholder="Total" readonly="">
                            </div>
                        </div>                        
                    </div>
                    
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
			
		</div>
	</div>
</section>
@endsection
