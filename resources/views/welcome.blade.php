@extends('.layouts.main')

@section('content')
    <section class="search-top col-12">
        <img src="/img/gileade.png" class="fade-in-left" alt="foto Gileade Despachante">
        <div class="f-right">
            <h1 id="anim-typewriter"></h1>
            <form class="fade-in-up" action="/consultar" method="post">
                <input type="text" name="placa" placeholder="Placa ou renavam do veículo" required id="placa">
                <input type="text" name="celular" placeholder="Seu Celular" required id="celular">
                <button><ion-icon name="search-outline"></ion-icon> Consultar</button>
            </form>
        </div>
    </section>



    <section class="contact-online">
        <div class="banner">Olá! Eu posso te ajudar?</div>
        <div class="img-contact"></div>
    </section>
@endsection