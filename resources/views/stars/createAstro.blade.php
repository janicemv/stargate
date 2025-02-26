<x-layout>
    <x-page-heading>Add Astronomical Data</x-page-heading>

    <x-forms.form method="POST" action="/stars/store/astro">
        @csrf

        <!-- Star Selection -->
        <div>
            <x-section-title>Choose a Star<x-sup>*</x-sup></x-section-title>

            <label for="star" hidden>Select Star<x-sup>*</x-sup></label>

            <input list="stars" name="star" id="star" required placeholder="Choose a Star">
            <datalist
                class="rounded-2xl bg-white/10 focus:outline-none focus:ring-purple w-full dark:bg-purple dark:border-gray dark:text-gray dark:focus:border-purple-medium dark:focus:ring-1 dark:focus:ring-purple"
                id="stars">
                @foreach ($stars as $star)
                    <option value="{{ $star->name }}" data-id="{{ $star->id }}"></option>
                @endforeach
            </datalist>
            <input type="hidden" name="star_id" id="star_id">

        </div>


        <x-forms.input label="Type of info *" name="type" required placeholder="Age, brightness, Stellar system...?" />

        <x-forms.input label="Description *" name="description" required placeholder="Description" />

        <x-forms.input label="Reference *" name="reference" required placeholder="Where did you get this information?" />
        <x-forms.form-ref />
            

        <x-forms.input label="URL" name="url" placeholder="Enter a URL if available" />
        <x-forms.form-url-legend />



        <x-forms.button>Submit</x-forms.button>

    </x-forms.form>



</x-layout>
