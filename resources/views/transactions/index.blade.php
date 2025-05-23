@extends('home')

@section('content')
<div class="container py-4">

    <form method="GET" action="{{ route('transactions.index') }}" class="row g-3 align-items-center mb-4">
        <div class="col-auto">
            <label for="filter" class="col-form-label fw-semibold">Filter:</label>
        </div>
        <div class="col-auto">
            <select name="filter" id="filter" class="form-select" onchange="this.form.submit()">
                <option value="" {{ $filter == null ? 'selected' : '' }}>All time</option>
                <option value="day" {{ $filter == 'day' ? 'selected' : '' }}>Last 1 day</option>
                <option value="week" {{ $filter == 'week' ? 'selected' : '' }}>Last 1 week</option>
                <option value="month" {{ $filter == 'month' ? 'selected' : '' }}>Last 1 month</option>
                <option value="year" {{ $filter == 'year' ? 'selected' : '' }}>Last 1 year</option>
            </select>
        </div>
    </form>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card border-primary shadow-sm">
                <div class="card-header bg-primary text-white fw-semibold">
                    Total Expenses
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        ${{ number_format($transactions->where('type', 'expense')->sum('amount'), 2) }}
                    </h5>
                    <p class="card-text">Total expenses for the selected period.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success shadow-sm">
                <div class="card-header bg-success text-white fw-semibold">
                    Total Incomes
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        ${{ number_format($transactions->where('type', 'income')->sum('amount'), 2) }}
                    </h5>
                    <p class="card-text">Total incomes for the selected period.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card border-danger shadow-sm">
                <div class="card-header bg-danger text-white fw-semibold">
                    Expenses
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($transactions->where('type', 'expense') as $transaction)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>${{ number_format($transaction->amount, 2) }}</strong>
                                    <small class="text-muted d-block">{{ $transaction->description }}</small>
                                </div>
                                <span class="text-muted">{{ $transaction->transaction_date }}</span>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-muted">No expenses found.</li>
                    @endforelse
                </ul>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card border-success shadow-sm">
                <div class="card-header bg-success text-white fw-semibold">
                    Incomes
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($transactions->where('type', 'income') as $transaction)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>${{ number_format($transaction->amount, 2) }}</strong>
                                    <small class="text-muted d-block">{{ $transaction->description }}</small>
                                </div>
                                <span class="text-muted">{{ $transaction->transaction_date }}</span>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-muted">No incomes found.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
