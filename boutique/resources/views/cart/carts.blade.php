@extends('../layouts.app')

@section('page_title', 'CARTS')
@section('css')
    <link href="{{ asset('css/style_cart.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Client</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($carts as $cart)
            <tr>
            <td><a href="/carts/{{$cart->id}}">{{$cart->id}}</a></td>
                <td>{{$cart->client->name}}</td>
                <td>
                @foreach ($cart->products as $product)
                    <strong>{{$product->pivot->quantity}}</strong>
                    <span>x</span>
                    <span>{{$product->name}}</span>
                    <span>-</span>
                @endforeach</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
