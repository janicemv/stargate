<div id="astronomy-form" style="display: none;">
    <label for="astronomy-type">Astronomy Type</label>
    <input type="text" id="astronomy-type" name="type" required placeholder="Age, brightness...?">
<br><br>
    <label for="astronomy-description">Description</label>
    <textarea id="astronomy-description" name="description" required placeholder="Description"></textarea>
    <br><br>

    <label for="astronomy-reference">Reference</label>
    <textarea id="astronomy-reference" name="reference" required placeholder="Where did you get this information?"></textarea>
    <br><br>

    <label for="astronomy-url">URL (optional)</label>
    <input type="url" id="astronomy-url" name="url" placeholder="Enter a URL if available">
    <br><br>

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
</div>
