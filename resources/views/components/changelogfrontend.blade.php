<article class="prose">
    <h3 class="text-xl font-bold">{{ $version['name'] }}</h3>
    {!! \Illuminate\Support\Str::markdown($version['body']) !!}
</article>