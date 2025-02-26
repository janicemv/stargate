<x-layout>
    <x-page-heading>Add Keywords</x-page-heading>

    <x-forms.form method="POST" action="/stars/store/keywords">
        @csrf

        <!-- Star Selection -->
        <div>
            <x-section-title>Choose a Star<x-sup>*</x-sup></x-section-title>

            <label for="star" hidden>Select Star<x-sup>*</x-sup></label>

            <input list="stars" name="star" id="star" required placeholder="Choose a Star">
            <datalist
                class="rounded-2xl bg-white/10 focus:outline-none focus:ring-purple w-full dark:bg-purple dark:border-gray dark:text-gray-light dark:focus:border-purple-medium dark:focus:ring-1 dark:focus:ring-purple"
                id="stars">
                @foreach ($stars as $star)
                <option value="{{ $star->name }}" data-id="{{ $star->id }}"></option>
                @endforeach
            </datalist>
            <input type="hidden" name="star_id" id="star_id">

        </div>



        <x-forms.input label="Keywords (comma separated)*" name="keywords" required placeholder="Love, Protection, Healing..." />



        <x-forms.button>Submit</x-forms.button>

    </x-forms.form>



</x-layout>