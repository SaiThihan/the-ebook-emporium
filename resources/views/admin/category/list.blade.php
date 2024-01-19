
@extends('admin.layouts.master')

@section('title', 'Category List Page')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-4 text-danger offset-lg-8 text-center mt-3">
                @error('categoryName')
                    {{ $message }}
                @enderror
            </div>
        </div>
        @if (session('categoryCreateSuccess'))
            <div class="row">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('categoryCreateSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if (session('categoryDeleteSuccess'))
            <div class="row">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('categoryDeleteSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if (session('categoryUpdateSuccess'))
            <div class="row">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('categoryUpdateSuccess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-3 text-dark">Category List</h1>
                        <div class="d-flex flex-row-reverse">
                            <a href="" class="btn btn-added text-white" style="background-color: #0d3055;"
                                data-bs-toggle="modal" data-bs-target="#addpayment">
                                <i class="fa-solid fa-plus me-2"></i>Add New Category
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  datanew ">
                                <thead>
                                    <tr>
                                        <th class="col-2">No</th>
                                        <th class="col-8">Category Name</th>
                                        <th class="col-2 offset-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        @for ($i = 0; $i < 1; $i++)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <a href="{{ route('category#editPage',$category->id) }}" class="btn col-2">
                                                        <i class="fa-solid fa-pen-to-square fs-5" title="edit"></i>
                                                    </a>
                                                    <a href="{{ route('category#delete',$category->id) }}" class="btn col-2">
                                                        <i class="fa-solid fa-trash-can fs-5 text-danger" title="delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $count++; ?>
                                        @endfor
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addpayment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Category</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('category#create') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input type="text" name="categoryName" value="{{ old('categoryName') }}"
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-submit"
                                style="background-color:#0d3055">Create</button>
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection