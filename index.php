<?php include 'components/header.php'; ?>

	<section class="vitrine">
		<div class="owl-carousel owl-theme" id="owl-vitrine">
            <div class="item">
                <a href="">
                    <img src="assets/images/vitrine.jpg" alt="">
                </a>
            </div><!-- .item -->
            <div class="item">
                <a href="">
                    <img src="assets/images/vitrine.jpg" alt="">
                </a>
            </div><!-- .item -->
        </div><!-- . owl-carousel -->
	</section><!-- vitrine -->

	<section class="sobre">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="item1">
						<figure><img src="assets/images/sobre1.jpg" class="sobre1" alt="">
						<img src="assets/images/sobre2.jpg" class="sobre2" alt=""></figure>
					</div><!-- item1 -->
				</div><!-- md-6 -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="item2">
						<h2>A mercearia</h2>
						<p>Inaugurada em 04 de julho de 2004, a Mercearia surgiu com uma proposta inovadora de sanduíches no mercado local. A arquitetura do restaurante foi projetada para que remetesse às antigas mercearias de bairro, lugar onde se comia sanduíche de mortadela e se batia papo.</p>
						<p>A Mercearia oferece a conveniência do fast food com a qualidade e o atendimento diferenciado para o cliente que aprecia desde um delicioso sanduíche a um chope gelado acompanhado de um saboroso petisco. Tudo isso disponível em um ambiente aconchegante e confortável: da mesinha na calçada ao salão com ar condicionado. Dispõe ainda de capacidade para 120 pessoas e, para sua comodidade, entregamos em domicílio, todos os dias, das 11h às 24h (em breve entregas pela internet).</p>
					</div><!-- .item2 -->
				</div><!-- md-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- sobre -->

	<section class="cardapio">
		<div class="container">
			<h2>CARDÁPIO</h2>
			<div class="owl-carousel owl-theme" id="owl-cardapio">
	            <div class="item">
                    <img src="assets/images/cardapio.png" alt="Vitrine - Mercearia" />
                    <h3>petiscos e refeições</h3>
                    <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI</p>
                    <a href="" class="botao hvr-icon-wobble-horizontal">CONFIRA AQUI</a>
	            </div><!-- .item -->
	        </div><!-- . owl-carousel -->
	    </div><!-- container -->
	</section><!-- .cardapio -->

	<section class="contato">
        <div class="container">
           <h2>CONTATO</h2>
           <div class="item">
              <div class="item1">
                 <form>
                    <div class="form-group">
                       <label>Nome</label>
                       <input type="text" name="nome" id="nome" class="form-control" value="" />
                    </div><!-- .form-group -->

                    <div class="form-group">
                       <label>Assunto</label>
                       <input type="text" name="assunto" id="assunto" class="form-control" value="" />
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
              </div><!-- item1 -->
              <div class="item2">
                 <a class="hvr-sweep-to-top" href="">
                    <div>
                       <p><i class="fa fa-envelope-o" aria-hidden="true"></i> atendimento@mercearia.com</p>
                       <p><i class="fa fa-mobile" aria-hidden="true"></i> 84 3615.6200 | 3091.1019</p>
                       <p><i class="fa fa-map-marker" aria-hidden="true"></i> Av. Lima Silva, 1549 - Lagoa Nova</p>
                       <p class="localizacao">VER LOCALIZAÇÃO <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                    </div>
                 </a>
              </div><!-- item2 -->
           </div><!-- item -->
        </div><!-- container -->
    </section><!-- contato -->

<?php include 'components/footer.php'; ?>