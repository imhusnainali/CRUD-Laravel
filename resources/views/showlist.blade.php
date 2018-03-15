@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Records<i class="fa fa-plus" style="float: right; font-size:30px; cursor: pointer" data-toggle="modal" data-target="#myModal"></i></div>

                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Product Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="pname">Product Name:</label>
            <input type="text" class="form-control" id="pname">
          </div>
          <div class="form-group">
            <label for="pqty">Product Quantity:</label>
            <input type="number" class="form-control" id="pqty">
          </div>

          <div class="form-group">
            <label for="pqty">Product Description:</label>
             <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
