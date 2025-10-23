
<form action="/products/{{ $singleProduct->id }}/update" method="post">
    @csrf
    @method('POST')
    <input type="text" name="name" value="{{ $singleProduct->name }}">
    <input type="number" name="quantity" value="{{ $singleProduct->quantity }}">
    <textarea name="description">{{ $singleProduct->description }}</textarea>
    <input type="submit" value="Submit">
</form>

<a href="/products">Back to product list</a>