<x-layout>
    <x-section>
        <x-page-heading>Search for a Star or Constellation</x-page-heading>

        <div class="mx-auto max-w-2xl text-center justify-center">
            <div class="sm:mb-8 flex justify-center">
                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Search" />
                    <x-forms.button>Search</x-forms.button>
                </x-forms.form>
            </div>
    </x-section>
</x-layout>