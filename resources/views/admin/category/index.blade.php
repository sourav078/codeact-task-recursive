@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Form Layouts</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Category Name*</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" name="name" placeholder="Category Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Sub Category of</label>
                            <div class="col-md-9">
                                <select class="form-control" name="parent_id">
                                    <option value="" disabled selected> -- No Parent -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                        @if (!empty($category['children']))
                                            @foreach($category['children'] as $child)
                                                <option value="{{$child['id']}}">- {{$child['name']}}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input class="btn btn-success" type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
