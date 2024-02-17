<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tide Music</title>
</head>
<body>
    <h1>Show Bucket Objects</h1>
    <p>
        @foreach ($contents as $object)
            <div>{{ $object['Key'] }}</div>
            @if ($object['url'])
                <img src="{{ $object['url'] }}" alt="#" width="120">
            @endif
        @endforeach
    </p>
</body>
</html>