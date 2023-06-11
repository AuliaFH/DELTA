@extends('layouts.app')

@section('content')
<x-header title="Semua Metode Pembayaran" showCreate="true" link="api/payment-options/create" />
@include('layouts.session')
<table class="table table-index table-striped table-hover m-2">
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Metode</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($paymentOptions as $option)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $option->title }}</td>
            <td class="row">
                <a href="{{ url('api/payment-options/show', $option->id) }}" class="btn btn-show m-1">
                    <i class="fa fa-eye p-1"></i>
                </a>
                <a href="{{ url('api/payment-options/edit', $option->id) }}" class="btn btn-edit m-1">
                    <i class="fa fa-pencil-square-o p-1"></i>
                </a>
                @if ($option->is_deletable === 1)
                <form action="{{ url('api/payment-options/delete', $option->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" name="delete" class="btn btn-delete m-1">
                        <i class="fa fa-trash p-1"></i>
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