@extends('.layouts.main')

@section('content')
 
    <section id="servicopage">
        <h1> {{$servico ?? ''}} </h1>
                    <div class="img">
                    
                    </div>
        @if(isset($servico))
            @if($servico == 'Licenciamento')
                
                <p>
                    O Licenciamento Anual é um processo que garante a permissão para um veículo trafegar em vias públicas. É um trâmite obrigatório que deve ser realizado logo após o registro do veículo, conforme estipulado pelo Código de Trânsito Brasileiro. Após a realização do licenciamento, é emitido o Certificado de Registro e Licenciamento de Veículos (CRLV) digital, documento obrigatório para a fiscalização do veículo. O não cumprimento dessa obrigação pode resultar em penalidades graves, como multa, perda de pontos na CNH e até mesmo a remoção do veículo para regularização.
                    <br> <br>
                    O licenciamento deve ser renovado anualmente por todo proprietário de veículo automotor, elétrico, articulado, reboque ou semi-reboque, de acordo com as regras estipuladas pelo CTB.
                    <br> <br>
                    Manter o licenciamento em dia é essencial para garantir que o seu veículo possa circular sem restrições. É uma obrigação do DETRAN e deve ser realizado de acordo com a numeração final da placa do veículo. Cada placa possui um mês específico para o licenciamento, e o não pagamento até o último dia do mês estipulado pode acarretar em multas e juros.
                </p>
            @endif
        @endif
    </section>
@endsection