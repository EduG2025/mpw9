<div class="d-flex flex-wrap gap-3 justify-content-center my-6"> 
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Bold" data-option="bold">
        <i class="bi bi-type-bold"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Italic" data-option="italic">
        <i class="bi bi-type-italic"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Underline" data-option="underline">
        <i class="bi bi-type-underline"></i>
    </button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Strikethrough" data-option="strikeThrough">
        <i class="bi bi-type-strikethrough"></i>
    </button>

    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Sans Serif" data-option="sansserif">𝖳</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Cursive" data-option="cursive">𝒯</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Doublestruck" data-option="doublestruck">𝕋</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8" data-ra-title="Doublestruck 2" data-option="doublestruckAlt">⍑</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Gothic" data-option="gothic">𝔗</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Circled" data-option="circled">Ⓣ</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Circled Negative" data-option="circledDark">🅣</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Squared" data-option="squared">🅃</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip fw-light w-8" data-ra-title="Squared Negative" data-option="squaredDark">🆃</button>
    <button class="btn rounded-1 px-2 py-2 ra-tooltip w-8 emoji">😊</button>
</div>
			
<label for="inputText" class="form-label">{{__('Text Message')}}</label>
<textarea id="inputText" name="message" class="form-control" cols="30" rows="15" required></textarea>
<label for="footer" class="form-label mt-2">{{__('Footer message *optional')}}</label>
<input type="text" name="footer" class="form-control" id="footer">