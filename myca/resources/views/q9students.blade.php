<!DOCTYPE html>
<html>
<head>
    <title>Students Marks</title>
</head>
<body>

    <h1>Students Marks</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Marks</th>
        </tr>

        @foreach($students as $name => $marks)
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $marks }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>

<!-- This is part of question 9 -->