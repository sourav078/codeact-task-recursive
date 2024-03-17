@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Subcategory Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Subcategory</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Subcategory</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Subcategory Information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="text-muted text-center text-success">{{session('message')}}</p>
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Category</th>
                                <th class="wd-15p border-bottom-0">Parent Sub Category ID</th>
                                <th class="wd-15p border-bottom-0">Sub Category Name</th>

                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $subcategory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subcategory->category->name ?? ""}}</td>
                                    <td>{{$subcategory->subcategory_id}} </td>
                                    <td>{{$subcategory->name}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Action buttons">
                                        <a href="{{route('subcategory.edit', $subcategory->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{url( 'subcategory/'.$subcategory->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" style="margin-left: 10px;"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </div>
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
@endsection
