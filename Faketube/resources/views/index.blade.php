<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faketube</title>
</head>
<body>
<h1>Danh sách kênh</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tên kênh</th>
        <th>Mô tả</th>
        <th>Số lượt đăng ký</th>
        <th>URL</th>
    </tr>

    @foreach ($channels as $channel)
        <tr>
            <td>{{ $channel->id }}</td>
            <td>{{ $channel->channelName }}</td>
            <td>{{ $channel->description }}</td>
            <td>{{ $channel->subscribersCount }}</td>
            <td>{{ $channel->url }}</td>
        </tr>
    @endforeach
</table>


</body>
</html>
