@extends('.layouts.main')

@section('content')
    <section id="search-top" class="search-top col-12">
        <img src="/img/gileade.png" class="fade-in-left" alt="foto Gileade Despachante">
        <div class="f-right">
            <h1 id="anim-typewriter"></h1>
            <form class="fade-in-up" action="/consultar" method="get">
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
                    <h2>Pague em até 18X</h2>
                    <p>Regularize as pendências do seu carro de um jeito fácil e sem burocracia. Dá pra pagar em até 188 vezes, tudo seguro e tranquilo.</p>
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

    <section id="parcelas">
        <div class="title">
            <h1>Procurando uma forma de parcelar o seu documento? Aqui temos o que você precisa.</h1>
        </div>
        <div class='txt'>
            <p>
                <span >Pague com facilidade em até</span> <br> <strong>18x</strong>
            </p>
        </div>
    </section>

    <section id="ipva">
        <div class="f-left">
            <div class="d-block">
            <h2>Atrasou o IPVA?</h2>
            <span id="anim-typewriter2"></span>
            <div class="imgs">
                <img src="/img/detran.png" alt="">
                <img src="/img/rendimento.png" alt="">
            </div>
            <a target="_blanck" href="https://wa.me/5511959658312">Eu quero FACILIDADE</a>
            </div>
            
        </div>
        <img class="img-gile" src="/img/img-pens.png" alt="">
    </section>

    <section id="quemsomos">
        <h1>
            Quem Somos
        </h1>

        <p>
        A empresa Gileade Despachante é reconhecida e consolidada no mercado, sendo uma referência em serviços de despachante veicular. Com mais de duas décadas de experiência no ramo, a empresa possui um histórico comprovado de sucesso na solução de problemas relacionados à documentação de veículos. <br> <br>

A nossa equipe é altamente capacitada e treinada para lidar com as mais diversas situações e demandas dos clientes, desde problemas mais simples até questões mais complexas. Com atendimento personalizado e eficiente, a empresa busca oferecer soluções práticas e ágeis para garantir a satisfação dos seus clientes. <br><br>

Possuindo um amplo conhecimento sobre as leis e regulamentações do setor, o que permite oferecer um serviço de alta qualidade e confiabilidade aos seus clientes. Além disso, a empresa investe constantemente em tecnologia e inovação, para aprimorar seus processos e oferecer um serviço ainda mais eficiente e ágil. <br><br>

Dessa forma, se você busca uma empresa de despachante veicular confiável e experiente, a Gileade Despachante é a escolha ideal para solucionar seus problemas com documentação de veículos. Conte com uma equipe altamente capacitada e comprometida em oferecer o melhor atendimento e serviço possível, sempre buscando a satisfação total dos seus clientes.
        </p>
    </section>

    <section id="perguntas" class="row">
        <col-12>
            <h1 class="text-center">Dúvidas frequentes</h1>
        </col-12>
        <div class="perg col-md-7">
            <ul>
                <li class="li-pai"><span>Qual o prazo para entrega do documento digital (CRLV-e)?</span>
                    <ul>
                        <li><span>Após a aprovação do pedido, nós emitiremos o CRLV Digital do seu veículo e enviaremos por e-mail em até 48 horas, exceto nos casos de estar na lista de devedores do estado ou ter Multas Renainf.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>O que é Documento Digital?</span>
                    <ul>
                        <li><span>Quando falamos de documento digital, estamos nos referindo ao CRLV (aquele certificado que era impresso em papel-moeda e entregue pelos Correios após a normalização do licenciamento). Agora, esse documento se tornou digital e pode ser utilizado em dispositivos móveis ou impresso em folha sulfite comum (A4).</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>O que é CRV?</span>
                    <ul>
                        <li><span>CRV é o certificado de registro de veículo, também conhecido como recibo de compra e venda, utilizado para transferência de veículo.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>A partir de quando eu posso licenciar o meu veículo?</span>
                    <ul>
                        <li><span>O licenciamento anual do veículo pode ser feito no inicio de cada ano, porém para fazê-lo, é necessário quitar todos os débitos de multas e IPVA, então caso for pagar o IPVA parcelado, é possível fazer o licenciamento após quitar as parcelas.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>Perdi meu CRV, e agora?</span>
                    <ul>
                        <li><span>Se o seu CRV ainda não é digital, e você perdeu, será necessário uma segunda via do mesmo, antes de um processo de transferência, para isso você irá precisar de uma declaração de perda reconhecida em cartório, documentos do proprietário, comprovante de endereço, e um laudo fotográfico.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>Comprei um veículo, o que preciso pra transferir pro meu nome?</span>
                    <ul>
                        <li><span>Você precisa do CRV preenchido em seu nome, e reconhecido firma em cartório, pelo vendedor, e por você, seus documentos pessoais RG, CPF, e um comprovante de endereço atual em seu nome, e fazer um laudo de transferência.</span></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ainda col-md-5">
            <div>
            <p>
                A dúvida de muito de nossos clientes, também pode ser a sua, então separamos aqui a resposta das perguntas feitas com frequência por nossos clientes. <br><br>
                Ainda tem alguma dúvida?
            </p>
            <a target="_blanck" href="https://wa.me/5511959658312">Tire Agora!</a>
            </div>
        </div>
    </section>
@endsection