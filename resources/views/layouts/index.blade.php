@extends('components.navbar')
@section('navbar')
                <a href="product/create" class="btn btn-dark mt-4">Add entities.</a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">SN.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                      <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->email}}</td>
                        <td>{{ $product->message}}</td>      
                        <td>
                          <a href="products/{{ $product->id }}\edit" class="btn btn-primary btn-sm">Edit</a>   
                          <a href="products/{{ $product->id }}\destroy" class="btn btn-danger btn-sm">Delete</a>   
                          
                        </td>           
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection