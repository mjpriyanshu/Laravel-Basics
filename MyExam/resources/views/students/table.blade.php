<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card mx-auto" style="max-width:900px;">
            <div class="card-body">
                <h1 class="h4 mb-3">Student Details Table</h1>
                <p class="mb-3">
                    <a href="{{ route('students.index') }}" class="btn btn-light btn-sm me-2">All Students</a>
                    <a href="{{ route('students.result') }}" class="btn btn-light btn-sm">Result Page</a>
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->rollno }}</td>
                                    <td>{{ $student->subject }}</td>
                                    <td>{{ $student->marks }}</td>
                                    <td>{{ $student->grade }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No student data found. Visit the insert page first.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>