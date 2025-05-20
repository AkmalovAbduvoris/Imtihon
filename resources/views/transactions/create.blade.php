<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Transaction Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    @if ($errors->has('amount'))
    <div class="alert alert-danger">
        {{ $errors->first('amount') }}
    </div>
    @endif
  <div class="container mt-5">
    <h2 class="mb-4">Add New Transaction</h2>
    <form action="/transactions" method="POST">
        @csrf
      <div class="mb-3">
        <label for="type" class="form-label">Transaction Type</label>
        <select class="form-select" id="type" name="type" required>
          <option value="" selected disabled>Choose...</option>
          <option value="income">Income</option>
          <option value="expense">Expense</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input
          type="number"
          min="0"
          class="form-control"
          id="amount"
          name="amount"
          placeholder="Enter amount"
          required
        />
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea
          class="form-control"
          required
          id="description"
          name="description"
          rows="3"
          placeholder="Add a description"
        ></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Save Transaction</button>
    </form>
  </div>
</body>
</html>
