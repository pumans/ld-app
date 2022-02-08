<?php

namespace App\Http\Livewire;

use App\Models\Trello\Group;
use Livewire\Component;

class Trello extends Component
{
    public function render()
    {
        $groups = Group::orderBy("sort")->get();
        return view('livewire.trello', ['groups' => $groups]);
    }
}
