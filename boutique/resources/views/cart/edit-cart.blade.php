@extends('../layouts.app')

@section('page_title', 'CART')
@section('css')
<link href="{{ asset('css/style_cart.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <form action="/carts/{{$cart->id}}" method="POST">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <table class="table table-striped cart-table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Record</th>
                    <th scope="col">Artist</th>
                    <th scope="col-1">Price</th>
                    <th scope="col-1">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>
                        <img src="{{asset($product->image)}}" alt="" height="200px">
                    </td>
                    <td>
                        <span>{{$product->name}}</span>
                    </td>
                    <td>
                        <span>{{$product->artist}}</span>
                    </td>
                    <td>
                        <span>{{$product->price}} $</span>
                    </td>
                    <td>
                        <input type="number" value="{{$product->pivot->quantity}}" min="1"
                        name="quantity[{{$product->id}}]">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button><img src="{{asset('media/buttons/edit_button.svg')}}" alt="order button"></button>
    </form>
</div>
@endsection
