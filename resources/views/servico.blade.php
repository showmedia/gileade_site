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
            @elseif($servico == 'Transferência')
                <p>
                A transferência de propriedade de um veículo é um processo essencial para garantir que o novo proprietário esteja devidamente registrado como o dono legal do veículo. Esse trâmite deve ser realizado pelo DETRAN de São Paulo, seguindo as regras estipuladas pelo Código de Trânsito Brasileiro.
                <br><br>
                A transferência do veículo é necessária quando há mudança de proprietário, seja por compra ou doação, por exemplo. O processo envolve a regularização do veículo junto ao DETRAN de São Paulo, garantindo que o novo proprietário esteja devidamente registrado como tal e possa circular sem restrições.
                <br><br>
                Para realizar a transferência do veículo, é necessário apresentar a documentação exigida pelo DETRAN de São Paulo, como o Certificado de Registro e Licenciamento de Veículos (CRLV), o comprovante de pagamento do IPVA e das multas pendentes, além de documentos pessoais do antigo proprietário e do novo proprietário.
                <br><br>
                Após a realização da transferência, o novo proprietário receberá um novo CRLV, com seus dados atualizados como o novo dono do veículo. É importante lembrar que o não cumprimento dessa obrigação pode resultar em multas e outras penalidades, por isso é essencial realizar a transferência do veículo de maneira correta e dentro dos prazos estabelecidos pelo DETRAN de São Paulo.
                <br><br>
                Em resumo, a transferência de propriedade do veículo é um trâmite essencial para garantir a segurança jurídica do novo proprietário, além de evitar problemas futuros com multas e outras penalidades. O DETRAN de São Paulo é o órgão responsável por regularizar essa transferência, e é importante estar em dia com as obrigações legais para evitar possíveis prejuízos.
                </p>
            @elseif($servico == 'Primeiro Emplacamento')
                <p>
                O primeiro emplacamento de um veículo é um procedimento obrigatório para que o veículo possa circular legalmente em vias públicas. Esse processo consiste na realização do registro do veículo junto ao DETRAN, que emitirá a placa de identificação do veículo e os demais documentos necessários para que ele possa trafegar de forma regular.
                <br><br>
                O primeiro emplacamento é exigido para todos os veículos novos, sejam eles automóveis, motocicletas, caminhões ou qualquer outro tipo de veículo motorizado. Além disso, também é necessário realizar o primeiro emplacamento em casos de transferência de propriedade de veículos registrados em outros estados.
                <br><br>
                Para realizar o primeiro emplacamento, é preciso apresentar os documentos exigidos pelo DETRAN, como a nota fiscal do veículo, o comprovante de pagamento do IPVA e do seguro obrigatório DPVAT, além dos documentos pessoais do proprietário. Após a verificação da documentação, o DETRAN emitirá a placa do veículo, o Certificado de Registro do Veículo (CRV) e o Certificado de Registro e Licenciamento do Veículo (CRLV).
                <br><br>
                Vale lembrar que o não cumprimento dessa obrigação pode resultar em multas e outras penalidades, por isso é essencial realizar o primeiro emplacamento de maneira correta e dentro dos prazos estabelecidos pelo DETRAN.
                <br><br>
                Em resumo, o primeiro emplacamento é um procedimento obrigatório para que um veículo possa circular legalmente em vias públicas. É necessário apresentar a documentação exigida pelo DETRAN e seguir as normas estabelecidas pelo órgão para garantir a regularidade do veículo. O DETRAN é responsável por emitir a placa de identificação e os demais documentos necessários para que o veículo possa trafegar de forma regular e segura.
                </p>
            @elseif($servico == 'Segunda via CRV')
                <p>
                O Certificado de Registro de Veículo (CRV) é um documento essencial para proprietários de veículos, pois com ele é possível comprovar a propriedade do veículo junto ao DETRAN. No entanto, em casos de perda, roubo ou extravio do CRV, é necessário solicitar a segunda via do documento junto ao órgão competente.
                <br><br>
                O serviço de segunda via de CRV é oferecido pelo DETRAN e pode ser solicitado pelo proprietário do veículo em nosso escritório. Para isso, é necessário apresentar a documentação exigida pelo DETRAN, como o Boletim de Ocorrência (BO) ou Declaração de perda registrada em cartório em casos de roubo ou extravio, além dos documentos pessoais do proprietário.
                <br><br>
                Após a verificação da documentação, o DETRAN emitirá a segunda via do CRV, que terá a mesma validade e informações contidas no documento original. É importante lembrar que, em caso de perda ou roubo do CRV, é fundamental que o proprietário faça o registro do Boletim de Ocorrência para evitar possíveis fraudes e uso indevido do documento.
                <br><br>
                A segunda via do CRV é um documento obrigatório para que o proprietário possa comprovar a propriedade do veículo, realizar transferência de propriedade, e outras atividades relacionadas ao veículo. Por isso, é importante que o proprietário mantenha o documento em local seguro e evite perdê-lo ou tê-lo roubado.
                <br><br>
                Em resumo, o serviço de segunda via de CRV é oferecido pelo DETRAN para que proprietários de veículos possam solicitar a emissão de um novo documento em caso de perda, roubo ou extravio. É necessário apresentar a documentação exigida pelo órgão e seguir as normas estabelecidas para a emissão do documento. A segunda via do CRV é um documento essencial para comprovar a propriedade do veículo e realizar atividades relacionadas ao mesmo.
                </p>
            @elseif($servico == 'Isenção de IPVA PCD')
                <p>
                A isenção de Imposto sobre a Propriedade de Veículos Automotores (IPVA) para pessoas com deficiência (PCD) é um direito garantido por lei que permite que essas pessoas fiquem isentas do pagamento do imposto na aquisição de um veículo novo.
                <br><br>
                Para ter direito à isenção do IPVA PCD, é necessário cumprir alguns requisitos estabelecidos pelo Estado, como ter uma deficiência física, visual, mental ou autismo, que deve ser comprovada por laudo médico emitido por órgão oficial.
                <br><br>
                Além disso, o veículo deve ser adquirido em nome da pessoa com deficiência, que não poderá vendê-lo pelo prazo de dois anos. O veículo também deve ser adaptado de acordo com as necessidades da pessoa com deficiência, o que pode incluir instalação de rampa para cadeira de rodas, acelerador e freio manual, entre outras adaptações.
                <br><br>
                O processo de isenção de IPVA PCD é realizado pelo Despachante junto ao DETRAN. É necessário apresentar uma série de documentos, como o laudo médico, comprovante de residência, documento de identificação do proprietário e nota fiscal de compra do veículo.
                <br><br>
                Após a análise da documentação e verificação do cumprimento dos requisitos, o DETRAN emite um certificado de isenção do IPVA, que garante a isenção do imposto para o proprietário do veículo pelo período de até três anos.
                <br><br>
                É importante ressaltar que a isenção de IPVA PCD não garante a isenção de outros impostos e taxas, como o seguro obrigatório (DPVAT), licenciamento e IPVA de anos anteriores, que devem ser pagos normalmente pelo proprietário do veículo.
                <br><br>
                Em resumo, a isenção de IPVA PCD é um direito garantido por lei que permite que pessoas com deficiência fiquem isentas do pagamento do imposto na aquisição de um veículo novo. É necessário cumprir os requisitos estabelecidos pelo Estado, realizar o processo de solicitação junto ao DETRAN e apresentar a documentação exigida. A isenção garante a isenção do imposto por até três anos e não inclui outros impostos e taxas relacionados ao veículo.
                </p>
            @elseif($servico == 'Legalização carro rebaixado')
                <P>
                A legalização de carros rebaixados é um processo obrigatório para aqueles que desejam modificar a altura do veículo e garantir a regularidade da sua circulação nas vias públicas. O rebaixamento de carros é uma prática muito comum entre entusiastas de carros e pode proporcionar uma aparência mais esportiva e agressiva ao veículo, além de melhorar a estabilidade e dirigibilidade.
                <br><br>
                No entanto, de acordo com as normas do Conselho Nacional de Trânsito (CONTRAN), a altura mínima permitida para os veículos é de 10 centímetros do solo. Para aqueles que desejam modificar a altura do veículo abaixo dessa medida, é necessário realizar o processo de legalização do carro rebaixado.
                <br><br>
                O processo de legalização envolve a apresentação de uma série de documentos, como nota fiscal da suspensão, laudo de inspeção veicular e certificado de segurança veicular. É necessário também passar por uma vistoria para avaliar as condições do veículo e verificar se a modificação não compromete a segurança do carro e dos seus ocupantes.
                <br><br>
                Além disso, é importante ressaltar que a legalização de carros rebaixados pode variar de acordo com as leis de cada Estado. Algumas regiões podem ter regras mais rígidas ou exigir adaptações específicas para garantir a regularidade do veículo.
                <br><br>
                A legalização do carro rebaixado é fundamental para evitar multas e até mesmo a apreensão do veículo. A falta de regularização pode gerar penalidades graves, como perda de pontos na carteira de habilitação e remoção do veículo para regularização.
                <br><br>
                Em resumo, a legalização de carros rebaixados é um processo obrigatório para aqueles que desejam modificar a altura do veículo abaixo de 10 centímetros do solo. O processo envolve a apresentação de documentos, vistoria e adaptações específicas, podendo variar de acordo com as leis de cada Estado. A legalização é fundamental para evitar multas e apreensão do veículo, garantindo a segurança do carro e dos seus ocupantes.
                </P>
            @elseif($servico == 'Desbloqueio de Sinistro')
                <p>
                O desbloqueio de sinistro é um serviço oferecido pelos órgãos responsáveis pelo trânsito para permitir que um veículo, que foi registrado como sinistrado, possa voltar a circular nas vias públicas. O sinistro pode ser caracterizado por um acidente de trânsito, roubo, furto ou outras situações que levem à perda total ou parcial do veículo.
                <br><br>
                Quando um veículo é registrado como sinistrado, ele é bloqueado para circulação nas vias públicas, impedindo que o proprietário possa utilizá-lo novamente sem antes regularizar a situação. O desbloqueio de sinistro é o processo de regularização dessa situação, permitindo que o veículo possa ser utilizado novamente.
                <br><br>
                Para realizar o desbloqueio de sinistro, é necessário apresentar uma série de documentos, como o Boletim de Ocorrência, laudo pericial, certificado de registro e licenciamento do veículo, além de outros documentos específicos que podem variar de acordo com a situação. Também é necessário passar por uma vistoria para verificar as condições do veículo e garantir que ele possa circular com segurança.
                <br><br>
                O desbloqueio de sinistro é uma medida importante para garantir que um veículo possa ser utilizado novamente após um acidente ou outra situação de sinistro. Sem a regularização, o proprietário pode ser penalizado com multas, perda de pontos na carteira de habilitação e até mesmo a apreensão do veículo.
                <br><br>
                Em resumo, o desbloqueio de sinistro é um serviço oferecido pelos órgãos responsáveis pelo trânsito para permitir que um veículo registrado como sinistrado possa voltar a circular nas vias públicas. O processo envolve a apresentação de documentos, vistoria e adaptações específicas, podendo variar de acordo com a situação. O desbloqueio é fundamental para evitar multas e apreensão do veículo, garantindo a segurança do carro e dos seus ocupantes.
                </p>
            @elseif($servico == 'Regularização de Motor')
                <p>
                A regularização de motor é um serviço oferecido pelos órgãos responsáveis pelo trânsito que tem como objetivo legalizar um motor que não está devidamente cadastrado ou regularizado. Esse tipo de situação pode acontecer em casos de alteração do motor original do veículo, importação de veículos ou em situações de roubos e furtos.
                <br><br>
                A falta de regularização de motor pode trazer diversas consequências, tais como multas, apreensão do veículo, além de impedir o licenciamento do mesmo. Portanto, é fundamental realizar a regularização para evitar transtornos futuros.
                <br><br>
                Para regularizar o motor, é necessário apresentar uma série de documentos, tais como o Certificado de Registro do Veículo (CRV), Certificado de Registro e Licenciamento de Veículo (CRLV), além de notas fiscais e outros documentos específicos que variam de acordo com a situação.
                <br><br>
                Além da apresentação dos documentos, é necessário também realizar uma vistoria no veículo para verificar as condições do motor e verificar se o mesmo está em conformidade com as exigências estipuladas pelas autoridades de trânsito.
                <br><br>
                Em alguns casos, pode ser necessário realizar adaptações ou substituições no motor para que o mesmo esteja de acordo com as normas estabelecidas pelas autoridades de trânsito. Após a realização de todos os procedimentos necessários, o motor será cadastrado e regularizado, permitindo assim a legalização do veículo e sua circulação pelas vias públicas.
                <br><br>
                Em resumo, a regularização de motor é um serviço importante para legalizar um motor que não está devidamente cadastrado ou regularizado. O processo envolve a apresentação de documentos, vistoria e, em alguns casos, a realização de adaptações ou substituições no motor. A falta de regularização de motor pode trazer diversas consequências, tais como multas e apreensão do veículo, além de impedir o licenciamento do mesmo. Portanto, é fundamental realizar a regularização para evitar transtornos futuros.
                </p>
            @endif
        @endif
    </section>
@endsection