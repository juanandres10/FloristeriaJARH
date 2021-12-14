@csrf
<br>
	      <div class="form-group">
	        <label>Nombre jugador</label>
	        <input type="text" name="title" value="{{ old('title', $project->title) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Url del jugador</label>
	        <input type="text" name="url" value="{{ old('url', $project->url) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Descripcion del jugador</label>
	        <textarea name="description">{{ old('description', $project->description) }}</textarea>
	      </div>