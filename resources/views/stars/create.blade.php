<x-layout>
    <x-page-heading>Add Star Info</x-page-heading>

    <x-forms.form method="POST" action="/stars">
        @csrf

        <!-- Star Selection -->
        <div>
            <x-section-title>Choose a Star</x-section-title>

            <label for="star_id">Select Star</label>
            <input list="stars" name="star_id" id="star_id" required placeholder="Choose a Star">
            <datalist id="stars">
                @foreach ($stars as $star)
                    <option value="{{ $star->name }}" data-id="{{ $star->id }}"></option>
                @endforeach
            </datalist>
        </div>


        {{-- Type of Info --}}
        <div>
            <x-section-title>Which type of info do you want to add?</x-section-title>
            <label for="info-type-astronomy">
                <input type="radio" id="info-type-astronomy" name="info_type" value="astronomy">
                Astronomy
            </label>
            <label for="info-type-name">
                <input type="radio" id="info-type-name" name="info_type" value="name">
                Name
            </label>
            <label for="info-type-magic">
                <input type="radio" id="info-type-magic" name="info_type" value="magic">
                Magic
            </label>
            <label for="info-type-astronomy">
                <input type="radio" id="info-type-keywords" name="info_type" value="keywords">
                Keywords
            </label>
        </div>

        <x-forms.astronomy />

        <x-forms.name />

        <x-forms.magic />

        <x-forms.keywords />

            <x-forms.button>Submit</x-forms.button>

    </x-forms.form>



</x-layout>
