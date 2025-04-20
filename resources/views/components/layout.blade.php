<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninjas</title>

    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav>
            <h1>Ninja Netowrk</h1>

            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{-- Refers whatever content this will eventually wrap --}}
        {{ $slot }}
    </main>

</body>

</html>
