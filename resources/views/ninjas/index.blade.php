<x-layout>
    <h2>Available ninjas</h2>

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja->skill > 70">
                    <h3>{{ $ninja->name }}</h3>
                    <p>{{ $ninja->dojo->name }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $ninjas->links() }}
</x-layout>
