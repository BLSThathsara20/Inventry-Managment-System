@extends('layouts.master')

@section('content')

     <!-- Content Header (Page header) -->
     <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Sizes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Size Create</li>
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
                  <h5 class="card-title">Create Size</h5><br>

                  <div class="frm-wrapper">
                    <form role="form" action="{{ route('sizes.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="size" class="text-left">Size</label>
                            <input type="text" name="size" class="form-control" id="size" placeholder="Enter Size">

                            @if ($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                            @endif
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm"> <i class="fa da-save"></i> Submit</button>
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
