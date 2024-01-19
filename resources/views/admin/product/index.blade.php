@extends('admin.layouts.master') 
@section('title','Products')
@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Books List</h4>
            <h6>Manage your books</h6>
        </div>
        <div class="page-btn">
            <a href="{{ route('products.create') }}" class="btn btn-added"
                ><img
                    src="{{ asset('storage/icons/plus.svg'); }}"
                    alt="img"
                    class="me-1"
                />Add New Product</a
            >
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('delete'))
        <div class="alert alert-warning alert-dismissible" role="alert">
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
                    <th>Book Title</th>
                          <th>Author</th>
                          <th>Description</th>
                          <th>price</th>
                          <th>category</th>
                          <th>URL</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $value)
                        <tr>
                          <td>{{$value->title}}</td>
                          <td>{{$value->author}}</td>
                          <td>{{ Str::limit($value->description, 25) }}</td>
                          <td>{{$value->price}}</td>
                          <td>{{$value->category->name}}</td>
                          <td>{{Str::limit($value->url_link, 15)}}</td>
                          <td>
                            <a class="mr-2" href="{{ route('products.edit', $value->id) }}">
                                <img src="{{ asset('storage/icons/edit.svg') }}" alt="img">
                            </a>
                        
                            <form action="{{ route('products.destroy', $value->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none;background-color:inherit">
                                    <img src="{{ asset('storage/icons/delete.svg') }}" style="background-color:inherit;border:none;" alt="img">
                                </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
