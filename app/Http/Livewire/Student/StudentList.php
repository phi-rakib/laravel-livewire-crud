<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $perPage = 10;

    public function render()
    {
        return view('livewire.student.student-list', [
            'students' => Student::latest()->paginate($this->perPage)
        ]);
    }
}
