@csrf
<br>
	      <div class="form-group">
	        <label>Nombre del ramo</label>
	        <input class="form-control" type="text" name="title" value="{{ old('title', $project->title) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Imagen del ramo</label>
	        <input class="form-control" type="text" name="imagen" value="{{ old('imagen', $project->imagen) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Precio del ramo</label>
	        <input class="form-control" type="number" name="precio" value="{{ old('precio', $project->precio) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Url del ramo</label>
	        <input class="form-control" type="text" name="url" value="{{ old('url', $project->url) }}">
	      </div>
	      <br>
	      <div class="form-group">
	        <label>Descripcion del ramo</label>
	        <textarea class="form-control" name="description">{{ old('description', $project->description) }}</textarea>
	      </div>