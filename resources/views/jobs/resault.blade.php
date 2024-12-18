<x-layout>
    <div class="space-y-10 pt-6">
        <section>
            <x-forms.text-heading>RESAULT</x-forms.text-heading>
            <div class="grid gap-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>