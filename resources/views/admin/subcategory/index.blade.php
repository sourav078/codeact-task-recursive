@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">SubCategory Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">SubCategory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add SubCategory Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" required>
                                    <option value="" disabled selected> -- Select Category -- </option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"> {{$category->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Sub-Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="subcategory_id" required>
                                    <option value="" disabled selected> -- Select SubCategory -- </option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}"> {{$subcategory->name }} </option>
                                    @endforeach
                                    <option value="">None</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">SubCategory Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" name="name" placeholder=" Enter SubCategory Name" type="text"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New SubCategory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

