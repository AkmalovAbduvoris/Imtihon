<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="{{ route('transactions.index') }}">
        <label for="filter">Show transactions for:</label>
        <select name="filter" id="filter" onchange="this.form.submit()">
            <option value="" {{ $filter == null ? 'selected' : '' }}>All time</option>
            <option value="day" {{ $filter == 'day' ? 'selected' : '' }}>Last 1 day</option>
            <option value="week" {{ $filter == 'week' ? 'selected' : '' }}>Last 1 week</option>
            <option value="month" {{ $filter == 'month' ? 'selected' : '' }}>Last 1 month</option>
            <option value="year" {{ $filter == 'year' ? 'selected' : '' }}>Last 1 year</option>
        </select>
    </form>
    <div style="display: flex; justify-content: space-between;">
        <ul style="width: 50%">
            @foreach ($transactions->where('type', 'expense') as $transaction)
            <li>
                {{ $transaction->type }}: {{ $transaction->amount }} - {{ $transaction->description }} - {{ $transaction->transaction_date }}
            </li>
            @endforeach
        </ul>
        <ul style="width: 50%">
            @foreach ($transactions->where('type', 'income') as $transaction)
            <li>
                {{ $transaction->type }}: {{ $transaction->amount }} - {{ $transaction->description }} - {{ $transaction->transaction_date }}
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
