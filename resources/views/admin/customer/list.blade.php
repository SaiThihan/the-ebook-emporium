@extends('admin.layouts.master')

@section('title', 'Customer List')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="">User Lists</h3>
                @if (session('userRoleChangeSuccess'))
                <div class="row mt-2">
                    <div class="alert alert-success alert-dismissible col-lg-12" role="alert">
                        <strong><i class="fa-solid fa-circle-check me-2"></i>{{ session('userRoleChangeSuccess') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Change to</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                @for ($i=0; $i <1; $i++)
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td class="productimgname">
                                        @if ($customer->image == null)
                                        <img style="width: 40px;" src="{{ asset('storage/image/defaultUser1.png') }}">
                                    @else
                                        <img  style="width: 40px;"src="{{ asset('storage/admin/' . $customer->image) }}">
                                    @endif
                                        {{ $customer->name }}
                                    </td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->gender }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->role }}</td>
                                    <td>
                                        <a class="me-3 btn btn-danger text-white " href="{{ route('admin#changeToCustomer',$customer->id) }}">
                                            customer
                                        </a>
                                        <a class="me-3 btn btn-success text-white confirm-text" href="{{ route('admin#changeToAdmin',$customer->id) }}">
                                            admin
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
@endsection