@extends('layouts.app')
@section('content')    
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Register an Account</h5>
              <form class="form-register" method="POST" action="/accounts" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <div class="form-label-group">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Your Name" required autofocus>
                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    <label for="name">Account Name</label>
                  </div>
    
                  <div class="form-label-group">
                    <input type="number" id="balance" class="form-control" name="balance" placeholder="Your Deposit" required>
                    <label for="balance">Deposit Amount</label>
                  </div>  
                  
                  <button class="btn btn-lg btn-register btn-block text-uppercase" type="submit">Register</button>
                  <hr class="my-4">
                  <button class="btn btn-lg btn-register btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Already have an account ?</button>                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
@endsection
