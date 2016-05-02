@extends('app')

@section('htmlheader_title')
    Users
@endsection

@section('main-content')
<section class="content">
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create User</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('/admin/users') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter lastname">
                        </div>
                        <div class="form-group">
                            <label for="dni">Dni</label>
                            <input type="text" name="dni" class="form-control" placeholder="Enter dni">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

