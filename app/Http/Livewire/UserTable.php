<?php

namespace App\Http\Livewire;

use App\Exports\UsersExport;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    public $type;

    public array $bulkActions = [
        'exportSelected' => 'Export'
    ];

    public function exportSelected()
    {

        if ($this->selectedRowsQuery->count() > 0) {
            session()->put('message', 'Please download the CSV file');
            return (new UsersExport($this->selectedRowsQuery))->download('Exported_users_'.date('Y-m-d-hi').'.xlsx');
        }

        session()->put('danger', 'You did not select any users to export.');
        return false;
    }

    public function columns(): array
    {
        return [
            Column::make('Id')->searchable()->sortable(),
            Column::make('Full Name', 'name')->searchable()->sortable(),
            Column::make('Email Address', 'email')->searchable()->sortable(),

            Column::make('Created At')->searchable()->sortable(),
            Column::make('Updated At')->searchable()->sortable(),
            Column::make('Record Blood Pressure')->hideIf(!(request()->type === User::ENUM_TYPES_TO_LOWER_CASE[User::TYPE_PATIENT])),
        ];
    }

    public function mount(){
        $this->type = request()->type;
    }

    public function query(): Builder
    {
    return User::where('type', 'PATIENT');
       // return User::query()
        //        ->when(array_key_exists($this->type, User::LOWER_CASE_TYPES_TO_ENUM), fn ($query) => $query->where('type', User::LOWER_CASE_TYPES_TO_ENUM[$this->type]), fn($query) => $query->whereNotIn('type', User::TYPES));
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.user_table';
    }
}
