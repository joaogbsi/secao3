<?php
	include_once("header.php");
?>

<section>
	<div class="container" id="destaque-produtos-container">
		<div id="destaque-produtos">
			<div class="item">
				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/moto-x.png" alt="Nome do produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>Smartphone Motrola Moto X Play Dual chip Desbloquado Android 5.1</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">1259</div>
						<div class="text-centavos text-roxo">,10</div>
						<div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
						<div class="text-total text-arial-cinza">total a prazo R$1.399,00</div>						
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>Compre Agora</a>
				</div>
			</div>

			<div class="item">
				<div class="col-sm-6 col-imagem">
					<img src="img/produtos/moto-x.png" alt="Nome do produto">
				</div>
				<div class="col-sm-6 col-descricao">
					<h2>Smartphone Motrola Moto X Play Dual chip Desbloquado Android 5.1</h2>
					<div class="box-valor">
						<div class="text-noboleto text-arial-cinza">no boleto</div>
						<div class="text-por text-arial-cinza">por</div>
						<div class="text-reais text-roxo">R$</div>
						<div class="text-valor text-roxo">1259</div>
						<div class="text-centavos text-roxo">,10</div>
						<div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88</div>
						<div class="text-total text-arial-cinza">total a prazo R$1.399,00</div>						
					</div>
					<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>Compre Agora</a>
				</div>
			</div>

		</div>			
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
	</div>

</section>

<?php
	include_once("footer.php");
?>	

<script>
	$(document).ready(function(){
		$("#destaque-produtos").owlCarousel({
			autoPlay: 5000,
			itens: 1,
			singleItem: true
		});

		var owlDestaque = $("#destaque-produtos").data('owlCarousel');
		$('#btn-destaque-prev').on("click", function(){
			owlDestaque.prev();
		});

		$('#btn-destaque-next').on("click", function(){
			owlDestaque.next();
		});
	})
</script>	