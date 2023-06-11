@extends('layouts.app')

@section('content')
<x-header title="Buat Kategori" showCreate="false" link="" />
<div class="d-lg-flex">
    <div class="col-lg-8">
        <div class="card border-0 mt-2 ml-2">
            <div class="card-body">
                <form action="{{ url('api/categories/store') }}" id="formCM" class="form" method="POST"
                    autocomplete="off">
                    @csrf
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title"
                        class="form-control rounded-0 @error('title') is-invalid @enderror" value="{{ old('title') }}"
                        autofocus />

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="mt-2">
                        <label for="entry">Pilih Saldo Normal</label>
                        <select name="entry" id="entry"
                            class="form-control rounded-0 @error('entry') is-invalid @enderror">
                            <option selected disabled>Pilih Satu</option>
                            <option value="dr" @if(old('entry')=='dr' ) selected @endif>Debit</option>
                            <option value="cr" @if(old('entry')=='cr' ) selected @endif>Kredit</option>
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
                            class="form-control rounded-0 @error('desc') is-invalid @enderror"
                            value="{{ old('desc') }}" />
                        @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" value="Buat" />
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card border-0 mt-2 ml-2">
            <div class="card-body">
                <strong>Kategori Lain</strong>
                <ol class="p-2 show-gracefully" id="load-here"></ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function(){
        $.ajax({
            url: `${document.location.origin}/api/categories/index`,
            method: 'get',
            dataType: 'json',
            success: (data) => {
                data.map(item => {
                    $('ol#load-here').append(`<li class="p-2">${item.title}</li>`);
                });
                $('ol#load-here').addClass('is-ready');
            },
        });
    });
</script>
@endsection