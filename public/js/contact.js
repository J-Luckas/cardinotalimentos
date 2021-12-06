$(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            if( window.location.pathname !== "/") {
                return window.location = this.href;
            };

            // Store hash
            var hash = this.hash;


            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){
                window.location.hash = hash;
            });
        }
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

    $('body').on("click","#enviar-email",function(e){
        const nome = $("#nome").val();
        const email = $("#email").val();
        const mensagem= $("#mensagem").val();
        const telefone = $("#telefone").val();
        const csrf     = $('meta[name="csrf-token"]').attr("content");

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
                },
                beforeSend : function(){
                    $(e.target).attr("disabled", true);
                    $('#load-email').show();
                    $('#send-email-button').hide();
                },
            })
            .done(function(msg){
                $(".msg-ret-contact").empty();
                $(".msg-ret-contact").append('<div class="alert alert-success" style="font-weight: bolder;" role="alert">Sua mensagem foi enviada com sucesso!</div>');

                $(e.target).attr("disabled", false);
                $('#load-email').hide();
                $('#send-email-button').show();


                $("#nome").val("");
                $("#email").val("");
                $("#mensagem").val("");
                $("#telefone").val("");
            })
            .fail(function(err){
                alert(err);
            });
        }else{
            $(".msg-ret-contact").empty();
            $(".msg-ret-contact").append('<div class="alert alert-warning" style="font-weight: bolder;" role="alert">Preencha todos os campos!</div>');
        }

    })
});
