@extends('layouts.app')

@section('content')
<x-header title="Lihat Saldo" showCreate='false' link="" />
<div class="card border-0 mt-2">
    <div class="card-body ml-4">
        <div class="row">
            <strong>Metode Pembayaran: </strong> {{ $balance->title }}
        </div>
        <div class="row">
            <strong>Saldo: </strong> <span class="format-amount" data-amount="{{ $balance->balance }}"></span>
        </div>
    </div>
    <div class="card-footer bg-white row ml-4">
        <a href="{{ url('api/balances/add-balance',$balance->id) }}"
            class="btn btn-primary">{{ __('Jumlah Deposit/Withdraw') }}
        </a>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendor/js/accounting.min.js') }}"></script>
@endsection