@extends('master')
@section('title')
<title>ADEASHOP|Edit Category Page</title>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">
                <a href="">Home</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Halaman Edit Data Category</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <table class="table table-bordered">
                            <tr>
                                <td>Name Product</td>
                                <td><input type="text" name="name_product" value="{{ $product->name_product }}" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><input type="text" name="description" value="{{ $product->description }}" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td><input type="text" name="stock" value="{{ $product->stock }}" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="price" value="{{ $product->price }}" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>
                                    <select name="category_id" class="from-control" style="width:800px;border-color:lavender; height:30px;">
                                        <option value="0">Pilih Data</option>
                                        @foreach($category as $cat)


                                        @if ($product->category_id == $cat->id)
                                        <option value="{{ $cat->id }}" selected>{{ $cat->name_category }}</option>

                                        @else
                                        <option value="{{ $cat->id }}">{{ $cat->name_category }}</option>


                                        @endif
                                         @endforeach
                                    </select>
                                </td>

                            </tr>
                               <tr>
                                <td>Picture</td>

                                <td><br><img src="{{ asset('picture/'.$product->picture) }}" alt="" style="width: 40px;"><input type="file" name="picture" class="form-control"></td>
                            </tr>
                            <tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn btn-primary"style="background-color: rgb(255, 139, 86)">Save </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
