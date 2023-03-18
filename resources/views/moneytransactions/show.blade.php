@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-header">
                <i class="fas fa-money-bill-transfer fa-4x me-2"></i>
                <h1 class="card-title">Transaction Details (#{{ $moneyTransaction->id }})</h1>
            </div>
            <div class="card-body">
                <p class="card-text">Total Amount: {{ $moneyTransaction->transaction_amount }}</p>
                @if($moneyTransaction->transaction_details ?? false)
                    @foreach($moneyTransaction->transaction_details as $key => $transactionDetail)
                        <p class="card-text">{{ $key }}: {{ $transactionDetail }}</p>
                    @endforeach
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('home') }}" class="btn btn-danger">
                    <span class="fas fa-arrow-left me-2"></span> Back to Cash Machine
                </a>
            </div>
        </div>
    </div>
@endsection
