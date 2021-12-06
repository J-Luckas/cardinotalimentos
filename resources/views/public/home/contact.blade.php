<div class="container pb-5" id="contact">
    <div class="row">
        <div class="title-section text-center" style="width: 100%;">
            <div class="separator"> <h2>Contato</h2> </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="msg-ret-contact slideanim">
            </div>
            <form>
                <div class="form-group slideanim">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
                </div>
                <div class="form-group slideanim">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email">
                </div>
                <div class="form-group slideanim">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Insira seu telefone">
                </div>

                <div class="form-group slideanim">
                    <label for="mensagem">Mensagem</label>
                    <textarea rows="5" class="form-control" name="mensagem" id="mensagem" style="resize: none;" placeholder=""></textarea>

                </div>
                <button style="width: 150px;"  type="button" id="enviar-email" class="btn btn-primary">
                    <span id="send-email-button">
                        Enviar
                    </span>
                    <img style="display:none;" id="load-email" src="{{asset("img/contact-loader.gif")}}" alt="">
                </button>
            </form>
        </div>
        <div class="col-lg-6">
            <ul class="lista-contato">
                <li>
                    <div class="div-social-ul soc-1 slideanim">
                        <a href="https://www.facebook.com/cardinot.alimentos" target="_blank">
                            <i class="bi bi-facebook social-media-icon px-3"></i>Facebook
                        </a>
                    </div>
                </li>
                <li>
                    <div class="div-social-ul soc-2 slideanim">
                        <a href="https://wa.me/5522999700567" target="_blank">
                            <i class="bi bi-whatsapp social-media-icon px-3"></i>Whatsapp
                        </a>
                    </div>
                </li>
                <li>

                    <div class="div-social-ul soc-3 slideanim">
                        <a href="https://www.instagram.com/cardinotalimentos/" target="_blank">
                            <i class="bi bi-instagram social-media-icon px-3"></i>Instagram
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
