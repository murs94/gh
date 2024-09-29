<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Add Customers') }}
                    <button class="btn btn-sm btn-primary" onclick="history.back()"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingCustomer" placeholder="customer name" wire:model="name">
                                    <label for="floatingCustomer">Customer name.</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('tel_no') is-invalid @enderror" id="floatingTelNo" placeholder="Tel No." wire:model="tel_no">
                                    <label for="floatingTelNo">Tel No.</label>
                                    @error('tel_no') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="floatingAddress" placeholder="Address." wire:model="address">
                            <label for="floatingAddress">Address.</label>
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <select class="form-select @error('state') is-invalid @enderror" id="floatingState" aria-label="select state" wire:model="state">
                                        @foreach (config('selectoption.states') as $state)
                                            <option value="{{ $state['State'] }}">{{ __($state['State']) }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingState">State</label>
                                    @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <select class="form-select @error('country') is-invalid @enderror" id="floatingCountry" aria-label="select country" wire:model="country">
                                        <option value="Malaysia" selected>Malaysia</option>
                                    </select>
                                    <label for="floatingCountry">Country</label>
                                    @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
