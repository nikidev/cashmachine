@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-mdb-toggle="tab" href="#tab-cash"><i class="fas fa-money-bill-1-wave fa-3x me-2"></i>Cash Source</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-mdb-toggle="tab" href="#tab-credit-card"><i class="fas fa-credit-card fa-3x me-2"></i>Credit Card Source</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-mdb-toggle="tab" href="#tab-bank-transfer"><i class="fas fa-building-columns fa-3x me-2"></i>Bank Transfer</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    @error('error-limit-total-processing')
                        <div class="text-danger text-center fs-5">{{ $message }}</div>
                    @enderror
                    <div class="tab-pane fade show active" id="tab-cash" role="tabpanel">
                        @error('error-limit-cash')
                            <div class="text-danger text-center fs-5">{{ $message }}</div>
                        @enderror
                        @include('forms.cashSource')
                    </div>
                    <div class="tab-pane fade" id="tab-credit-card" role="tabpanel">
                        @include('forms.creditCardSource')
                    </div>
                    <div class="tab-pane fade" id="tab-bank-transfer" role="tabpanel">
                        @include('forms.bankTransfer')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
