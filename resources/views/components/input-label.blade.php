@props(['value'])

<label {{ $attributes->merge(['class' => '
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    color: #666666;
    outline:none']) }}>
    {{ $value ?? $slot }}
</label>
{{-- <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label> --}}
