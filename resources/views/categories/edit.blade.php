@extends('layouts.master')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Category Edit</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


       <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">

              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">Edit Category</h5><br>

                  <div class="frm-wrapper">
                    <form role="form" action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                          <div class="form-group">
                            <label for="categoryName" class="text-left">Name</label>
                            <input type="text" name="name" class="form-control" id="categoryName" placeholder="Enter Category Name" value="{{ $category->name }}">

                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Update</button>
                        </div>
                      </form>
                  </div>
                </div>
              </div><!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->

    @endsection
