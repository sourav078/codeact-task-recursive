@extends('admin.master')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Category</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Category Information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Category name</th>
                                <th class="wd-15p border-bottom-0">Parent Category name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @if($category->category_id)
                                    {{$category->parent->name}}
                                    @else
                                         Parent Category
                                    @endif
                                </td>
{{--                                <td>--}}
{{--                                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success btn-sm">--}}
{{--                                        <i class="fa fa-edit"></i>--}}
{{--                                    </a>--}}

{{--                                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger btn-sm">--}}
{{--                                        <i class="fa fa-trash"></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
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
