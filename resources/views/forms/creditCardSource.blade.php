<form action="{{ route('transactions.store') }}" method="POST" name="creditCardSourceForm">

    <div class="d-flex flex-row align-items-center mb-4 pb-1">
        <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
        <div class="flex-fill mx-3">
            <div class="form-outline">
                <input type="text" id="card-number" name="card-number" class="form-control form-control-lg"
                       placeholder="4123 4567 8912 3456" data-mdb-showcounter="true" minlength="16" maxlength="16" required />
                <label class="form-label" for="card-number">Card Number</label>
                <div class="form-helper"></div>
            </div>
        </div>
    </div>

    <div class="form-outline mb-4">
        <input type="text" id="card-holder" name="card-holder" class="form-control form-control-lg"
               placeholder="Anna Doe" required />
        <label class="form-label" for="card-holder">Cardholder's Name</label>
    </div>

    <div class="row mb-4">
        <div class="col-4">
            <div class="form-outline">
                <input type="text" id="expiration-date" name="expiration-date" class="form-control form-control-lg"
                       placeholder="MM/YYYY" minlength="7" maxlength="7" required />
                <label class="form-label" for="expiration-date">Expire</label>
            </div>
        </div>
        <div class="col-3">
            <div class="form-outline">
                <input type="password" id="cvv" name="cvv" class="form-control form-control-lg"
                       placeholder="CVV" minlength="3" maxlength="3" required/>
                <label class="form-label" for="cvv">CVV</label>
            </div>
        </div>
        <div class="col-5">
            <div class="form-outline">
                <i class="fas fa-dollar-sign trailing"></i>
                <input type="number" id="amount-card" name="amount-card" class="form-control form-icon-trailing form-control-lg" required />
                <label class="form-label" for="amount-card">Amount</label>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
