@extends('layouts.app')

@section('content')
<x-header title="Ubah Kategori" showCreate="true" link="api/categories/create" />
<div class="card border-0 mt-2 ml-2">
    <div class="card-body">
        <form action="{{ url('api/categories/update', $category->id) }}" id="formCM" class="form" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Judul</label>
            <input type="text" name="title" id="title"
                class="form-control rounded-0 @error('title') is-invalid @enderror" value="{{ $category->title }}" />

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mt-2">
                <label for="entry">Pilih Saldo Normal</label>
                <select name="entry" id="entry" class="form-control rounded-0 @error('entry') is-invalid @enderror">
                    <option selected disabled>Pilih Satu</option>
                    <option value="dr" @if($category->entry =='dr' ) selected @endif>Debit</option>
                    <option value="cr" @if($category->entry =='cr' ) selected @endif>Credit</option>
                </select>
                <small class="form-text text-muted text-info">Debit untuk transaksi masuk, Kredit untuk transaksi keluar</small>
                @error('entry')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mt-2">
                <label for="desc">Deskripsi</label>
                <input type="text" name="desc" id="desc"
                    class="form-control rounded-0 @error('desc') is-invalid @enderror" value="{{ $category->desc }}" />
                @error('desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Ubah" />
        </form>
    </div>
</div>
@endsection