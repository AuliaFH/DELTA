@extends('layouts.app')

@section('content')
<x-header title="Lihat Kategori" showCreate='true' link="api/categories/create" />
<div class="card border-0 mt-2">
    <div class="card-body ml-4">
        <div>
            <strong>Judul:</strong> {{ $category->title }}
        </div>
        <div>
            <strong>Pilih Saldo Normal:</strong>
            @if($category->entry == 'dr')
            {{ __('Debit') }}
            @elseif ($category->entry == 'cr')
            {{ __('Kredit') }}
            @else
            <span class="text-danger">{{ __('Hubungi Developer Support segera') }}</span>
            @endif
        </div>
        <div>
            <strong>Deskripsi:</strong> {{ $category->desc }}
        </div>
    </div>
    <div class="card-footer bg-white row ml-4">
        <a href="{{ url('api/categories/edit',$category->id) }}" class="btn btn-primary">{{ __('Ubah') }}</a>
        @if ($category->is_deletable === 1)
        <form action="{{ url('api/categories/delete', $category->id) }}" method="POST">
            @csrf
            @method('Hapus')
            <input type="submit" value="Hapus" class="btn btn-delete ml-2" />
        </form>
        @endif
    </div>
</div>
@endsection