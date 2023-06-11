@extends('layouts.app')

@section('content')
<x-header title="Semua Anggaran" showCreate="true" link="api/budgets/create" />
@include('layouts.session')
<table class="table table-index table-striped table-hover bg-white m-2">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Jumlah Yang Dialokasikan</th>
            <th>Pengeluaran</th>
            <th>Tabungan</th>
            <th>Tanggal Pengeluaran</th>
            <th>Status</th>
            <th>Tanggal Dibuat</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($budgets as $budget)
        <tr data-link="{{ url('api/budgets/show', $budget->id) }}" class="href-row">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $budget->title }}</td>
            <td class="format-amount" data-amount="{{ $budget->alloted_amount }}"></td>
            <td class="format-amount" data-amount="{{ $budget->alloted_amount - $budget->balance_amount }}"></td>
            <td class="format-amount" data-amount="{{ $budget->balance_amount }}"></td>
            <td>{{ $budget->expiry_date->format('Y-M-d l') }}</td>
            <td>
                @if ($budget->is_active == 1) <span class="badge badge-primary badge-pills">Active</span>
                @elseif ($budget->is_active == 0) <span class="badge badge-danger badge-pills">Depleted</span>
                @else ERROR: Contact for support
                @endif
            </td>
            <td>{{ $budget->created_at->format('Y-M-d') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="text-center">Tidak Ada Transaksi</td>
        </tr>
        @endforelse
    </tbody>
</table>
<div class="ml-2 float-right">
    {{ $budgets->links() }}
</div>
@endsection

@section('script')
<script src="{{ asset('js/accounting.min.js') }}"></script>
@endsection