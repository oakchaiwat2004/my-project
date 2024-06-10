<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Roles as ModelsRoles;

class DataTable extends Component
{
    public function render()
    {

        $roles = ModelsRoles::all();

        return view('livewire.data-table', [
            'roles' => $roles,
        ]);
    }
}
