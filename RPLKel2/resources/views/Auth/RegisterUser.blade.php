<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <div class="login-form">
                        <form action="{{ route('dataRegister') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" value="{{old('Name')}}">
                            </div>
                            <div class="mb-3">
                                <label for="Age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="Age" name="Age" placeholder="Age" value="{{old('Age')}}">
                            </div>
                            <div class="mb-3">
                                <label for="School" class="form-label">School</label>
                                <input type="text" class="form-control" id="School" name="School" placeholder="School" value="{{old('School')}}">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary " name="login">Register</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>