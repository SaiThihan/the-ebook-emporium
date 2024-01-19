@extends('admin.layouts.master') @section('title','View Order Detail')
@section('content')
<div class="container">
  <h1>Order Details of {{ $order->name }}</h1>
  <div class="row mt-4">
    <div class="col-md-6">
      <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Name:</label>
        <div class="col-sm-9">
          <p class="form-control-plaintext">{{ $order->name }}</p>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label">Email:</label>
        <div class="col-sm-9">
          <p class="form-control-plaintext">{{ $order->email }}</p>
        </div>
      </div>
      <div class="form-group row">
        <label for="bookname" class="col-sm-3 col-form-label">Book Name:</label>
        <div class="col-sm-9">
          <p class="form-control-plaintext">{{ $order->book->title }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group row">
        <label for="payment_proof" class="col-sm-4 col-form-label">Payment Proof:</label>
        <div class="col-sm-8">
          <img src="{{ asset('storage/payment_screenshots/' . $order->photo_url) }}" class="img-thumbnail">
        </div>
      </div>
      <div class="form-group row">
        <label for="status" class="col-sm-4 col-form-label">Status:</label>
        <div class="col-sm-8">
          <p class="form-control-plaintext">{{ $order->status }}</p>
        </div>
      </div>
    </div>
  </div>
    <div class="text-left">
      @if ($order->status === 'pending')
        <form method="POST" action="{{ route('orders.verify', $order->id) }}" style="display:inline;margin-right:20px">
            @csrf
            <button type="submit" class="btn btn-success mr-3">Verify Payment</button>
        </form>
      @endif
        
        <a href="{{ route('order.index') }}" class="btn btn-primary ml-3">Back to Orders</a>
    </div>
</div>

<style>
  .img-thumbnail {
    max-width: 300px;
    max-height: 300px;
  }
</style>




@endsection