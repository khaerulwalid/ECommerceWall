@extends('admin.layout.home')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">List Data Category</h4>
              <div>
                <a href="/category/create" class="btn btn-primary">Add Data Category</a>
              </div>
            </div>
            @if(session()->has('success'))
              <div class="alert alert-warning col-lg-12 mt-1" role="alert">
                {{ session('success') }}
              </div>
            @endif
            <hr>
            <div class="row">
              <div class="col-12">
                <div class="preview-list">

                  @foreach ($categories as $category)
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-primary">
                        <i class="mdi mdi-file-document"></i>
                      </div>
                    </div>
                    <div class="preview-item-content d-sm-flex flex-grow">
                      <div class="flex-grow">
                        <h6 class="preview-subject">{{ $category->name }}</h6>
                        <p class="text-muted mb-0">This is {{ $category->name }} category </p>
                      </div>
                      <div class="me-auto text-sm-right pt-2 pt-sm-0">
                        <a href="/category/{{ $category->id }}/edit" class="btn btn-danger">Edit</a>
                        <form action="/category/{{ $category->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin data di hapus ?')">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection