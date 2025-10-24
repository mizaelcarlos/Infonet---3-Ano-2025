<h1>Publicações</h1>
<p>{{ $avaliacao->likes }}</p>
<form  action="{{ route('like') }}" method="POST">
    @csrf
    <input type="hidden" name="publicacao_id" value="1">
    <button type="submit" class="btn btn-primary">
        <img src="{{ asset('flecha_cima_cheia.svg') }}" alt="Incrementar" style="width:20px; height:20px;">
    </button>
</form>

