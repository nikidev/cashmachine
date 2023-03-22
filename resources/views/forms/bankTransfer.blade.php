<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <input type="hidden" name="form-name" value="BankTransaction">
    <div class="d-flex flex-row align-items-center mb-4 pb-1">
        <i class="fas fa-arrow-down-a-z fa-2x"></i>
        <i class="fas fa-arrow-down-1-9 fa-2x"></i>
        <div class="flex-fill mx-3">
            <div class="form-outline">
                <input type="text" id="account-number" name="account-number" class="form-control form-control-lg @error('account-number') is-invalid @enderror"
                       placeholder="1234AB" data-mdb-showcounter="true" minlength="6" maxlength="6" required />
                <label class="form-label" for="account-number">Account Number</label>
                @error('account-number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-helper"></div>
            </div>
        </div>
    </div>

    <div class="form-outline mb-5">
        <input type="text" id="customer-name" name="customer-name" class="form-control form-control-lg @error('customer-name') is-invalid @enderror"
               placeholder="Anna Doe" required />
        <label class="form-label" for="customer-name">Customer Name</label>
        @error('customer-name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-5">
        <div class="col-6">
            <div class="form-outline">
                <input type="text" id="transfer-date" name="transfer-date" class="form-control form-control-lg @error('transfer-date') is-invalid @enderror"
                       placeholder="DD/MM/YYYY" minlength="10" maxlength="10" required />
                <label class="form-label" for="transfer-date">Transfer Date</label>
                @error('transfer-date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-outline">
                <i class="fas fa-dollar-sign trailing"></i>
                <input type="number" id="amount-bank-transfer" name="amount-bank-transfer"
                       class="form-control form-icon-trailing form-control-lg @error('amount-bank-transfer') is-invalid @enderror" required />
                <label class="form-label" for="amount-bank-transfer">Amount</label>
                @error('amount-bank-transfer')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
