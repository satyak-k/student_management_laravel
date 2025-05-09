<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add New Student</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <h2>Add New Student</h2>
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="student_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control @error('student_name') is-invalid @enderror" id="student_name" name="student_name" value="{{ old('student_name') }}" required>
                        @error('student_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="class_teacher_id" class="form-label">Class Teacher</label>
                        <select class="form-select @error('class_teacher_id') is-invalid @enderror" id="class_teacher_id" name="class_teacher_id" required>
                            <option value="">Select Teacher</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ old('class_teacher_id') == $teacher->id ? 'selected' : '' }}>{{ $teacher->teacher_name }}</option>
                            @endforeach
                        </select>
                        @error('class_teacher_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" value="{{ old('class') }}" required>
                        @error('class')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="admission_date" class="form-label">Admission Date</label>
                        <input type="date" class="form-control @error('admission_date') is-invalid @enderror" id="admission_date" name="admission_date" value="{{ old('admission_date') }}" required>
                        @error('admission_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="yearly_fees" class="form-label">Yearly Fees</label>
                        <input type="number" step="0.01" class="form-control @error('yearly_fees') is-invalid @enderror" id="yearly_fees" name="yearly_fees" value="{{ old('yearly_fees') }}" required>
                        @error('yearly_fees')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </body>
        </html>
        