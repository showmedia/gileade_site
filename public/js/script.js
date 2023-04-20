const buttons = document.querySelectorAll('.button');

// Adiciona o evento de clique a cada botão
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove a classe "active" de todos os botões
    buttons.forEach(b => b.classList.remove('active'));

    // Adiciona a classe "active" ao botão clicado
    button.classList.add('active');
  });
});

//nav fixed quando der scroll
const nav = document.getElementById('nav');
const halfScreenHeight = window.innerHeight / 2;

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    nav.classList.add('nav-fixed');
  }else{
    nav.classList.remove('nav-fixed');
  }
 
});

function clicar(id){
  alert(id);
}

$(document).ready(function() {
  $(".ven-truck").hide();
  $(".none-truck").hide();
  $('.none-car').hide();

  $("#li-truck").click(function(){
    $(".none-car").slideUp();
    $('.none-truck').slideDown();
  });
  $("#li-car").click(function(){
    $('.none-truck').slideUp();
    $('.none-car').slideDown();
  })
  $("#add-truck").click(function(){
    $(".ven-car").hide();
    $(".ven-truck").fadeIn();
  });
  $("#add-car").click(function(){
    $(".ven-truck").hide();
    $(".ven-car").fadeIn();
  });

  $(".toggle-button").click(function(){
    $(".menu-mobile").addClass('active');
  });
  $(".close").click(function(){
    $('.menu-mobile').removeClass('active');
  });
 
});