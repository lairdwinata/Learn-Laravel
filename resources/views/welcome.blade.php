<!doctype html>
<html>
    <head>

        <title>Hello Bello</title>


    </head>

    <body>

        <ul>

          @foreach ($tasks as $task)

              <li>{{ $task->body }} </li>

          @endforeach

        </ul>

    </body>
</html>
