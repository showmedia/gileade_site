
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
$(document).ready(function() {
  $(".ven-truck").hide();
  $("#add-truck").click(function(){
    $(".ven-car").hide();
    $(".ven-truck").fadeIn();
  });
  $("#add-car").click(function(){
    $(".ven-truck").hide();
    $(".ven-car").fadeIn();
  })
  $(".toggle-button").click(function(){
    $(".menu-mobile").addClass('active');
  });
});