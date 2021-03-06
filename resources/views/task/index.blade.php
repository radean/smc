<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Saudi Maritime Company</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h4>
            @foreach ($tasks as $task)
            <a href="tasks/{{$task->id}}">
                <li>
                    {{ $task->body }}
                </li>
            </a>
            @endforeach
        </h4>
    </div>
</div>
</body>
</html>

