@extends('layouts.admin')

@section('title', "Index" )

@section('content')


    <section class="content-header">
        <h1>
            <small></small>
        </h1>
        <ol class="breadcrumb">
        
        </ol>
    </section>
    <br>
        <section class="content container-fluid">
            <div class="form-group col-md-12">
                <div class="pull-right">
                    {{-- <a href="{{ route('products.create', ['subdomain' => Auth::user()->role]) }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Products</a> --}}
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
            @endif
            <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
            <div class="box-body table-responsive">
     
                <table id="listProdukToko" class="table table-bordered table-stripped responsive">
                    <thead>
                    
                    <tr>
                        <th width="20">No</th>
                        <th>{{ __('home.title') }} </th> 
                        <th>{{ __('home.price') }} </th>
                        <th>{{ __('home.qty') }} </th>
                        <th>{{ __('home.desc') }} </th>
                    </tr>
                    </thead>
                    <tbody id="">
                    @if (count($products) > 0)
                        @foreach ($products as $key => $index)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $index->title }}</td>
                            <td>{{ $index->price }}</td>
                            <td>{{ $index->qty }}</td>
                            <td>{{ $index->desc }}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">Produk tidak ditemukan!</td>
                        </tr>
                    @endif
                </tbody>
                </table>
            </div>
        </div>

        </section>

@endsection

@section('additional-js')
    <script>
     $(document).ready(function() {
        $('#listProdukToko').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json"
                }
            ,responsive: true
            } );
    } );
    </script>
@endsection
