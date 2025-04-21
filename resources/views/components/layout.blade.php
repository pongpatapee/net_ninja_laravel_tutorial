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
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>Ninja Network</h1>

            <a href="{{ route('ninjas.index') }}">All Ninjas</a>
            <a href="{{ route('ninjas.create') }}">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{-- Refers whatever content this will eventually wrap --}}
        {{ $slot }}
    </main>

</body>

</html>
