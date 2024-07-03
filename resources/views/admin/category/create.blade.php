@extends('admin.layouts.app');

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid"> <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="main-content-title fs-24 mb-1">Add Category</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </div>
                <div class="d-flex">
                    <div class="justify-content-center"> <button type="button"
                            class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center"> <i
                                class="fe fe-download me-2 fs-14"></i> Import </button> <button type="button"
                            class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center"> <i
                                class="fe fe-filter me-2 fs-14"></i> Filter </button> <button type="button"
                            class="btn btn-primary my-2 btn-icon-text d-inline-flex align-items-center"> <i
                                class="fe fe-download-cloud me-2 fs-14"></i> Download Report </button> </div>
                </div>
            </div> <!-- Page Header Close --> <!-- Start::row-1 -->
            <div class="row row-sm">
                <div class="col-lg-12 col-md-12 col-md-12">
                    <div class="card custom-card">
                        <form action="" method="POST" id="categoryForm" name="categoryForm">
                            <div class="card-body">
                                <div class="form-group"> 
                                    <label class="fw-medium form-label">Catgory Name</label> 
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    <p class="text-danger" id="catError"></p>
                                </div>
                                <div class="form-group"> 
                                    <label class="fw-medium form-label">Slug</label> 
                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Name">
                                    <p class="text-danger" id="slugError"></p>
                                </div>
    
                                <div class="form-group"> 
                                    <label class="fw-medium form-label">status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                </div> 
    
                                {{-- <label class="fw-medium form-label">Upload Product</label>
                                <div>
                                    <form data-single="true" method="post" action="https://httpbin.org/post"
                                        class="dropzone dz-clickable">
                                        <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files
                                                here to upload</button></div>
                                    </form>
                                </div> --}}
                                
                            </div>
                            <div class="card-footer mb-1"> 
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--End::row-1 -->
        </div>
    </div>
@endsection

@section('custom-js')
<script>
    $("#categoryForm").submit(function(event){
        event.preventDefault();
        var element = $(this);
        $.ajax({
            type: 'POST',
            url: '{{ route('categories.store') }}',
            data: element.serializeArray(),
            dataType: 'json',
            success: function(response){
                console.log(response);

                if(response['status'] == true){
                    $('name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                    $('slug').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                }else{
                    
                    var errors = response['errors'];
                    if(errors['name']){
                        // $('name').addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['name']);
                        document.getElementById('catError').innerHTML = "g jlbnjfkln";
                    }else{
                        // $('name').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                        document.getElementById('catError').innerHTML = "";
                    }
    
    
                    if(errors['slug']){
                        // $('slug').addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['name']);
                        document.getElementById('slugError').innerHTML = errors['slug'];
                    }else{
                        // $('slug').removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                        document.getElementById('slugError').innerHTML = "";
                    }

                }
                

            }, error: function(jqXHR, exception){
                console.log("Something went wrong");
            }
        })
    });
</script>
@endsection