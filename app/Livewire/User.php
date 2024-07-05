<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;


class User extends Component
{
    use WithPagination;
    public $search = '';
    public function updatingSearch(){

        $this->resetPage();
    }

    public function fetchUsers(Request $request)
    {
        // Retrieve the search term and pagination settings from the request
        $search = $request->input('search', '');
        $paginate = $request->input('paginate', 2);
        $page = $request->input('page', 1);

        // Set the current page for pagination
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        // Check if search term is null or an empty string
        if (empty($search)) {
            // If search term is null or empty, return all users paginated
            $users = ModelsUser::paginate($paginate);
        } else {
            // Search for users based on the search term and paginate results
            $users = ModelsUser::where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->paginate($paginate);
        }
        // Check if the request expects a JSON response (API request)
        if ($users) {
            return $users;
        }

        return response()->json(['message' => 'No data found'], 404);
    }
    public function render()
    {

        return view('livewire.user',[
            'users' => ModelsUser::search(['name', 'email'], $this->search, 'contains', 'or')->paginate(5),
        ]);;

        // $users = ModelsUser::paginate(5);

        // return view('livewire.user', [
        //     'users' => $users,
        // ]);
    }
}
