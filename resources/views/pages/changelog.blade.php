<x-filament::page>
    @foreach($releases as $release)
        <x-filament::card header="{{ $release['name'] }}">
            <article class="prose">
                {!! \Illuminate\Support\Str::markdown($release['body']) !!}
            </article>
        </x-filament::card>
    @endforeach
</x-filament::page>