<x-layout>
    <div class="space-y-10 pt-6">
        <section class="text-center grid gap-12 ">
            <h1 class="font-bold text-4xl ">Let's Find Your Job</h1>
            <x-forms.form action="/search">
        <x-forms.input :label="false" name="search" placeholder="WEB DEV...." />
            </x-forms.form>
        </section>
        <section>
            <x-section-heading>Top Job</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 ">
                @foreach ($jobs as $job )
                @if ($job->featured)
                <x-job-card :$job />
                @endif
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>TAGS</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                <x-tag :$tag />
                @endforeach
            </div>

        </section>
        <section>
            <x-section-heading>FIND A JOB</x-section-heading>
            <div class="grid gap-6">
                @foreach($jobs as $job )
                <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>