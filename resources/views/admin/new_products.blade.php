<form action="{{ route('dashboard.product_add') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom du produit </label>
        <input name="name" type="text" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" type="password" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1"></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prix du produit </label>
        <input name="price" type="text" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Le produit sera t-il visible sur la
            boutique</label>
        <select name="publish" id="">
            <option value=1>oui</option>
            <option value=0>non</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Le produit sera t-il en solde</label>
        <select name="product_status" id="">
            <option value=1>oui</option>
            <option value=0>non</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Référence du produit</label>
        <input name="product_reference" type="text" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Catégorie du produit</label>
        <select name="categorie_id" id="">
            @foreach ($categories as $c)
                <option value={{ $c->id }}>{{ $c->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image du produit</label>
        <input name="image" type="file" class="input-bordered input w-full max-w-xs" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tailles dans lequel le produit sera dispo</label>
            @foreach ($sizes as $s)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value={{ $s->id }} name="size[]">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $s->name }}
                </label>
            </div>
            @endforeach
    </div>
    <button type="submit" class="btn btn-primary mb-3">Ajouter un produit</button>
</form>


