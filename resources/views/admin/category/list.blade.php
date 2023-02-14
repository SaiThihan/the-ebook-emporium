<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('admin.layouts.master')

    @section('title','Category List Page')

    @section('content')
        <h1>This is category list page</h1>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="Log Out">
        </form>
    @endsection
</body>
</html>
