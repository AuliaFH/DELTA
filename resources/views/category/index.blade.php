@extends('layouts.app')

@section('content')
<x-header title="Semua Kategori" showCreate="true" link="api/categories/create" />
@include('layouts.session')
<table class="table table-index bg-white table-striped table-hover m-2">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pilihan</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->title }}</td>
            <td class="row">
                <a href="{{ url('api/categories/show', $category->id) }}" class="btn btn-show m-1">
                    <i class="fa fa-eye p-2"></i>
                </a>
                <a href="{{ url('api/categories/edit', $category->id) }}" class="btn btn-edit m-1">
                    <i class="fa fa-pencil-square-o p-2"></i>
                </a>
                @if ($category->is_deletable === 1)
                <form action="{{ url('api/categories/delete', $category->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-delete m-1">
                        <i class="fa fa-trash p-2"></i>
                    </button>
                </form>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Tidak Ada Transaksi</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection