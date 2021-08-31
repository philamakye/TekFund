<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

@extends('layouts.app')
<style>
    main{
    /* padding-top: 0 !important; */
    margin-bottom: 0px !important;
    background: silver;
}
.main-footer {
    display: none;
}
</style>
@section('content')
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-3" style="">
        
        </div>
        
        <div class="col-6">
            <div class="container-withdraw" style="background: white;padding:20px">
                <h4 style="text-align: center;">Withdraw</h4>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Withdraw</button>
                    </div>
                    
                    <div class="col-12">
                    <hr style="width: 75%; margin:auto"><br>
                        <h5>Note:</h5>
                        <ul>
                            <li>Yes</li>
                            <li>No</li>
                            <li>No</li>
                        </ul>
                    </div>
                </form>
                
            </div>
        </div>

        <div class="col-3" style="">
    
        </div>
    </div>
    </div>
@endsection
