'use strict'; //Para obdecer o padrão do ECMAScript 6

const myForm = document.getElementById("myForm");

myForm.addEventListener('submit', salvar);

function salvar(evento){
    evento.preventDefault(); //inpede que o html feche quando receber o submit do formulário
    const formData = new FormData(this) //criou-se um objeto que receberá o this que é o myForm
    //o FormData uma interface sendo uma forma de fazer campos chaves e valores referentes ao formulário
    const searchParams = new URLSearchParams(); //vai incluir os parametros dos campos dentro do formData

    for(const parametro of formData) { //O for vai compor o formulário
        searchParams.append(parametro[0], parametro[1], parametro[2], parametro[3],parametro[4],
            parametro[5], parametro[6], parametro[7], parametro[8], parametro[9], parametro[10],
            parametro[11])
    }

    fetch('cadastrodealuno.php', { //vai enviar os parametros para o arquivo PHP
        method:'POST',
        body:formData
    }).then(function(response){
        document.getElementById('nome_aluno').value=""; //para limpar o campo após o envio
        document.getElementById('matricula').value="";
        document.getElementById('data_nascimento').value="";
        document.getElementById('email').value="";
        document.getElementById('telefone').value="";
        document.getElementById('logradouro').value="";
        document.getElementById('numero').value="";
        document.getElementById('complemento').value="";
        document.getElementById('bairro').value="";
        document.getElementById('cidade').value="";
        document.getElementById('estado').value="";
        document.getElementById('pais').value="";
        return alert('Dados registrados com sucesso!');
    }).catch(function(error){
        console.log(error);//em caso de erro vai apresenta-lo no nterminal
    })
}
