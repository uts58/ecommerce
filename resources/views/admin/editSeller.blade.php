<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Store', 'Store') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts.nav')

    <main class="py-4">
        <div class="justify-content-center position-ref full-height" style="width:60%">
            <div class="col-sm-8">
                <h1>Edit Seller info</h1>
            </div>
                <form method="POST" action="/admin/updateSeller" >
                {{csrf_field() }}

                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$sellers->id}}" readonly>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$sellers->name}}">
                </div>

                <div class="form-group">
                    <label for="licence">Licence:</label>
                    <input type="text" class="form-control" id="licence" name="licence" value="{{$sellers->licence}}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$sellers->email}}">
                </div>
                <div class="form-group">
                    <label for="email">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$sellers->phone}}">
                </div>
                <div class="form-group">
                    <label for="email">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$sellers->address}}">
                </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status">
                            <option value="approved"@if($sellers->status=="approved") {{"selected"}}@endif>Approved</option>
                            <option value="pending"@if($sellers->status=="pending") {{"selected"}}@endif>Pending</option>
                            <option value="disapproved"@if($sellers->status=="disapproved") {{"selected"}}@endif>Disapproved</option>
                        </select>
                    </div>
                <div class="form-group">
                    <button type="submit" name="btn btb-primary">Update</button>
                </div>

                <div class="form-goup">
                    @include('layouts.error')
                </div>

            </form>
        </div>

    </main>
</div>
</body>
</html>
