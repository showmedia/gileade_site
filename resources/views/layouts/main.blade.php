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
           
    <footer class="text-center p-3 text-white" style='background-color: #004e87; font-weight: 500;'>
		<div class="d-md-flex col-12">
			<div class="p-2 flex-fill">teste 1</div>
			<div class="p-2 flex-fill">teste 2</div>
			<div class="p-2 flex-fill">teste</div>
			<div class="p-2 flex-fill">teste</div>
		</div>
        <p class="mt-5">Gileade Despachante - &copy;2023  -  Desenvolvido por <a style="text-decoration:none; color:#fff;" href="https://www.instagram.com/showmediaart/" target="_blank" rel="noopener noreferrer">Show Media</a> </p>
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
