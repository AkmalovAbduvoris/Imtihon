@extends('home')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center fw-semibold">{{ __('messages.transactions_create.title') }}</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/transactions" method="POST">
                        @csrf

                        <!-- Type -->
                        <div class="mb-3">
                            <label for="type" class="form-label">{{ __('messages.transactions_create.type') }}</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="" disabled {{ old('type') ? '' : 'selected' }}>{{ __('messages.transactions_create.options.choose') }}</option>
                                <option value="income" {{ old('type') == 'income' ? 'selected' : '' }}>{{ __('messages.transactions_create.options.income') }}</option>
                                <option value="expense" {{ old('type') == 'expense' ? 'selected' : '' }}>{{ __('messages.transactions_create.options.expense') }}</option>
                                {{-- <option value="debt_in" {{ old('type') == 'debt_in' ? 'selected' : '' }}>Debt In (Qarz Olish)</option> --}}
                                {{-- <option value="debt_out" {{ old('type') == 'debt_out' ? 'selected' : '' }}>Debt Out (Qarz To‘lash)</option> --}}
                            </select>
                        </div>

                        <!-- Amount -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">{{ __('messages.transactions_create.amount') }}</label>
                            <input
                                type="number"
                                min="1"
                                class="form-control @error('amount') is-invalid @enderror"
                                id="amount"
                                name="amount"
                                placeholder="{{ __('messages.transactions_create.placeholder_amount') }}"
                                value="{{ old('amount') }}"
                                required
                            >
                            @error('amount')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('messages.transactions_create.description') }}</label>
                            <textarea
                                class="form-control"
                                id="description"
                                name="description"
                                rows="3"
                                placeholder="{{ __('messages.transactions_create.placeholder_description') }}"
                            >{{ old('description') }}</textarea>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                {{ __('messages.transactions_create.submit') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
