@foreach($products as $product)
    <tr>
        <th scope="row">1</th>
        <td>{{$product->esporte}}</td>
        <td>{{$product->categoria}}</td>
    </tr>
@endforeach
{{$products->links()}}