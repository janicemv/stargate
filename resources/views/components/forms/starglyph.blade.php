<div id="glyph-form" style="display: none;">
   
    <label for="star-glyph">Stellar Glyph</label>
    <input type="file" id="star-glyph" name="glyph" accept="image/png" required placeholder="Select the image of the star (.png)">
<br><br>
<label for="magic-description">Description</label>
    <input type="text" id="magic-description" name="description" required placeholder="Agrippa's Sygil of [name of the star]">
    <br><br>
    
    <label for="reference">Reference</label>
    <textarea id="reference" name="reference" required placeholder="The Complete Picatrix: The Occult Classic of Astrological Magic Liber Atratus Edition"></textarea>
    <br><br>

    <label for="magic-url">URL (optional)</label>
    <input type="url" id="glyph-url" name="url" placeholder="Enter a URL of the reference, if available">

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

</div>

</div>
