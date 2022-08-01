@extends('master')
@section('title')
<title>ADEASHOP|Category Page</title>
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Category Page</h1>
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
            <a href="{{ route('category.create') }}" class="btn btn-primary" style="background-color: rgb(255, 139, 86)">Add Category</a>
        </div>
      <div class="container">

            @if(session('success'))
            <div class="alert" style="background-color:rgb(255, 139, 86);>
                {{ session('success') }}
            </div>
            @endif

        </div>
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Category Name</th>
                        <th colspan="2">Tools</th>

                    </thead>
                    <tbody>
                        <tr>
                         @forelse ($category as $d )
                             <tr>
                                 <td>{{ $loop->iteration }}</td>
                                 <td>{{ $d->name_category }}</td>
                                 <td><a href="{{ route('category.edit', $d->id  ) }}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                             <td>   <form action="{{ route('category.destroy', $d->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                                 </td>
                             </tr>

                         @empty
                             <tr>
                                 <td colspan="3" class="text-center">Belum Ada Data</td>
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
