$(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
    });

    $(window).scroll(function() {
        $(".slideanim").each(function(){

            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide-div");
            }
        });
    });

    $('body').on("click","#enviar-email",function(){
        var nome = $("#nome").val();
        var email = $("#email").val();
        var mensagem= $("#mensagem").val();
        var telefone = $("#telefone").val();
        var csrf     = $('meta[name="csrf-token"]').attr("content");

        if( nome != "" && email != "" && mensagem != "" && telefone != ""){
            $.ajax({
                url: "/enviar-email",
                method: "POST",
                data:{
                    name: nome,
                    email: email,
                    telefone: telefone,
                    message: mensagem,
                    _token: csrf
                }
            })
            .done(function(msg){
                console.log(msg);
                // if(msg != "1"){
                //     $(".msg-ret-contact").empty();
                //     $(".msg-ret-contact").append('<div class="alert alert-danger" style="font-weight: bolder;" role="alert">Ocorreu um erro ao processar!!</div>');
                // }else{
                //     $(".msg-ret-contact").empty();
                //     $(".msg-ret-contact").append('<div class="alert alert-success" style="font-weight: bolder;" role="alert">Sua mensagem foi enviada com sucesso!</div>');
                // }
            })
            .fail(function(msg){
                alert("Ocorreu um erro ao processar!!!");
            });
        }else{
            $(".msg-ret-contact").empty();
            $(".msg-ret-contact").append('<div class="alert alert-warning" style="font-weight: bolder;" role="alert">Preencha todos os campos!</div>');
        }

    })
});
