<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card mt-4 mb-4">
                    <div class="card-body m-auto">
                        <h2>CRUD Operation:</h2>
                    </div>
                   
                </div>
                <form action="/product/store" method="post">
                    @csrf
                    @if (session('success'))
                    <div class="alert alert-success m-auto d-flex justify-content-center">
                        <h5 style="">{{session('success')}}</h5>
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" class="form-control" id="username">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" value="{{ old('email') }}"   placeholder="Email" class="form-control" id="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textarea name="msg" class="form-control" rows="8" placeholder="Your message here..."
                            id="msg">{{ old('msg') }}</textarea>
                        @error('msg')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="img">Image:</label>
                        <input type="file" name="image" value="{{ old('image') }}"  id="image">
                        @error('msg')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>