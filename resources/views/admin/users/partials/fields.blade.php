<div class="col-md-6">
    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname" value="{{ old('firstname') }}">
    </div>
    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter lastname" value="{{ old('lastname') }}">
    </div>
    <div class="form-group">
        <label for="dni">Dni</label>
        <input type="text" name="dni" class="form-control" placeholder="Enter dni"
        value="{{ old('dni') }}">
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
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