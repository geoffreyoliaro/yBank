@extends('layouts.app')
@section('content')
    {{-- <div class="col-12 text-center">
        <h1 class="font-weight-light">The yBank</h1>
        <p class="lead">The young Bucks bank</p>
    </div>     --}}
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-register my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Register an Account</h5>
                <form class="form-register">
                  <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="Your Name" required autofocus>
                    <label for="inputName">Account Name</label>
                  </div>
    
                  <div class="form-label-group">
                    <input type="number" id="inputBalance" class="form-control" placeholder="Your Deposit" required>
                    <label for="inputBalance">Deposit Amount</label>
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
