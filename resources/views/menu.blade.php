@extends('layouts.template')
@section('title', 'Menu')

@section('content')
    <div class="card-body">
        <a href="/menu/add" class="btn btn-success btn-m">Add</a><br><br>
        <table id="table1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Menu_ID</th>
            <th>Name</th>
            <th>Origin</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($menu as $data)
                <tr>
                    <td>{{$data->menu_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->origin}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->price}}</td>
                    <td>
                        <a href="/menu/edit/{{$data->menu_id}}" class="btn btn-block btn-warning btn-sm">Edit</a>

  
                        <button type="button" title="delete" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->menu_id }}" >
                            Delete 
                        </button>
                      
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
            <th>Menu_ID</th>
            <th>Name</th>
            <th>Origin</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>


    @foreach ($menu as $data)
    <div class="modal fade" id="delete{{ $data->menu_id }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title"> {{$data->name}} </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apa Anda Yakin Untuk Menghapus Data Ini ??????</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <a href="/menu/delete/{{ $data->menu_id }}" class="btn btn-outline-light">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

@endsection


