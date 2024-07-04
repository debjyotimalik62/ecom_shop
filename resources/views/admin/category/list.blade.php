@extends('admin.layouts.app');

@section('content')
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
            <div>
                <h2 class="main-content-title fs-24 mb-1">Categories</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center"> 
                    {{-- <button type="button" class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center"> 
                        <i class="fe fe-download me-2 fs-14"></i> Import 
                    </button> 
                    <button type="button" class="btn btn-white btn-icon-text my-2 me-2 d-inline-flex align-items-center"> 
                        <i class="fe fe-filter me-2 fs-14"></i> Filter  --}}
                    </button> 
                    <a href="{{ route('categories.create') }}" class="btn btn-primary my-2 btn-icon-text d-inline-flex align-items-center"> 
                        <i class="fe fe-plus me-2 fs-14"></i> Create Category 
                    </a> 
                </div>
            </div>
        </div> <!-- Page Header Close -->

        @include('admin.message')

        <!-- Start::row-1 -->
        <div class="row row-sm">
            <div class="col-md-12 col-lg-12">
                <div class="card custom-card">
                    <div class="card-header  border-bottom-0 pb-0">
                        <div>
                            <div class="d-flex"> 
                                <label class="main-content-label my-auto pt-2">
                                    @if(Request::get('keyword'))
                                        Showing result of "<span class="text-success">{{Request::get('keyword')}}</span>"
                                    @else
                                        All Categories
                                    @endif
                                </label> 
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row table-filter align-items-center">
                            <div class="col-xl-3 col-lg-12">
                                <div class="d-flex align-items-center filter-group"> <span>Show</span>
                                    <div class="d-flex ms-2 mx-2">
                                        <div>
                                            <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                                <div class="choices__inner"><select name="quantity" id="select-countries17" class="form-control wd-150 choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active">
                                                        <option value="1" data-custom-properties="[object Object]">1</option>
                                                    </select>
                                                    <div class="choices__list choices__list--single">
                                                        <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" data-custom-properties="[object Object]" aria-selected="true">1</div>
                                                    </div>
                                                </div>
                                                <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                                    <div class="choices__list" role="listbox">
                                                        <div id="choices--select-countries17-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">1</div>
                                                        <div id="choices--select-countries17-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="2" data-select-text="Press to select" data-choice-selectable="">2</div>
                                                        <div id="choices--select-countries17-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="3" data-select-text="Press to select" data-choice-selectable="">3</div>
                                                        <div id="choices--select-countries17-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="4" data-select-text="Press to select" data-choice-selectable="">4</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <span>entries</span>
                                </div>
                            </div>

                            <div class="col-xl-9 col-lg-12 d-lg-flex justify-content-end align-items-center mb-3 mt-2 mt-xl-0">
                                <div class="d-flex mt-3 mt-lg-0 align-items-center" style="gap: 10px">
                                    <form class="mb-0" action="{{ route('categories.index') }}" method="get">
                                        <div class="filter-group d-inline-flex w-100"> 
                                            <input value="{{ Request::get('keyword') }}" type="text" name="keyword" id="keyword" class="form-control rounded-end-0" placeholder="search"> 
                                            <button type="submit" class="btn btn-primary"><i class="fe fe-search"></i></button> 
                                        </div>
                                    </form>

                                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-icon-text d-inline-flex align-items-center"> 
                                        <svg style="width: 16px; fill: #fff; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M125.7 160H176c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v51.2L97.6 97.6c87.5-87.5 229.3-87.5 316.8 0s87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3s-163.8-62.5-226.3 0L125.7 160z"/></svg>
                                         Reset 
                                    </a> 
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive border border-bottom-0">
                            <table class="table mb-0 text-nowrap text-md-nowrap">
                                <thead>
                                    <tr class="border-bottom">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($categories->isNotEmpty())
                                        @foreach($categories as $category)
                                            <tr class="border-bottom">
                                                <th scope="row">{{ $category->id }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>
                                                    @if($category->status == 1)
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="green" width="30"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="red" width="30"><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="button-list">
                                                        <a class="text-success" href="javascript:void(0);" class="btn">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a> 
                                                        <a class="text-danger" href="javascript:void(0);" class="btn">
                                                            <i class="bi bi-trash"></i>
                                                        </a> 
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="text-center text-danger" colspan="5">No Records Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="..." class="mt-3">
                            {{ $categories->links() }}
                            {{-- <ul class="pagination justify-content-end">
                                <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item active" aria-current="page"> <span class="page-link">2</span> </li>
                                <li class="page-item"> <a class="page-link" href="javascript:void(0);">Next</a> </li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
@endsection

@section('custom-js')
<script>

</script>
@endsection
