@extends('master')
@section('title')
<title>ADEASHOP|Order Page</title>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cart</h1>
</div>

          @if(session('pesan'))
          <div class="alert" style="background-color:rgb(255, 139, 86);">
          <button class="close">
          <span>&times;</span>
          </button>
          <strong>
              {{ session('pesan') }}</strong>
          </div>
          @endif


        <div class="row">
            <div class="col-12 col-md-4">
                    <div class="card card-primary" style="border-color: rgb(255, 139, 86)">
                        <form action="{{ route('order.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="card-header">
                                <h4 style="color: rgb(255, 139, 86)">Pilih Produk</h4>
                            </div>
                            <div class="card-body">
                                <label for="">Nama Produk</label>
                                <select name="product_id" class="form-control">
                                    <option value="0" >Pilih Produk</option>
                                    @foreach($product as $pr)
                                <option value="{{ $pr->id }}">{{ $pr->name_product }} - Rp. {{$pr->price}}</option>
                                    @endforeach
                                 </select>
                                    <div class="invalid-feedback">
                                        Form Nama Produk Harus Di Isi
                                    </div>
                                </select>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="row">
                                    <div class="col-11">
                                        <input type="number" class="formn-control" name="jumlah" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary" style="background-color: rgb(255, 139, 86)">Tambah</button>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card card-primary" style="border-color: rgb(255, 139, 86)">
                    <div class="card card-header d-flex justify-content-between">
                        <h4 style="color: rgb(255, 139, 86)">Cart</h4>
                    </div>
                    <div class="card card-body">
                        <div class="table-responsive">
                       <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah</th>
                                    <th colspan="2">Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($cart as $carts)
                                @foreach($carts->cartproduct as $cp )


                                      <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{ $cp->name_product  }}</td>
                                    <td>{{ $carts->jumlah }}</td>
                                    <td>{{ $carts->subtotal }}</td>
                                </tr>

                                @endforeach
                                @endforeach
                            </tbody>
                       </table>
                        </div>
                        <hr>
                    <div class="text-right">
                        @if($cart)
                    <p class="h5">
                        Total Harga : IDR {{ $cart->sum('subtotal') }}
                    </p>
                    @else
                     Total Harga : IDR

                        @endif
                    </div>
                    <hr>
                    <div class="card-footer text-right">

                        <a href="" class="btn" style="background-color:  rgb(255, 139, 86); "> <i class="fas fa-shopping-cart" style="color:white"> </i> <span style="color:white">Checkout</span></a>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
