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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            SMC Website
        </div>
        <h3>Hello - <?php echo $name; ?></h3>
        <h4>
            @foreach ($tasks as $task)
            <li>
                {{ $task->body }}
            </li>
            @endforeach
        </h4>
    </div>
</div>
</body>
</html>

