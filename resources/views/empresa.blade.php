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
@endsection