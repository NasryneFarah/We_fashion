<form action="{{ route('dashboard.categorie_edit') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="hidden" name="id" value="{{$categorie->id}}">
        <label for="exampleFormControlInput1" class="form-label">Nom du produit </label>
        <input name="name" type="text" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1" value="{{$categorie->name}}">
        <button type="submit">Modifier</button>
    </div>
</form>