{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

@extends('layouts.app')
<style>
    main{
    /* padding-top: 0 !important; */
    margin-bottom: 0px !important;
    background: silver;
}
/* .main-footer {
    display: none;
} */
</style>
@section('content')

    <div class="container-fluid">
    <div class="row">
        <div class="col-3">

        </div>

        <div class="col-6">
            <div class="container-withdraw" style="background: white;padding:20px">
                <h4 style="text-align: center;">Withdrawal</h4>
                <hr style="width: 75%; margin:auto"><br>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    {{-- <div class="col-12">
                        <label for="inputAddress" class="form-label">ID Number</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div> --}}
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">School ID</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Enter your valid school ID">
                    </div>
                    <div class="col-md-12">
                        <label for="inputAccType" class="form-label">Account Type</label>
                        <select id="inputAccType" class="form-select">
                        <option selected>Choose...</option>
                        <option>Mobile Money</option>
                        <option>Bank</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAccNumb" class="form-label">Account Number</label>
                        <input type="number" class="form-control" id="inputAccNumb">
                    </div>
                    <div class="col-md-12">
                        <label for="inputIDType" class="form-label">ID Type</label>
                        <select id="inputIDType" class="form-select">
                        <option selected>Choose...</option>
                        <option>Voter's ID</option>
                        <option>Driver's License</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputIDNumb" class="form-label">ID Number</label>
                        <input type="number" class="form-control" id="inputIDNumb" placeholder="Enter a valid ID number">
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Withdraw</button>
                    </div>

                    <div class="col-12">
                    <hr style="width: 75%; margin:auto"><br>
                        <h5>Note:</h5>
                        <ul>
                            <li>1. Maximum per transaction is GHC 10,000.00</li>
                            <li>2. Minimum per transaction is GHC 1.00</li>
                            <li>3. Withdrawal is free, no fee transaction  needed</li>
                        </ul>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-3">

        </div>
    </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Withdrawal Request Made!</p><br>
        <i class="fa fa-check fa-5x" aria-hidden="true"></i>

      </div>
      <div class="modal-footer">
          <div class="col text-center">
       <form action="{{route('campaigns.index')}}" method="get">
        <button type="submit" class="btn btn-secondary text-center">Okay</a>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
