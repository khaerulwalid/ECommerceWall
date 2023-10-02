@extends('admin.layout.home')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Create Data Product</h4>
            </div>
            <hr>
            <div class="row">
              <div class="col-12">
                <div class="preview-list">

                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-primary">
                        <i class="mdi mdi-file-document"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow gap-4">
                      <div class="flex-grow">

                        

                        {{-- Form Input Product --}}
                        <form class="forms-sample" action="/product" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="name">Product Name</label>
                              <input type="text" class="form-control text-white @error('name') is-invalid @enderror" placeholder="@error('name') {{ $message }} @else Isikan product name @enderror" name="name" id="name" value="{{ @old('name') }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control text-white" name="description" id="description" rows="4" aria-valuetext="{{ old('description') }}"></textarea>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control @error('image') is-invalid @enderror text-white" id="inputGroupFile02" name="image">
                                <label class="input-group-text bg-primary text-white" for="inputGroupFile02">Upload</label>

                                {{-- // Image preview --}}
                                @if($product->image)

                                @else

                                @endif
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control text-white @error('price') is-invalid @enderror" placeholder="@error('price') {{ $message }} @else Isikan price @enderror" name="price" id="price" value="{{ @old('price') }}">
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control text-white @error('quantity') is-invalid @enderror" placeholder="@error('quantity') {{ $message }} @else Isikan Quantity @enderror" name="quantity" id="quantity" value="{{ @old('quantity') }}">
                            </div>

                            
                            <div class="form-group">
                                <label for="category"
                                    >Category</label
                                >
                                <select
                                    class="form-control text-white"
                                    id="category" name="category"
                                >
                                <option disabled selected hidden>Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category')
                                  <label style="color:red" for="category">{{ $message }}</label>
                                @enderror
                            </div>
                            

                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="number" class="form-control text-white @error('discount') is-invalid @enderror" placeholder="@error('discount') {{ $message }} @else Isikan Discount @enderror" name="discount" id="discount" value="{{ @old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                          </form>
                        {{-- End Form Input Category --}}
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection