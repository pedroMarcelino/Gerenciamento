$(function () {

  $(".input").keyup(function() {
    $(this).attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none")
    $("#returnMenssage").text("");
    $("#returnMenssage").addClass("hidden");
  });

  $("#btn-register").on("click", function () {
    if ( validaNome() ){
      if( validaEmail() ){
        if( validaSenha() ){
            var data = {
              "name": $("#input-name").val(),
              "email": $("#input-email").val(),
              "pass": $("#input-password").val(),
            }
            
            $.ajax({
              type: 'POST',
              dataType: 'json',
              url: 'function/register-user.php',
              data: data,
              beforeSend: function () {
                  $("#btn-register").addClass(" hidden");
                  $("#btn-load").removeClass("hidden");
              },
              success: function (data) {
                  if (data.return == true) {
                      // se tudo ir certo com email e senha é redirecionado
                      $("#loading").attr("class", "btn btn-outline-defalt orange btn-block btn-round hidden");
                      $("#finish").attr("class", "btn btn-outline-success btn-block btn-round");
                      setTimeout(function () {
                          $(location).attr('href', '../login/login.php');
                      }, 1400);
                  } else if (data.return == false) {
                      swal("Oops!", "Ocorreu um erro, tente novamente!", "warning");
                      $("#loading").attr("class", "btn btn-outline-defalt orange btn-block btn-round hidden");
                      $("#submit").attr("class", "btn btn-outline-default blue-skye btn-block btn-round");
                  } else if (data.return == "email_invalid") {
                      swal("Oops!", "Usuário já cadastrado, tente outro email", "warning");
                      $("#loading").attr("class", "btn btn-outline-defalt orange btn-block btn-round hidden");
                      $("#submit").attr("class", "btn btn-outline-default blue-skye btn-block btn-round");
                  }
              },
            });
        }
      }
    }

  });

  function validaNome (){
    nome = $('#nome').val()
    // console.log(nome)

    if(nome == ""){
      $("#nome").attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
    }else{
      return true;
    }
  }

  function validaEmail() {
    var email = $("#email").val();
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    // Se o e-mail não estiver no formato certo
    if ((email.search(regex) == -1)) {
      $("#email").attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
      $("#email").val("")

      $("#returnMenssage").val("");
      $("#returnMenssage").removeClass("hidden");
      $("#returnMenssage").text("Preencha o e-mail corretamente!");

      return false;
    } else {
      return true;
    }
  }
  
  function validaSenha(){

    senha = $("#senha").val();
    confSenha = $("#conf-senha").val()

    if(senha == "" ){
      $("#senha").attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
    }
    if(confSenha == ""){
      $("#conf-senha").attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
    }

    if(senha == confSenha){
      console.log("true");
      return true
    }else{
      $("#senha").val("");
      $("#conf-senha").val("");
      $("#returnMenssage").removeClass("hidden")
      $("#returnMenssage").text("As senhas não correspondem!")

      console.log("false");
      return false }
  }

});