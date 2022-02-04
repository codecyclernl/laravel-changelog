<x-filament::widget>
    <x-filament::card class="relative" heading="Latest version">
        <span class="text-xl font-medium">{{ $version['name'] }}</span>
        <article class="prose">
            {!! \Illuminate\Support\Str::markdown($version['body']) !!}
        </article>
    </x-filament::card>
</x-filament::widget>