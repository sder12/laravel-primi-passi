<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="my-2 text-center">
            <h4>This is the header</h4>
        </header>
        <main class="py-3">
            <h1>{{ $title }}</h1>
            <h4>{{ $subtitle }}</h4>
            <section>
                <ul>
                    @foreach ($array as $item)
                    <li>{{$item}}</li>
                    @endforeach                  
                </ul>
            </section>
        </main>
        <footer class="my-2 text-center">
            <h4>This is the footer</h4>
        </footer>
    </div>
</body>
</html>