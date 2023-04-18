<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gileade Despachante</title>

        <!-- FONTS DO GOOGLE-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- CSS DA APLICAÇÃO-->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/mobile.css">
		 
    </head>

    <body>
            <header>


            <nav id="nav">
  <div class="logo">
    <a href="#"><img src="img/logo2.png" alt="Logo"></a>
  </div>
  <ul class="menu" id="elemento-hover">
  <li class="nav-link2"><a href="" style="cursor:pointer;">Sobre Nós</a></li>
    <li class="nav-link"><a >Serviços</a>
        <ul class="elemento-animado" style="width: 40vw;">
            <div class="col-12 row p-2">
                <div class="text-start col-6">
                    <a href=""><li class="p-2"><span>Licenciamento</span></li></a>
                    <a href=""><li class="p-2"><span>Transferência</span></li></a>
                    <a href=""><li class="p-2"><span>Isenção de IPVA PCD</span></li></a>
                    <a href=""><li class="p-2"><span>Primeiro emplacamento</span></li></a>
                    <a href=""><li class="p-2"><span>Segunda via CRV</span></li></a>
                </div>
                <div class="text-start col-6" style="border-left: 1px solid #ddd;">
                    <a href=""><li class="p-2"><span>Legalização carro rebaixado</span></li></a>
                    <a href=""><li class="p-2"><span>Desbloqueio de sinistro</span></li></a>
                    <a href=""><li class="p-2"><span>Regularização de motor</span></li></a>
                    <a href=""><li class="p-2"><span>Registro ANTT</span></li></a>
                    <a href=""><li class="p-2"><span>Blindagem de veículos</span></li></a>
                <div>
            </div>
        </ul>
    </li>
    <li class="nav-link"><a >Vencimentos</a>
        <ul class="elemento-animado" style="width: 40vw;">
            <div class="col-12 row p-2">
                <button class="col-6 button active" id="add-car"><ion-icon name="car-sport-outline"></ion-icon> <span>Carro/Moto</span></button>
                <button class="col-6 button" id="add-truck"><ion-icon name="bus-outline"></ion-icon> <span>Caminhão</span></button>
            </div>
            <div class="col-12 row p-2 ven ven-car" style="border-top: 1px solid #eee;">
                <div class="text-start col-6">
                    <li class="p-2" style="font-weight:bold;">Mês Licenciamento</li>
                    <li class="p-2">Jan até Jun</li>
                    <li class="p-2">Julho</li>
                    <li class="p-2">Agosto</li>
                    <li class="p-2">Setembro</li>
                    <li class="p-2">Outubro</li>
                    <li class="p-2">Novembro</li>
                    <li class="p-2">Dezembro</li>
                </div>
                <div class="text-start col-6" style="border-left: 1px solid #ddd;">
                    <li class="p-2" style="font-weight:bold;">Final Placa</li>
                    <li class="p-2">IPVA</li>
                    <li class="p-2">Final 1 e 2</li>
                    <li class="p-2">Final 3 e 4</li>
                    <li class="p-2">Final 5 e 6</li>
                    <li class="p-2">Final 7 e 8</li>
                    <li class="p-2">Final 9</li>
                    <li class="p-2">Final 0</li>
                </div>
            </div>
            <div class="col-12 row p-2 ven ven-truck" style="border-top: 1px solid #eee;">
                <div class="text-start col-6">
                    <li class="p-2" style="font-weight:bold;">Mês Licenciamento</li>
                    <li class="p-2">Jan até Setembro</li>
                    <li class="p-2">Outubro</li>
                    <li class="p-2">Novembro</li>
                    <li class="p-2">Dezembro</li>
                </div>
                <div class="text-start col-6" style="border-left: 1px solid #ddd;">
                    <li class="p-2" style="font-weight:bold;">Final Placa</li>
                    <li class="p-2">IPVA</li>
                    <li class="p-2">Final 1,2,3 e 4</li>
                    <li class="p-2">Final 5,6 e 7</li>
                    <li class="p-2">Final 8,9 e 0</li>
                </div>
            </div>
        </ul>
    </li>
    <li class="nav-link"><a >Comunidade</a>
        <ul class="elemento-animado" >
            <div class="col-12 row p-2">
                <div class="text-start col-6">
                    <a href=""><li class="p-2"><span>Blog</span></li></a>
                    <a href=""><li class="p-2"><span>Perguntas</span></li></a>
                </div>
                <div class="text-start col-6" style="border-left: 1px solid #ddd;">
                    <a href=""><li class="p-2"><ion-icon name="logo-instagram"></ion-icon> <span>Instagram</span> </li></a>
                    <a href=""><li class="p-2"><ion-icon name="logo-whatsapp"></ion-icon> <span>Whatsapp</span></li></a>
                <div>
            </div>
        </ul>
    </li>
  </ul>
  <button><ion-icon name="search-outline"></ion-icon> Consultar Veículo</button>
  <div class="toggle-button">
    <span></span>
    <span></span>
    <span></span>
  </div>

    <nav class="menu-mobile">
    <ul id="elemento-hover">
  <li class="nav-link2"><a href="" style="cursor:pointer;">Sobre Nós</a></li>
    <li class="nav-link"><a >Serviços</a>
       
                <a href=""><li><span>Licenciamento</span></li></a>
                <a href=""><li><span>Transferência</span></li></a>
                <a href=""><li><span>Isenção de IPVA PCD</span></li></a>
                <a href=""><li><span>Primeiro emplacamento</span></li></a>
                <a href=""><li><span>Segunda via CRV</span></li></a>
                <a href=""><li><span>Legalização carro rebaixado</span></li></a>
                <a href=""><li><span>Desbloqueio de sinistro</span></li></a>
                <a href=""><li><span>Regularização de motor</span></li></a>
                <a href=""><li><span>Registro ANTT</span></li></a>
                <a href=""><li><span>Blindagem de veículos</span></li></a>
       
    </li>
    <li class="nav-link"><a >Vencimentos</a>
        
            <li class="" id="li-car"><ion-icon name="car-sport-outline"></ion-icon> <span>Carro/Moto</span>
               
                    <li>Jan até Jun - IPVA</li>
                    <li>Julho - Final 1 e 2</li>
                    <li>Agosto - Final 3 e 4</li>
                    <li>Setembro - Final 5 e 6</li>
                    <li>Outubro - Final 7 e 8</li>
                    <li>Novembro - Final 9</li>
                    <li>Dezembro - Final 0</li>
                
            </li>
            <li class="" id="li-truck"><ion-icon name="bus-outline"></ion-icon> <span>Caminhão</span>
                
                    <li>Jan até Set - IPVA</li>
                    <li>Outubro - 1,2,3 e 4</li>
                    <li>Novembro - 5,6 e 7</li>
                    <li>Dezembro - 8,9 e 0</li>
              
            </li>
        
    </li>
    <li class="nav-link"><a >Comunidade</a>
        
            <a href=""><li ><span>Blog</span></li></a>
            <a href=""><li ><span>Perguntas</span></li></a>
            <a href=""><li ><ion-icon name="logo-instagram"></ion-icon> <span>Instagram</span> </li></a>
            <a href=""><li ><ion-icon name="logo-whatsapp"></ion-icon> <span>Whatsapp</span></li></a>
     
    </li>
  </ul>
  <button><ion-icon name="search-outline"></ion-icon> Consultar Veículo</button>
    </nav>
</nav>
            
            </header>

            <main>
            
                @yield('content')
               
            </main>
           
    <footer class="text-center text-white" style='background-color: #004e87; font-weight: 500; padding-top: 30px;'>
		<div class="d-md-flex p-sm-5 col-12">
			<div class="flex-fill">
                <img src="/img/logobranco.png" alt="logotipo todo branco" class="img">
                <div class="text-center d-flex social-links p-2" style="width: 0 auto;">
                    <button href="" target="_blank" rel="whats"><ion-icon name="logo-whatsapp"></ion-icon></button>
                    <button href="" target="_blank" rel="instagram"><ion-icon name="logo-instagram"></ion-icon></button>
                </div>
            </div>
			<div class="flex-fill">
                <ul>
                    <li><a href="">Sobre Nós</a></li>
                    <li><a href="">Política de Privacidade</a></li>
                    <li><a href="">Termos de Uso</a></li>
                </ul>
            </div>
			<div class="flex-fill texto" style="text-align: left;">
                <h5>Atendimento</h5>
                <p class="mt-4" style="font-size: 0.9rem">Segunda a Sexta: 8h às 18h <br>
                    Sábado: 8h ás 13h
                </p>

                <a target="_blanck" href=""> <ion-icon name="logo-whatsapp"></ion-icon> <span class="ms-2">Entrar em contato</span> </a>
            </div>
			<div class="flex-fill" style="text-align: left;">
                <h5>Endereço</h5>
                <p class="mt-4" style="font-size: 0.9rem">
                    Rua Muritiba, 304 - Jd Pres Dutra <br>
                    Guarulhos-SP
                </p>
            </div>
            <div class="flex-fill apresenta" style="text-align: left; max-width: 250px; font-size: 0.8rem">
                <p>
                "Com mais de 20 anos de experiência no mercado, somos um escritório de despachante dedicado, responsável e profissional, preparado para ajudá-lo em todas as suas necessidades. Nossa equipe qualificada e experiente está à disposição para oferecer um serviço ágil e eficiente. Conte conosco!"
                </p>
            </div>
		</div>
        <div  class="p-4" style="font-size: 0.8rem;">
            <p>Gileade Despachante - &copy;2023  -  Desenvolvido por <a style="text-decoration:none; color:#fff;" href="https://www.instagram.com/showmediaart/" target="_blank" rel="noopener noreferrer">Show Media</a> </p>
        </div>
    </footer>


 
    <!-- script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('script')
    <script src="/js/jquery.mask.js"></script>
      <!-- SCRIPT DA APLICAÇÃO-->
      <script src="/js/script.js"></script>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
