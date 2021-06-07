@extends('layouts.admin')

@section('title', "Insert" )

@section('content')
  <!-- Content Wrapper. Contains page content -->
  {{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Product
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('product.index') }}"><i class="fa fa-building"></i> Product ></a></li>
        <li class="active">Tambah Product </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
        {{ Form::open(array('route' => ['product.store'],'method'=>'POST', 'class' => 'form-horizontal')) }}
            
            <div class="form-group @if ($errors->has('title_en')) has-error @endif">
                <label for="title_en" class="col-md-3">Title English </label>
                <div class="col-md-9">
                <input type="text" name="title_en" class="form-control">
                    @if ($errors->has('title_en'))
                        <div class="text-red">{{ $errors->first('title_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('title_id')) has-error @endif">
                <label for="title_id" class="col-md-3">Judul Indonesia</label>
                <div class="col-md-9">
                <input type="text" name="title_id" class="form-control">
    
                    @if ($errors->has('title_id'))
                        <div class="text-red">{{ $errors->first('title_id') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('price_en')) has-error @endif">
                <label for="price_en" class="col-md-3">Price English</label>
                <div class="col-md-9">
                <input type="text" name="price_en" class="form-control">
                    @if ($errors->has('price_en'))
                        <div class="text-red">{{ $errors->first('price_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('price_id')) has-error @endif">
                <label for="price_id" class="col-md-3">Harga Indonesia</label>
                <div class="col-md-9">
                <input type="text" name="price_id" class="form-control">
                    @if ($errors->has('v'))
                        <div class="text-red">{{ $errors->first('price_id') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('qty_en')) has-error @endif">
            <label for="qty_en" class="col-md-3">Qty English</label>
                <div class="col-md-9">
                <input type="text" name="qty_en" class="form-control">
                    @if ($errors->has('qty_en'))
                        <div class="text-red">{{ $errors->first('qty_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('qty_id')) has-error @endif">
            <label for="qty_id" class="col-md-3">Jumlah Indonesia</label>
                <div class="col-md-9">
                <input type="text" name="qty_id" class="form-control">
                    @if ($errors->has('qty_id'))
                        <div class="text-red">{{ $errors->first('qty_id') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('desc_en')) has-error @endif">
            <label for="desc_en" class="col-md-3">Description English</label>
                <div class="col-md-9">
                <input type="text" name="desc_en" class="form-control">
                    @if ($errors->has('desc_en'))
                        <div class="text-red">{{ $errors->first('desc_en') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group @if ($errors->has('desc_id')) has-error @endif">
            <label for="desc_id" class="col-md-3">Deskripsi Indonesia</label>
                <div class="col-md-9">
                <input type="text" name="desc_id" class="form-control">
                    @if ($errors->has('desc_id'))
                        <div class="text-red">{{ $errors->first('desc_id') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <center>
                <a href="{{ route('product.index') }}" class="btn bg-maroon">Batal</a>
                <input type="submit" value="Create" class="btn btn-success">
                </center>
            </div>
        {{ Form::close() }}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
 