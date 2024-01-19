@extends('admin.layouts.master') 
@section('title','Products')
@section('content')
<div class="content">
        <a href="/products">
            <div class="btn btn-primary mb-5 ms-1">
                <i class="fa-solid fa-arrow-left me-2"></i>Back
            </div>
        </a>
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
                    <h5 class="card-title text-center">Add New Book Data</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('products.store') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
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
                                    value="{{old('title')}}"
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
                                    value="{{old('author')}}"
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
                                    value="{{old('description')}}"
                                    required
                                ></textarea>
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
                                    value="{{old('number')}}"
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
                                    value="{{old('url_link')}}"
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
                                    @foreach($data as $row)
                                      <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-lg-3 col-form-label" style="font-weight: 800"
                                >Image</label
                            >
                            <div class="col-lg-9">
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control-file"
                                    accept="image/*"
                                    required
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
