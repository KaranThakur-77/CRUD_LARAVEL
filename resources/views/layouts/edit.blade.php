@extends('components.app')
@section('main')
                   
                </div>
                <form action="/products/{{ $product->id }}/update" method="post">
                    @csrf
                    @method('PUT')
                    @if (session('success'))
                    <div class="alert alert-success m-auto d-flex justify-content-center">
                        <h5 style="">{{session('success')}}</h5>
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="{{ old('username',$product->name) }}" placeholder="Username" class="form-control" id="username">
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" value="{{ old('email',$product->email) }}"   placeholder="Email" class="form-control" id="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textarea name="msg" class="form-control" rows="8" placeholder="Your message here..."
                            id="msg">{{ old('msg',$product->message) }}</textarea>
                        @error('msg')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection