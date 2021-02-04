$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Você preencheu o formulário corretamente?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var nome = $("#name").val();
    var email = $("#email").val();
    var mensagem = $("#message").val();
    var assunto = $("#assunto").val();

    if(assunto == "assunto" || assunto == null){
        $("#msgSubmit").removeClass().addClass("h3 text-center text-danger").text("Insira o assunto do texto!");
        return false;
    }

    $.ajax({
        type: "POST",
        url: "php/form-process",
        data : {
            nome: nome,
            email: email,
            mensagem: mensagem,
            assunto: assunto
        },
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Mensagem enviada, iremos retornar o mais breve possível!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}