@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('msgSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgSuccess') }}
                        </div>
                    @endif
                    @if (session('msgError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgError') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-3  ">

                        <h5 class="mt-0">Sửa danh mục</h5>
                        <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Tất cả danh mục</a>
                    </div>

                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="category_name" class="form-label">Tên danh mục:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="category_name" name="category_name"
                                    class="form-control @error('category_name') is-invalid @enderror"
                                    placeholder="Tên danh mục" value="{{ $category->category_name }}">
                                @error('category_name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="example-select" class="form-label">Lựa chọn danh mục: <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('parent_id') is-invalid @enderror" id="example-select"
                                    name="parent_id">
                                    <option value="0">Danh mục gốc</option>
                                    @if (getAllCategories()->count() > 0)
                                        @foreach (menuSelect(getAllCategories()) as $item)
                                            @if ($item->id != $category->id)
                                                <option
                                                    {{ $category->parent_id == $item->id || old('parent_id') == $item->id ? 'selected' : '' }}
                                                    value="{{ $item->id }}">
                                                    {{ str_repeat('|--', $item->level) }}
                                                    {{ $item->category_name }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                                @error('parent_id')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">

                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
