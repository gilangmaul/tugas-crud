@extends('app')

@section('content')
<!-- Eror -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form class="mt-3" action="{{ url('/product') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nama Barang</label>
        <input type="text" class="form-control @error('product_name') is-invalid  @enderror" id="exampleInputName" aria-describedby="productlHelp" name="product_name">

        @error('product_name')
        <div class="invalid-feedback">
            Namanya belum di isi gan
        </div>
        @enderror

    </div>
    <div class="mb-3">
        <label for="exampleInputDesc" class="form-label">Deskripsi</label>
        <input type="text" class="form-control @error('product_desc') is-invalid  @enderror" id="exampleInputDesc" name="product_desc">

        @error('product_desc')
        <div class="invalid-feedback">
            Yang ini belum di isi gan
        </div>
        @enderror

    </div>
    <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Harga</label>
        <input type="text" class="form-control @error('product_price') is-invalid  @enderror" id="exampleInputPrice" name="product_price">

        @error('product_price')
        <div class="invalid-feedback">
            Yang ini juga diisi gan
        </div>
        @enderror

    </div>
    <select class="form-select mb-3 @error('category_id') is-invalid  @enderror" aria-label="Default select example" name="category_id">
               <option selected>Pilih Category</option>
        @foreach ($categories as $item)
        <option value="{{$item->id}}">{{$item->id}} - {{$item->name}}</option>
        @endforeach
    </select>
     @error('category_id')
        <div class="invalid-feedback">
            Dipilih dulu gan
        </div>
        @enderror
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection