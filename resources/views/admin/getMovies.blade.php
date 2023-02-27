<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>

<body>
    <ul>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>映画タイトル</td>
                    <td>画像URL</td>
                    <td>公開年</td>
                    <td>上映中かどうか</td>
                    <td>概要</td>
                    <td>登録日時</td>
                    <td>更新日時</td>
                </tr>
            </thead>
            <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->image_url }}</td>
                    <td>{{ $movie->published_year }}</td>
                    @if ($movie->is_showing)
                        <td>上映中</td>
                    @else
                        <td>上映予定</td>
                    @endif
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->created_at }}</td>
                    <td>{{ $movie->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
    </ul>
</body>

</html>
