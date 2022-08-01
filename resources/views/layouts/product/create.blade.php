@extends('master')
@section('title')
<title>ADEASHOP|Add Product Page</title>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Add Product</h1>
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
                    <h2>Halaman Add Data Product</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Name Product</td>
                                <td><input type="text" name="name_product" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><input type="text" name="description" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td><input type="text" name="stock" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><input type="text" name="price" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>
                                    <select name="category_id" class="from-control" style="width:800px;border-color:lavender; height:30px;" required>
                                        <option value="0">Pilih Data</option>
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name_category }}</option>

                                        @endforeach
                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <td>Picture</td>
                                <td><input type="file" name="picture" class="form-control" required></td>
                            </tr>
                            <tr>

                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn btn-primary" style="background-color: rgb(255, 139, 86)">Save </button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
