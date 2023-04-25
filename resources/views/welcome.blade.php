@extends('.layouts.main')

@section('content')
    <section class="search-top col-12">
        <img src="/img/gileade.png" class="fade-in-left" alt="foto Gileade Despachante">
        <div class="f-right">
            <h1 id="anim-typewriter"></h1>
            <form class="fade-in-up" action="/consultar" method="post">
                <input type="text" name="placa" placeholder="Placa ou renavam" required id="placa">
                <input type="text" name="celular" placeholder="Seu Celular" required id="celular">
                <button><ion-icon name="search-outline"></ion-icon> Consultar</button>
            </form>
        </div>
    </section>

    <section id="servicos">
        <div class="linha">
            <div class="iten">
                <div><ion-icon name="reader-outline"></ion-icon></div>
                <div>
                    <h2>Consulta Débitos Grátis</h2>
                    <p>Verifique, Ipva, Multas e todos os débitos pela Placa ou Renavam</p>
                </div>
            </div>
            <div class="iten">
                <div><ion-icon name="card-outline"></ion-icon></div>
                <div>
                    <h2>Pague em até 12X</h2>
                    <p>Regularize as pendências do seu carro de um jeito fácil e sem burocracia. Dá pra pagar em até 12 vezes, tudo seguro e tranquilo.</p>
                </div>
            </div>
        </div>
        <div class="linha">
        <div class="iten">
                <div><ion-icon name="document-outline"></ion-icon></div>
                <div>
                    <h2>Documento Digital</h2>
                    <p>Após o pagamento, receba seu CRLV digital em até 48h.</p>
                </div>
            </div>
            <div class="iten">
                <div><ion-icon name="send-outline"></ion-icon></div>
                <div>
                    <h2>Opções de Envio</h2>
                    <p>Podemos enviar seu documento conforme sua preferência, e-mail, whatsapp ou até correios.</p>
                </div>
            </div>
        </div>
    </section>



    <div class="contact-online">
        <div class="banner">Olá! Eu posso te ajudar?</div>
        <div class="img-contact"></div>
    </div>
@endsection