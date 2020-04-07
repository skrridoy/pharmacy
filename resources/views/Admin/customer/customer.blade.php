@extends('layouts.app')
@section('title', 'Customer | Pharmacy')
@section('content')
<!DOCTYPE html>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer</h1>
          </div>
          <div class="col-sm-6">
            <button type="button" style="margin-left: 380px;" class="btn btn-rounded btn-primary mb-2 mr-2" id="add">Add Customer</button>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Customer List</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Customer Address</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($customer as $key => $value)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->customer_name }}</td>
                    <td>{{ $value->customer_phone }}</td>
                    <td>{{ $value->customer_address }}</td>
                    <td>
                      @if($value->customer_status=='Active')
                      <span style="color: green;">{{ $value->customer_status }}</span>
                      @else
                      <span style="color: red;">{{ $value->customer_status }}</span>
                      @endif 
                    </td>
                    <td>
                      <button class="edit btn btn-outline-primary btn-xs" data="{{ $value->customer_id }}"><i class="fa fa-edit"></i></button>
                      <button class="delete btn btn-outline-danger btn-xs" data="{{ $value->customer_id }}"><i class="fa fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>

      <div id="add_form"></div>

    </div>
  </div>
</div>

<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Edit Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>

      <div id="edit_form"></div>

    </div>
  </div>
</div>
@stop
@section('script')
<script src="custom_js/customer.js"></script>
@endsection
