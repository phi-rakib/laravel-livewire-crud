<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.student-list', [
            'students' => Student::latest()->paginate(5)
        ]);
    }
}
