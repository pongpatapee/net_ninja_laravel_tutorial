@props(['highlight'])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
