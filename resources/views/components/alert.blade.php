<div class="container mx-auto">
    <div {{ $attributes->merge(["class" => "bg-{$color}-200 border-l-8 border-r-8 border-{$color}-400 p-4"]) }} role="alert">
        <p class="text-{{ $color }}-900 font-bold">
            {{ $danger() ? $title . ' - ' . $danger() : $title }}
        </p>

        <p class="text-{{ $color }}-800">
            {{ $slot }}
        </p>
    </div>
</div>
