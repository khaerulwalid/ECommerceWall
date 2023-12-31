@extends('admin.layout.home')

  @section('content')
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="card-body">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List Data Product</h4>
                    @if(session()->has('success'))
                        <div class="alert alert-warning col-lg-12 mt-1" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p class="card-description"> Below is show data product list </code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Product name </th>
                            <th> Price </th>
                            <th> Qty </th>
                            <th> Discount </th>
                            <th> Category </th>
                            <th> Image </th>
                            <th> Action </th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                          <tr class="table-success">
                            <td> {{ $loop->iteration }} </td>
                            <td> <b>{{ $product->name }}</b> </td>
                            <td> <i>{{ number_format($product->price) }}</i> </td>
                            <td> {{ number_format($product->quantity) }} </td>
                            <td> {{ number_format($product->discount) }} </td>
                            <td> {{ $product->category }} </td>
                            <td>
                                <img src="{{ asset('storage/' . $product->image) }}" style="width: 100px; height: 100px;" alt="">
                            </td>
                            <td>
                                <a href="/product/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
  </div>
  @endsection