@props(['active' => false, 'href' => '#', 'label'])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'group relative inline-block px-3 py-2 text-lg font-medium']) }}
    aria-current="{{ $active ? 'page' : false }}">
    <span class="{{ $active ? 'text-[#028b2b]' : 'text-black group-hover:text-[#028b2b]' }}">
        {{ $label }}
    </span>
    <span
        class="absolute bottom-0 left-1/2 h-[2px] w-full origin-center scale-x-0 bg-[#028b2b] transition-transform duration-300 group-hover:scale-x-100 transform -translate-x-1/2">
    </span>
</a>
