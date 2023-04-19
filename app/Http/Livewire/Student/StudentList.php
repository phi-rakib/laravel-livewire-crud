<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.student.student-list', [
            'students' => Student::latest()->paginate(5)
        ]);
    }
}
