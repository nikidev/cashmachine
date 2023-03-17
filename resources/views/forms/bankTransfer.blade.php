<form action="{{ route('transactions.store') }}" method="POST" name="bankTransferForm">

    <div class="d-flex flex-row align-items-center mb-4 pb-1">
        <i class="fas fa-arrow-down-a-z fa-2x"></i>
        <i class="fas fa-arrow-down-1-9 fa-2x"></i>
        <div class="flex-fill mx-3">
            <div class="form-outline">
                <input type="text" id="account-number" name="account-number" class="form-control form-control-lg"
                       placeholder="1234AB" data-mdb-showcounter="true" minlength="6" maxlength="6" required />
                <label class="form-label" for="account-number">Account Number</label>
                <div class="form-helper"></div>
            </div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <input type="text" id="customer-name" name="customer-name" class="form-control form-control-lg"
               placeholder="Anna Doe" required />
        <label class="form-label" for="customer-name">Customer Name</label>
    </div>

    <div class="row mb-4">
        <div class="col-6">
            <div class="form-outline">
                <input type="text" id="transfer-date" name="transfer-date" class="form-control form-control-lg"
                       placeholder="DD/MM/YYYY" minlength="10" maxlength="10" required />
                <label class="form-label" for="transfer-date">Transfer Date</label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-outline">
                <i class="fas fa-dollar-sign trailing"></i>
                <input type="number" id="amount-bank-transfer" name="amount-bank-transfer" class="form-control form-icon-trailing form-control-lg" required />
                <label class="form-label" for="amount-bank-transfer">Amount</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
