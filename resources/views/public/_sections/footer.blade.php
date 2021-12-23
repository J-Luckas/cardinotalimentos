
<div ></div>
<!-- Footer -->
<footer class="">
    <div class="container-fluid">
        <div class="row" style="align-items: baseline;">
            <div class="navegat-site col-md-4">
                <!-- <h3>Navegação</h3> -->
                    <h4><a href="#produtos">Produtos</a></h4>
                    <h4><a href="#contact">Contato</a></h4>
            </div>

            <div class="redes-sociais col-md-4 d-flex mt-1">
                <a href="https://www.instagram.com/cardinotalimentos/" target="_blank"><i class="bi bi-instagram social-media-icon px-3"></i></a>
                <a href="https://www.facebook.com/cardinot.alimentos" target="_blank"><i class="bi bi-facebook social-media-icon px-3"></i></a>
                <a href="https://wa.me/5522999700567" target="_blank"><i class="bi bi-whatsapp social-media-icon px-3"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->


        <!-- jquery -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script type="module">


            window.onload = (event) => {
                var currentDate = new Date();
                var christmasDate = new Date( `December 25, ${currentDate.getFullYear()} 23:59:59` );
                const getCookie = function (name) {
                    const value = `; ${document.cookie}`;
                    const parts = value.split(`; ${name}=`);
                    if (parts.length === 2) return parts.pop().split(';').shift();
                }



                if( currentDate.getTime() <= christmasDate.getTime() && !getCookie("modalChristmas")){
                    Swal.fire({
                        imageUrl: window.location.origin + '/img/feliz-natal.jpg',
                        showCloseButton: true,
                        focusConfirm: false,
                        showConfirmButton: false,
                        imageWidth: 400,
                        imageHeight: 400,
                        imageAlt: 'Feliz Natal!',
                        backdrop: `
                            rgb(176, 28, 34,0.4)
                        `
                    });

                    let dateExp = new Date();
                    dateExp.setTime(dateExp.getTime() + ( 30 * 60 * 1000));
                    let expires = "expires="+dateExp.toUTCString();
                    document.cookie =  "modalChristmas=true;" + expires + ";path=/";
                }

            };

        </script>
    </body>
</html>
