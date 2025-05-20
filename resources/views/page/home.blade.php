@extends('home')
@section('content')
@if ($balance)
    <h1 style="text-align: center; margin-top: 20%;">
        {{ $balance->amount }}
    </h1>
@else
    <div style="text-align: center; margin-top: 20%;">
        <form action="/balance" method="POST">
            @csrf
            <button>
                Create Balance
            </button>
        </form>
    </div>
@endif
    <div style="text-align: center;">
        <a href="/transactions/create">
            <button style="cursor: pointer; font-size: 24px; padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 8px;">
                +
            </button>
        </a>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="/transactions">
            <button style="cursor: pointer; font-size: 24px; padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 8px;">
                Transactions
            </button>
        </a>
    </div>
@endsection
