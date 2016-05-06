@extends('app')

@section('htmlheader_title')
    Edit User
@endsection

@section('contentheader_title')
    Edit User
@endsection

@section('main-content')
<section class="content">
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit user: {{ $user->firstname }}</h3>
            </div><!-- /.box-header -->

            @include('admin.partials.messages')

            

                <div class="box-body">
                    <form action="{{ url('/admin/users', $user->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter firstname" value="{{ $user->firstname }}">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter lastname" value="{{ $user->lastname }}">
                            </div>
                            <div class="form-group">
                                <label for="dni">Dni</label>
                                <input type="text" name="dni" class="form-control" placeholder="Enter dni"
                                value="{{ $user->dni }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $user->email }}">
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
                </div>

                <div class="box-footer">
                    
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    <form action="{{ url('/admin/users', $user->id) }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">

                        <button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger">Delete user</button>
                    </form>
                </div>
            

            {{--@include('admin.users.partials.delete')--}}

            
			
		</div>
	</div>
</section>
@endsection
