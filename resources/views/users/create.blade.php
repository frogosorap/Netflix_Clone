<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User Form - Laravel 8 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="crud-container">
        <div class="row">
            <div class="col-lg-12 crud-margin-tb">
                <div class="pull-left crud-mb-2">
                    <h2>Add User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="crud-alert crud-alert-success crud-mb-1 crud-mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="User Name">
                        @error('name')
                            <div class="crud-alert crud-alert-danger crud-mt-1 crud-mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="User Email">
                        @error('email')
                            <div class="crud-alert crud-alert-danger crud-mt-1 crud-mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User Password:</strong>
                        <input type="text" name="password" class="form-control" placeholder="User Password">
                        @error('password')
                            <div class="crud-alert crud-alert-danger crud-mt-1 crud-mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>