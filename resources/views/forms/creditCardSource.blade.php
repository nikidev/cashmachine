<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <input type="hidden" name="form-name" value="CardTransaction">
    <div class="d-flex flex-row align-items-center mb-4 pb-1">
        <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
        <div class="flex-fill mx-3">
            <div class="form-outline">
                <input type="text" id="card-number" name="card-number" class="form-control form-control-lg @error('card-number') is-invalid @enderror"
                       placeholder="4123 4567 8912 3456" data-mdb-showcounter="true" minlength="16" maxlength="16" required />
                <label class="form-label" for="card-number">Card Number</label>
                @error('card-number')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-helper"></div>
            </div>
        </div>
    </div>

    <div class="form-outline mb-5">
        <input type="text" id="card-holder" name="card-holder" class="form-control form-control-lg @error('card-holder') is-invalid @enderror"
               placeholder="Anna Doe" required />
        <label class="form-label" for="card-holder">Cardholder's Name</label>
        @error('card-holder')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-5">
        <div class="col-4">
            <div class="form-outline">
                <input type="text" id="expiration-date" name="expiration-date" class="form-control form-control-lg @error('expiration-date') is-invalid @enderror"
                       placeholder="MM/YYYY" minlength="7" maxlength="7" required />
                <label class="form-label" for="expiration-date">Expire</label>
                @error('expiration-date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="form-outline">
                <input type="password" id="cvv" name="cvv" class="form-control form-control-lg @error('cvv') is-invalid @enderror"
                       placeholder="CVV" minlength="3" maxlength="3" required/>
                <label class="form-label" for="cvv">CVV</label>
                @error('cvv')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-5">
            <div class="form-outline">
                <i class="fas fa-dollar-sign trailing"></i>
                <input type="number" id="amount-card" name="amount-card" class="form-control form-icon-trailing form-control-lg
                    @error('amount-card') is-invalid @enderror" required />
                <label class="form-label" for="amount-card">Amount</label>
                @error('amount-card')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
