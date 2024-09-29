<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Customers') }}
                    <a href="{{route('customers.create')}}" class="btn btn-sm btn-primary">
                    <i class="fa-solid fa-plus"></i>
                        {{ __('Add Customer') }}
                    </a>
                </div>

                <div class="card-body">
                    <livewire:customers-table />
                </div>
            </div>
        </div>
    </div>
</div>
