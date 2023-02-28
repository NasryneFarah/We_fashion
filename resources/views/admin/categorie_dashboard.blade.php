<form action="{{ route('dashboard.categorie_add_form') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom de la catégorie </label>
        <input name="name" type="text" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1">
    </div>
</form>