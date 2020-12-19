@props(['color' => 'gray'])

<div class="container mx-auto">
    <div {{ $attributes->merge(["class" => "bg-{$color}-300 border-t-8 border-{$color}-400 rounded-b px-4 py-3 shadow-xl"]) }} role="alert">
        <div class="flex">
            <svg class="h-6 w-6 fill-current text-{{ $color }}-900 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
            <div>
                <p class="text-{{ $color }}-800 font-bold">{{ $title }}</p>
                <p class="text-{{ $color }}-700 text-md">{{ $slot }}</p>
            </div>
        </div>
    </div>
</div><!-- /.container -->
