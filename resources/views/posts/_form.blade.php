@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Título</label>
<input type="text" name="title" id="title" class="rounded border-gray-200 w-full mb-4" value="{{ $post->title }}">

<label for="content" class="uppercase text-gray-700 text-xs">Contenido</label>
<textarea name="body" id="content" cols="30" rows="5" class="rounded border-gray-200 w-full mb-4">{{ $post->body }}</textarea>

<div class="flex item-center justify-between">
  <a href="{{ route('posts.index') }}" class="text-indigo-600" >Volver</a>

  <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2 cursor-pointer"/>
</div>