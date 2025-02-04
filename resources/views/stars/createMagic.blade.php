<x-layout>
    <x-page-heading>Add magical Data</x-page-heading>

    <x-forms.form method="POST" action="/stars/store/magic">
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


        <x-forms.input label="Planets" name="planets" placeholder="Planets associated with this star" />

        <x-forms.input label="Metals" name="metals" placeholder="Metals associated with this star" />

        <x-forms.input label="Gemstones" name="gemstones" placeholder="Gemstones associated with this star" />

        <x-forms.input label="Plants" name="plants" placeholder="Plants associated with this star" />

        <x-forms.input label="Description" name="description" placeholder="Descriptions associated with this star" />

        <x-forms.input label="Angel" name="angel" placeholder="Angel associated with this star" />

        <x-forms.input label="Colors" name="colors" placeholder="Colors associated with this star" />

        <x-forms.input label="Invocation" name="invocation" placeholder="Invocations associated with this star" />

        <x-forms.input label="Additional Info" name="additional_info" placeholder="Other magical information about this star" />

        <x-forms.input label="Magic" name="gemstones" placeholder="Magical effects of this star" />


        <x-forms.input label="Reference" name="reference" placeholder="Where did you get this information?" />

        <x-forms.input label="URL" name="url" placeholder="Enter a URL if available" />



        <x-forms.button>Submit</x-forms.button>

    </x-forms.form>



</x-layout>