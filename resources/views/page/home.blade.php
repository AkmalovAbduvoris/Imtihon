@extends('home')
@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="card text-center p-4 shadow-sm" style="width: 320px;">
        <h5 class="card-title">Current Balance</h5>
        @if ($balance)
        <h2 style="fw-bold text-success mb-3">
            {{ $balance->amount }}
        </h2>
        @else
        <div style="text-align: center; margin-top: 20%;">
            <form action="/balance" method="POST">
                @csrf
                <button>Create Balance</button>
            </form>
        </div>
        @endif
        <a href="/transactions/create" class="btn btn-success mb-3">Add Transaction</a>
        <a href="/transactions" class="btn btn-outline-primary">View All Transactions</a>
    </div>
</div>
@endsection
