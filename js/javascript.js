$ (document).ready(function  (){

  $("#btnEnviar").click(function(){

    var Nome = $("#formCadastro input[name='nome']");

    if( Nome.val() == "" ){
      alert("Digite seu nome!");
      Nome.focus();

    } else if( Nome.val().length < 3 ){
      alert("Digite 3 caracteres ou mais.");
      Nome.focus();

    } else {
      $("#formCadastro").submit();
    }

  });
});
