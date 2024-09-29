<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Customer;

class CustomersTable extends DataTableComponent
{
    protected $model = Customer::class;
    protected $index = 0, $page;

    public function mount()
    {
        $this->index = $this->page > 1 ? ($this->page - 1) * $this->perPage : 0;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPaginationEnabled(true);
    }

    public function columns(): array
    {
        return [
            Column::make("No",'id')
            ->format(fn () => ++$this->index),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Tel No.", "tel_no")
                ->sortable(),
            Column::make("State", "state")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
