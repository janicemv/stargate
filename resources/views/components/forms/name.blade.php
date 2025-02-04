<div id="name-form" style="display: none;">
   
        <label for="star-name">Star Name</label>
        <input type="text" id="star-name" name="name" required placeholder="Enter the name of the star">
    <br><br>
        <label for="reference">Reference</label>
        <textarea id="reference" name="reference" required placeholder="Enter reference for this name"></textarea>
    
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    
    </div>
    
</div>
