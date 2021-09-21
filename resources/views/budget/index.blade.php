@extends('layouts.app')

@section('content')
<x-header title="All Budgets" showCreate="true" link="api/budgets/create" />
@include('layouts.session')
<table class="table table-striped table-hover mt-2 ml-2">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Allocated Amount</th>
            <th>Spended Amount</th>
            <th>Savings Amount</th>
            <th>Out of Comission at</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($budgets as $budget)
        <tr data-link="{{ url('api/budgets/show', $budget->id) }}" class="tableRow" style="cursor: pointer">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $budget->title }}</td>
            <td>{{ $budget->alloted_amount }}</td>
            <td>{{ $budget->alloted_amount - $budget->balance_amount }}</td>
            <td>{{ $budget->balance_amount }}</td>
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
            <td colspan="8" class="text-center">No record found</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection