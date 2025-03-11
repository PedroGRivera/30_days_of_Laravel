<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div>
    <h1 class="font-bold text-lg">{{ $job['title'] }}</h1>
    <p>
        This position pays {{ $job['salary']}} per year.
    </p>
    </div>
</x-layout>