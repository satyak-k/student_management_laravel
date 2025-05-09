<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Details</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <h2>Student Details</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->student_name }}</h5>
                        <p class="card-text"><strong>Class Teacher:</strong> {{ $student->teacher->teacher_name }}</p>
                        <p class="card-text"><strong>Class:</strong> {{ $student->class }}</p>
                        <p class="card-text"><strong>Admission Date:</strong> {{ $student->admission_date }}</p>
                        <p class="card-text"><strong>Yearly Fees:</strong> {{ $student->yearly_fees }}</p>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </body>
        </html>