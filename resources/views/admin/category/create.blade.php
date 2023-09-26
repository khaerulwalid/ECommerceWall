@extends('admin.layout.home')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">List Data Category</h4>
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

                        {{-- Form Input Category --}}
                        <form action="/category" method="post">
                            @csrf
                            <div class="input-group mr-3">
                                <input type="text" name="name" class="text-white form-control @error('name') is-invalid @enderror" placeholder="Category name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                      </div>

                      <div class="me-auto text-sm-right pt-2 pt-sm-0">
                        <button type="submit" class="btn btn-danger">Add Category Data</button>
                      </div>
                      
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