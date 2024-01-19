@extends('admin.layouts.master')

@section('title', 'Category Edit Page')

@section('content')
    <section style="background-color: #eee;min-height:90vh; padding-top:10%">

        <div class="">
            <div class="col-4 offset-4">
                <a href="{{route('category#list');}}">
                    <button type="button" class="btn btn-secondary mb-5">
                        <i class="fa-solid fa-arrow-left me-2"></i>back
                    </button>
                </a>
            </div>
            <div class="col-4 bg-light offset-4" style="">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                </div>
                <form action="{{ route('category#edit') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="hidden" name="categoryId" value="{{ $category->id }}">
                                    <label>Category Name</label>
                                    <input type="text" name="categoryName" value="{{ old('categoryName',$category->name) }}"
                                        class="@error('categoryName') is-invalid @enderror">
                                    @error('categoryName')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">

                        <button type="submit" class="btn btn-submit"
                            style="background-color:#0d3055"><i class="fa-solid fa-circle-up me-2"></i>Update</button>

                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
