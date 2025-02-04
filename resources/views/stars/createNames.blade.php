<x-layout>
    <x-page-heading>Add Star Name</x-page-heading>

    <x-forms.form method="POST" action="/stars/store/name">
        @csrf

        <x-forms.error />
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

        <x-forms.input label="Name *" name="name" placeholder="The Follower, Dog Star, 9 Canis Majoris..." />


    <x-forms.input label="Reference *" name="reference" placeholder="Where did you get this information?" />

    <x-forms.input label="URL" name="url" placeholder="Enter a URL if available" />


    <x-forms.button>Submit</x-forms.button>

    </x-forms.form>

</x-layout>