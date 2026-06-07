<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card mx-auto" style="max-width:900px;">
            <div class="card-body">
                <h1 class="h4 mb-3">All Students</h1>
                <p class="mb-3">
                    <a href="{{ route('students.insert') }}" class="btn btn-light btn-sm me-2">Insert</a>
                    <a href="{{ route('students.table') }}" class="btn btn-light btn-sm me-2">View Table</a>
                    <a href="{{ route('students.result') }}" class="btn btn-light btn-sm">View Result</a>
                </p>

                @if ($students->isEmpty())
                    <p>No students found.</p>
                @else
                    <ul class="list-group">
                        @foreach ($students as $student)
                            <li class="list-group-item">{{ $student->name }} <span class="text-muted">- Roll No: {{ $student->rollno }}</span></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</body>
</html>