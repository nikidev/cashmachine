<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <input type="hidden" name="form-name" value="CashTransaction">
    <div class="mb-5">
        <label class="col-2 form-label fs-5">Choose an amount</label>
        <label class="btn btn-secondary form-label fs-5">
            <input type="radio" name="amount-option" id="amount-option1" value="1" checked required> <i class="fas fa-dollar-sign"></i> 1
        </label>
        <label class="btn btn-secondary form-label fs-5">
            <input type="radio" name="amount-option" id="amount-option5" value="5" required> <i class="fas fa-dollar-sign"></i> 5
        </label>
        <label class="btn btn-secondary form-label fs-5">
            <input type="radio" name="amount-option" id="amount-option10" value="10" required> <i class="fas fa-dollar-sign"></i> 10
        </label>
        <label class="btn btn-secondary form-label fs-5">
            <input type="radio" name="amount-option" id="amount-option50" value="50" required> <i class="fas fa-dollar-sign"></i> 50
        </label>
        <label class="btn btn-secondary form-label fs-5">
            <input type="radio" name="amount-option" id="amount-option100" value="100" required> <i class="fas fa-dollar-sign"></i> 100
        </label>
    </div>
    @error('amount-option')
        <div class="text-danger text-center mb-5">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
</form>
