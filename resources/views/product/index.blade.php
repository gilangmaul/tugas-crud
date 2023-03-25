@extends('app')


@section('content')
<a href="{{url('/product/add')}}">
    <button class="btn btn-primary mt-4" type="button"> Tambah</button>
</a>

@foreach ($products as $item )
<div class="card mt-3">
    <div class="card-body">
        <div class="card-title">
            {{$item->name}} ( {{$item->price}} )
        </div>
        <div class="card-text">
            <h6 class="card-subtitle mb-2 text-muted">{{$item->category->name}}</h6>
            {{$item->description}}
        </div>
            {{-- Buton edit --}}
        <a href="/product/{{$item->id}}/edit">
            <button class="btn btn-warning mt-3" type="button">Edit</button>
        </a>
            {{-- bututon hpus --}}
        <a href="/product/{{$item->id}}/destroy">
            <button class="btn btn-danger mt-3" type="button">Hapus</button>
        </a>
        {{-- button add keranjang --}}
        <a href="/layouts/{{$item->id}}/cart">
        <button class="btn btn-primary mt-3" type="button">Add</button></a>
        {{-- maaf kak ini belum berfungsi --}}
        

    </div>
</div>
@endforeach
@endsection