<x-layout>
    <h2>Available ninjas</h2>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <p> {{ $ninja['name'] }} </p>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    View Details
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
