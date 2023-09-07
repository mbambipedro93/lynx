<form method="POST" action="{{ route('store-event') }}">
    @csrf
    <label for="title">Titre de l'événement :</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Description de l'événement :</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <button type="submit">Créer l'événement</button>
</form>
