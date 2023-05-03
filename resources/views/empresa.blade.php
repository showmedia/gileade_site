@extends('.layouts.main')

@section('content')
    <section id="empresas">
        <h1>As vantagens que a sua frota precisa esta aqui</h1>
        <div class="row">
            <div class="col-md-8 imagens">
                <img class="frota01" src="/img/frota04.png" alt="">
                <img class="frota02" src="/img/frota01.png" alt="">
                <img class="frota03" src="/img/frota02.png" alt="">
                <img class="frota04" src="/img/frota05.png" alt="">
                <img class="frota05" src="/img/frota03.png" alt="">
            </div>
            <div class="col-md-4 lista-empresas">
                <ul>
                    <li><span class="checkmark">&#10003;</span>Concessionárias</li>
                    <li><span class="checkmark">&#10003;</span>Locadoras</li>
                    <li><span class="checkmark">&#10003;</span>Agências</li>
                    <li><span class="checkmark">&#10003;</span>Transportadoras</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="infoempresas">
        <div class="d-flex">
            <div><img src="/img/gile-empresa.png" alt=""></div>
            <div>
                <h2>Queremos te ajudar</h2>
                <h5>Se você é uma transportadora, agência, concessionária ou qualquer outro tipo de empresa que lida com a burocracia de licenças, documentos e autorizações, sabe o quão difícil pode ser manter tudo em dia. É por isso que um serviço de despachante pode ser uma solução ideal para você.</h5>
            </div>
        </div>
    </section>
    <section id="info2">
        <div class="d-flex">
            <div class="texto">
                <h5>Ao contratar o nosso serviço de despachante, você terá acesso a uma equipe altamente qualificada e experiente, que trabalha para garantir que todas as suas obrigações legais sejam cumpridas com eficiência e rapidez. Nós cuidamos de tudo, desde a obtenção de licenças e autorizações até a renovação de documentos e pagamentos de taxas.</h5>
            </div>
            <div>
                <img src="/img/equipe.png" alt="">
            </div>
        </div>
    </section>
@endsection