@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Subcategory Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Subcategory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Subcategory</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Subcategory Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('subcategory.update', $subcategory->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" required>
                                    <option value="" disabled selected> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$subcategory->category_id == $category->id ? 'selected' : ''}}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Parent Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="subcategory_id" >
                                    <option value="" disabled selected> -- Select Parent Category -- </option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}" {{$subcategory->subcategory_id == $subcategory->name ? 'selected' : ''}}> {{$subcategory->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$subcategory->name}}" id="name" name="name" placeholder="Subcategory Name" type="text"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Subcategory Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

