@extends('layouts.template')
@section('title', 'addmenu')

@section('content')
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="/menu/insert" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label>Menu ID</label>
                        <input name="Menu_ID" class="form-control" placeholder="Enter ID" value="{{old('Menu_ID')}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="Name" class="form-control" placeholder="Enter Name" value="{{old('Name')}}">
                    </div>
                    <div class="form-group">
                        <label>Origin Name</label>
                        <input name="Origin" class="form-control" placeholder="Enter Origin" value="{{old('Origin')}}">
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <input name="Description" class="form-control" placeholder="Enter Origin" value="{{old('Description')}}">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input name="Price" class="form-control" placeholder="Enter Price" value="{{old('Price')}}">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
            <!-- </div>
            /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
        
    
@endsection