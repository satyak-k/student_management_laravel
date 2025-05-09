<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Student List</h2>
        <div class="mb-3">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
        </div>

        <div class="mb-3">
            <form action="{{ route('students.index') }}" method="GET">
                <input type="text" name="search" class="form-control" placeholder="Search by Name or Class" value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-outline-secondary mt-2">Search</button>
            </form>
        </div>

        <table id="studentTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class Teacher</th>
                    <th>Class</th>
                    <th>Admission Date</th>
                    <th>Yearly Fees</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->student_name }}</td>
                        <td>{{ $student->teacher->teacher_name }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->admission_date }}</td>
                        <td>{{ $student->yearly_fees }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $students->links() }}  </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#studentTable').DataTable();
        } );
    </script>
</body>
</html>
