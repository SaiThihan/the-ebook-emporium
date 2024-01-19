@extends('admin.layouts.master') 
@section('title','Products')
@section('content')
<div class="content">
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-xl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title text-center">Update Book Data</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('products.update', $book->id) }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Title</label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="text"
                                    name="title"
                                    class="form-control"
                                    required
                                    value="{{ old('title', $book->title) }}"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Author</label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="text"
                                    name="author"
                                    class="form-control"
                                    required
                                    value="{{ old('author', $book->author) }}"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Description</label
                            >
                            <div class="col-lg-9">
                                <textarea
                                    name="description"
                                    class="form-control"
                                    required
                                >{{ old('description', $book->description) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Price</label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="number"
                                    name="price"
                                    min="0"
                                    class="form-control"
                                    value="{{ old('price', $book->price) }}"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >URL</label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="text"
                                    name="url_link"
                                    class="form-control"
                                    value="{{ old('url_link', $book->url_link) }}"
                                    required
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Category</label
                            >
                            <div class="col-lg-9">
                                <select name="category_id" id="" class="form-control">
                                    @foreach($category as $row)
                                      <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Label</label
                            >
                            <div class="col-lg-9">
                                <img src="{{ asset('storage/book_image/'.$book->image) }}" alt="{{ $book->title }}" style="max-width: 200px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                ></label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control-file"
                                    accept="image/*"
                                />
                            </div>
                        </div>
                        <div class="text-center">
                            <button
                                type="submit"
                                class="btn btn-primary mx-auto"
                            >
                                Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
