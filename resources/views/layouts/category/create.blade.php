@extends('master')
@section('title')
<title>ADEASHOP|Add Category Page</title>
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Add Category</h1>
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
                    <h2>Halaman Add Data Category</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Name Category</td>
                                <td><input type="text" name="name_category" class="form-control"></td>
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
