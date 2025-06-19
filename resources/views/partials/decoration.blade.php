@php
    $positions = [['side' => 'left', 'rotate' => ''], ['side' => 'right', 'rotate' => 'rotate-180']];
@endphp

@foreach ($positions as $pos)
    <div class="hidden sm:block fixed top-0 {{ $pos['side'] }}-0 h-full z-0 pointer-events-none select-none">
        <img src="{{ asset('img/daun.png') }}" alt="Daun {{ ucfirst($pos['side']) }}"
            class="h-full w-auto object-contain {{ $pos['rotate'] }}" loading="lazy">
    </div>
@endforeach
