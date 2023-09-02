@foreach($products as $product)
<option value="{{$product->id}}">{{$product->ar_title}} </option>
@endforeach
