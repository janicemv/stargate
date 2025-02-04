<div id="magic-form" style="display: none;">
    {{-- <label for="magic-type">Magic Type</label>
    <input type="text" id="magic-type" name="type" required placeholder="Enter the type of magic information">
<br><br> --}}
    <label for="magic-planets">Planets (optional)</label>
    <input type="text" id="magic-planets" name="planets" placeholder="Enter planets associated with the star">
    <br><br>

    <label for="magic-metals">Metals (optional)</label>
    <input type="text" id="magic-metals" name="metals" placeholder="Enter metals associated with the star">
    <br><br>

    <label for="magic-gemstones">Gemstones (optional)</label>
    <input type="text" id="magic-gemstones" name="gemstones" placeholder="Enter gemstones associated with the star">
    <br><br>

    <label for="magic-plants">Plants (optional)</label>
    <input type="text" id="magic-plants" name="plants" placeholder="Enter plants associated with the star">
    <br><br>

    <label for="magic-description">Description (optional)</label>
    <input type="text" id="magic-description" name="description" placeholder="Enter a description of the magic">
    <br><br>

    <label for="magic-angel">Angel (optional)</label>
    <input type="text" id="magic-angel" name="angel" placeholder="Enter the associated angel">
    <br><br>

    <label for="magic-colors">Colors (optional)</label>
    <input type="text" id="magic-colors" name="colors" placeholder="Enter the colors associated with the star">
    <br><br>

    <label for="magic-invocation">Invocation (optional)</label>
    <input type="text" id="magic-invocation" name="invocation" placeholder="Enter the invocation related to the star's magic">
    <br><br>

    <label for="magic-additional-info">Additional Info (optional)</label>
    <textarea id="magic-additional-info" name="additional_info" placeholder="Enter additional information"></textarea>
    <br><br>

    <label for="magic-magic">Magic Description (optional)</label>
    <textarea id="magic-magic" name="magic" placeholder="Enter a description of the magical attributes of the star"></textarea>
    <br><br>

    <label for="magic-reference">Reference</label>
    <textarea id="magic-reference" name="reference" required placeholder="Enter reference information"></textarea>
    <br><br>

    <label for="magic-url">URL (optional)</label>
    <input type="url" id="magic-url" name="url" placeholder="Enter a URL if available">

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
</div>
