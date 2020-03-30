

@foreach ($product as $item)
<img src="../{{$item->image}}" alt="" height="200px"><br/>
<h1>{{$item->name}} - {{$item->artist}}</h1>
@endforeach
