<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stargate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <h1>List of Stars</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Constellation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stars as $star)
            <tr>
                <td>{{ $star->proper_names }}</td>
                <td>{{ $star->designation }}</td>
                <td>{{ $star->constellation->abbrev }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>