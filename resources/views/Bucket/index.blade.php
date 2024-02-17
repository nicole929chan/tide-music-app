<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tide Music</title>
</head>
<body>
    <h1>s3 buckets</h1>
    <ul>
        @foreach ($buckets as $bucket)
            <li><a href="buckets/{{ $bucket['Name'] }}">{{ $bucket['Name'] }} </a> {{ $bucket['CreationDate'] }}</li>
        @endforeach
    </ul>
</body>
</html>