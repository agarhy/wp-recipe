<div id="recipe-status"></div>
<form id="recipe-form">
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" id="r_inputTitle">
	</div>
		
	<div class="form-group">
		<label>Ingredients</label>
		<textarea type="text" class="form-control" id="r_inputIngredients"></textarea>
	</div>
	<div class="form-group">
		<label>Instructions</label>
		CONTENT_EDITOR
	</div>
	<div class="form-group">
		<label>Cooking Time Required <em>(in minutes)</em></label>
		<input type="number" class="form-control" id="r_inputTime">
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit Recipe</button>
	</div>
</form>