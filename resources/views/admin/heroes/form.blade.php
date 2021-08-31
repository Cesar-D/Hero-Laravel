@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name"  @isset($heroes) value="{{$heroes->name}}" @endisset placeholder="Ingrese un nombre" required>
</div>
<div class="form-group">
    <label for="hp">Hp</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($heroes) value="{{$heroes->hp}}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>
<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($heroes) value="{{$heroes->atq}}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($heroes) value="{{$heroes->def}}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($heroes) value="{{$heroes->luck}}" @endisset placeholder="Ingrese los puntos de suerte" required>
</div>
<div class="form-group">
    <label for="coins">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($heroes) value="{{$heroes->coins}}" @endisset placeholder="Ingrese la cantidad de monedas" required>
</div>
<div class="form-group">
    <label for="img_path">Imagen</label>
    <input type="file" id="img_path" name="img_path">
</div>

