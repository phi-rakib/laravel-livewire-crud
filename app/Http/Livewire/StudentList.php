<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public $students;

    public function render()
    {
        $this->students = Student::latest()->get();

        return view('livewire.student-list');
    }
}
