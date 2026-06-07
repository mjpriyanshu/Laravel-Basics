<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card mx-auto" style="max-width:700px;">
            <div class="card-body">
                <h1 class="h4 mb-3">Student Result</h1>
                <p class="mb-3">
                    <a href="{{ route('students.index') }}" class="btn btn-light btn-sm me-2">All Students</a>
                    <a href="{{ route('students.table') }}" class="btn btn-light btn-sm">Student Table</a>
                </p>

                @if ($student)
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <tbody>
                                <tr><th scope="row" style="width:30%">Name</th><td>{{ $student->name }}</td></tr>
                                <tr><th scope="row">Marks</th><td>{{ $student->marks }}</td></tr>
                                <tr><th scope="row">Result</th>
                                    <td>{{ $student->marks > 40 ? 'Pass' : 'Fail' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>No result found. Insert a student first.</p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>