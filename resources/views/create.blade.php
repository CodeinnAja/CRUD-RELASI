@extends('template.custom')

@section('style')
<link rel="stylesheet" href="{{asset('style/style.css')}}">
@endsection

@section('content')


<form class="mb-4" action="/store" method="POST">
  @csrf
  <h1 class="text-center mb-4">Create Product</h1>
  <div class="form-group">
      <label for="">Product Name</label>
      <input type="text" class="form-control @error('product_name') is-invalid   @enderror" name="product_name">
      @error('product_name')
          <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>
  <div class="form-group">
    <label for="">Category</label>
    <select name="category_id" class="form-control">
      @foreach  ($categories as $categori)

        <option value="{{ $categori->id }}">{{ $categori->name }}</option>
          
      @endforeach
    </select>
</div>
  <div class="form-group">
      <label for="">Price</label>
      <input type="number" class="form-control @error('price') is-invalid @enderror" name="price">
      @error('price')
          <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>
  <div class="form-group">
      <label for="">Stock</label>
      <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock">
      @error('stock')
          <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>
  <button id="btn-submit" class="btn btn-primary mt-3">Submit</button>
</form>    

@endsection