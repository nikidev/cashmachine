<form action="{{ route('transactions.card.store') }}" method="POST">
    @csrf
    <div class="d-flex flex-row align-items-center mb-4 pb-1">
        <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
        <div class="flex-fill mx-3">
            <div class="form-outline">
                <input type="text" id="card-number" name="card-number" class="form-control form-control-lg @error('card-number') is-invalid @enderror"
                       placeholder="4123456789123456" data-mdb-showcounter="true" minlength="16" maxlength="16" value="{{ old('card-number') }}" required />
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
               placeholder="Anna Doe" value="{{ old('card-holder') }}" required />
        <label class="form-label" for="card-holder">Cardholder's Name</label>
        @error('card-holder')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-5">
        <div class="col-4">
            <div class="form-outline">
                <input type="text" id="expiration-date" name="expiration-date" class="form-control form-control-lg @error('expiration-date') is-invalid @enderror"
                       placeholder="MM/YYYY" minlength="7" maxlength="7" value="{{ old('expiration-date') }}" required />
                <label class="form-label" for="expiration-date">Expire</label>
                @error('expiration-date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="form-outline">
                <input type="password" id="cvv" name="cvv" class="form-control form-control-lg @error('cvv') is-invalid @enderror"
                       placeholder="CVV" minlength="3" maxlength="3" value="{{ old('cvv') }}" required/>
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
                    @error('amount-card') is-invalid @enderror" value="{{ old('amount-card') }}" step="0.01" required />
                <label class="form-label" for="amount-card">Amount</label>
                @error('amount-card')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
