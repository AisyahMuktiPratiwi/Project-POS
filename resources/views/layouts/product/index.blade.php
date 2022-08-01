@extends('master')
@section('title')
<title>ADEASHOP|Product Page</title>
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Product Page</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="" style="color: rgb(255, 139, 86)">Home</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
       <div class="card  card-primary" style="border-color: rgb(255, 139, 86)">
        <div class="card-header">
            <a href="{{ route('product.create') }}" class="btn btn-primary" style="background-color: rgb(255, 139, 86)">Add Product</a>
        </div>
        <div class="card-body">
          <div class="container">

                @if(session('success'))
                <div class="alert" style="background-color:rgb(255, 139, 86);>
                    {{ session('success') }}
                </div>
                @endif

            </div>
            <div class="table table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Category Product</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>image</th>
                        <th colspan="2">Tools</th>

                    </thead>
                    <tbody>
                        <tr>
                         @forelse ($product as $pr )
                             <tr>
                                 <td>{{ $loop->iteration }}</td>

                                 <td>{{ $pr->name_product }}</td>
                                 <td>{{ $pr->category->name_category }}</td>
                                 <td>{{ $pr->description }}</td>
                                 <td>{{ $pr->price }}</td>
                                 <td>{{ $pr->stock }}</td>
                                 <td><img src="{{ asset('picture/'.$pr->picture) }}" alt="" width="40px"></td>

                                 <td><a href="{{ route('product.edit', $pr->id  ) }}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                               <td> <form action="{{ route('product.destroy', $pr->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                             </tr>
                            </td>
                         @empty
                             <tr>
                                 <td colspan="7" class="text-center">Belum Ada Data</td>
                                </tr>
                         @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       </div>
        </div>
    </div>
</section>
@endsection
