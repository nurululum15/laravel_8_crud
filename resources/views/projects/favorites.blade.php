@extends('layouts.template')
@section('title', 'Favorites Page')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>My Favorite</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
              <div class="card-header">
                <table id="card-title" class="table table-bordered table-striped-responsive-lg">
                  <thead>
                  <tr>
                    <th>No</th> 
                    <th>Name</th>
                    <th>Introduction</th>
                    <th>Location</th>
                    <th>Costs</th>
                    <th>Date Created</th>
                    <th width="280px">Action</th>
                  </tr>
                  </thead>
        
    </table>
    <div>


@endsection
