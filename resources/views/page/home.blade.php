@extends('home')
@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="card text-center p-4 shadow-sm" style="width: 320px;">
        <h5 class="card-title">{{ __('messages.home.balance') }}</h5>
        @if ($balance)
        <h2 style="fw-bold text-success mb-3">
            {{ $balance->amount }}
        </h2>
        <a href="/transactions/create" class="btn btn-success mb-3">{{ __('messages.home.add_transaction') }}</a>
        @else
        <div style="text-align: center; margin: 20px 0;">
            <form action="/balance" method="POST">
                @csrf
                <button>{{ __('messages.home.create_balance') }}</button>
            </form>
        </div>
        @endif
        <a href="/transactions" class="btn btn-outline-primary">{{ __('messages.home.view_all_transactions') }}</a>
    </div>
</div>
@endsection
