//https://github.com/vanilla-masker/vanilla-masker
// Listen the input element masking it to format with pattern.
$('#cpf , #dataNascimento').on('focus', function () {

    var id=$(this).attr("id");

    if(id == "cpf"){VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99");}

    if(id == "dataNascimento"){VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999")};

});

const urlCadastro = 'ConfPhp/controllers/controllerCadastro';
function getRoot(url)
{
    console.log(url)
    var root = "http://"+document.location.hostname+"/"+url;
    return root;
}



function getCaptcha()
{
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lc-LdMcAAAAAD1tymDsHlFdcxDnn-Gd7VV_u7fe', {action: 'homepage'}).then(function(token) {
            const gRecaptchaResponse=document.querySelector("#g-recaptcha-response").value=token;
        });
    });
}

getCaptcha();

//Ajax do formulário de cadastro
$("#formCadastro").on("submit",function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
       url: getRoot(urlCadastro),
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            $('.retornoCad').empty();
            if(response.retorno == 'erro'){
                getCaptcha();
                $.each(response.erros,function(key,value){
                    $('.retornoCad').append(value+'<br>');
                });
            }else{
                $('.retornoCad').append('Dados inseridos com sucesso!');
            }
        }
    });
});