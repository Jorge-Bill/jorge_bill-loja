 
        <!-- footer inicio 
        </div>
        </div> --> 
        <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-2 col-lg-offset-2" id="foot">
                            <h3>Email</h3>
                            <div class="caption">
                                <p class="glyphicon glyphicon-envelope"> vendas@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="foot">
                            <h3>Telefones</h3>
                            <div class="caption">
                                <p class="glyphicon glyphicon-phone-alt"> (15) 3244-6885 | </p>
                                <p class="glyphicon glyphicon-phone"> (11) 99714-7295 </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="foot">
                            <h3>Redes Sociais</h3>
                            <div class="caption">
                              <span>       
                    <a class="" href="#" target="_blank">Teste</a>
                            </span>   
                            </div>
                        </div>

                    </div>
                </div>
               
                </footer>
        <footer class="footer-estilo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="http://srti.net.br/" target="_blank"> <img src="" alt=""> </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    
                    <br>
                    <span>Jorge & Nattalia - Todos os Direitos Reservados - Copyright © 2016 -</span>
                    <span>Desenvolvido com HTML5, CSS3, JS</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <a href="#topo"class="glyphicon glyphicon-triangle-top"></a>
                </div>
            </div>
        </div>    
        </footer>
        <!-- footer fim --> 



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/all.min.js"></script>
    <!-- modal -->
   <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
    })
        </script>
<!-- menu -->
  <script type="text/javascript">
    $(document).ready(function () {
    $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
    });
    });
  </script>
  <!-- script para o menu responsivo fim -->
  <!--teste navegação interna inicio -->
  <script type="text/javascript">
    $(document).ready(function () {
    $(".page").css({
    height: $(window).height(),
    lineHeight: $(window).height() + "px"
    });
    $("nav a").click(function () {
    theHref = $(this).attr("href");
    $("html, body").animate({
    scrollTop: $(theHref).offset().top
    }, 500);
    return false;
    });
    });
  </script>
  <!-- teste navegação interna fim -->
        </div>
    </div>
</body>

</html>
