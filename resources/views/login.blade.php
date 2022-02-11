@extends('master')
@section('content')

<div class="container  custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form class="form-horizontal" action="login" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
                  </div>
                </div>
               
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection
