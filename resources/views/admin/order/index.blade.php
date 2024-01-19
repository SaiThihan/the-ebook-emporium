@extends('admin.layouts.master') @section('title','View Orders')
@section('content')
<div class="page-header">
    <div class="page-title">
        <h4>ORDER LISTS</h4>
        <h6>Manage customers Orders</h6>
    </div>
</div>
    @if (session('delete'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ session('delete') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
<div class="card">
    <div class="card-body">
        <div class="table-top">
            <div class="search-set">
                <div class="search-input">
                    <a class="btn btn-searchset"
                        ><img src="{{ asset('storage/icons/search-white.svg'); }}" alt="img"
                    /></a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table datanew">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>email</th>
                        <th>Book Name</th>
                        <th>payment_proof</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                        <td class="text-bolds">{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->book->title}}</td>
                        <td>{{$value->photo_url}}</td>
                        <td>
                            @if ($value->status === 'pending') 
                                <span class="badges bg-primary">Pending</span>
                            @else
                                <span class="badges bg-success">Verified</span>
                            @endif</td>
                        <td>
                            <a class="me-3" href="{{ route('order.show', $value->id) }}">
                                <img
                                    src="{{asset('storage/icons/eye.svg')}}"
                                    alt="img"
                                />
                            </a>
                            <form method="POST" action="{{ route('orders.destroy', $value->id) }}" style="display:inline" id="delform">
                                @csrf
                                @method('DELETE')
                                <a href="#" class="me-3" onclick="document.getElementById('delform').submit()">
                                    <img src="{{asset('storage/icons/delete.svg')}}" alt="img" />
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
