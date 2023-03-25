@extends('app')

@section('content')

<form action="/layouts/{{$item->id}}/cart" method="post">
@csrf
<input type="number" name="cart">
<button type="submit">add</button>
</form>
    
@endsection