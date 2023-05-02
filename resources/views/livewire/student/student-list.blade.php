<div class="row justify-content-center">
    <div class="card">
        <h3 class="card-header">
            Students
        </h3>
        <div class="card-body">
            <h5 class="card-title">Student List</h5>
            <div class="card-text">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($students->perPage() * ($students->currentPage() - 1)) + 1
                        @endphp
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->department }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $students->links() }}
    </div>
</div> 