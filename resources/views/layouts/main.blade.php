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
            
            </header>

            <main>
                          

                
                    @yield('content')
                </div> 
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
			<div class="flex-fill">teste</div>
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
