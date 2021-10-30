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
                        <input name="Menu_ID" class="form-control @error('id') is-invalid @enderror" placeholder="Enter ID">
                        <div class="text-danger">
                            @error('id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="Name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Origin Name</label>
                        <select class="form-control select2 @error('origin') is-invalid @enderror" style="width: 100%;">
                            <option selected="selected">Select One</option>
                            @foreach($origin as $data)
                                <option>{{$data->name}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            @error('origin')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input name="Price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price">
                        <div class="text-danger">
                            @error('price')
                                {{ $message }}
                            @enderror
                        </div>
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