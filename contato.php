<?php include 'components/header.php'; ?>

    <section class="topo">
        <div class="container">
            <div class="content">
                <h1>Contato</h1>
                <ol class="breadcrumb">
                   <li><a href="#">Home</a></li>
                   <li class="active">Contato</li>
                </ol>
            </div><!-- content -->
        </div><!-- container -->
        <img src="assets/images/contato.jpg" alt="">
    </section><!-- topo -->

    <section class="interna contato-int">
        <div class="container">
            <form>
                <div class="form-group">
                   <label>Nome</label>
                   <input type="text" name="nome" id="nome" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                         <label>E-mail</label>
                         <input type="text" name="email" id="email" class="form-control" value="" />
                      </div><!-- .form-group -->
                   </div><!-- .md-6 -->
                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                         <label>Telefone</label>
                         <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                      </div><!-- .form-group -->
                   </div><!-- .md-6 -->
                </div><!-- .row -->

                <div class="form-group">
                   <label>Mensagem</label>
                   <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                </div><!-- .form-group -->

                <button class="enviar">Enviar</button>
             </form>
        </div><!-- container -->
    </section><!-- interna -->

    <section class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.240352435621!2d-35.22100468486502!3d-5.82169099578158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2555e2227d0c1%3A0x4c223e1d2b1828c5!2sMercearia+Sandu%C3%ADches!5e0!3m2!1spt-BR!2sbr!4v1508182406002" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section><!-- mapa -->

<?php include 'components/footer.php'; ?>