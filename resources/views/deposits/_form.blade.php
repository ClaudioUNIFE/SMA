
<div>
    <label for="collocazione">Collocazione:</label>
    <input type="text" id="collocazione" name="collocazione" value="{{ old('collocazione', $deposit->collocazione ?? '') }}">
</div>
<div>
    <label for="deposito">Deposito:</label>
    <input type="text" id="deposito" name="deposito" value="{{ old('deposito', $deposit->deposito ?? '') }}">
</div>
<div>
    <label for="codice_stanza">Codice Stanza:</label>
    <input type="text" id="codice_stanza" name="codice_stanza" value="{{ old('codice_stanza', $deposit->codice_stanza ?? '') }}">
</div>

