<?php 
use MicroBlog\Noticia;
use MicroBlog\ControledeAcesso;
require_once "../inc/cabecalho-admin.php";
$sessao = new ControledeAcesso;
$sessao->verificaAcesso();
$noticia = new Noticia;
$noticia->usuario->setId($_SESSION['id']);
$noticia->usuario->setTipo($_SESSION['tipo']);
$listaDeNoticias = $noticia->listar();


?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Notícias <span class="badge bg-dark"><?=count($listaDeNoticias)?></span>
		</h2>

		<p class="text-center mt-5">
			<a class="btn btn-primary" href="noticia-insere.php">
			<i class="bi bi-plus-circle"></i>	
			Inserir nova notícia</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="table-light">
					<tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Autor</th>
						<th class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>

	<?php
		foreach ($listaDeNoticias as $noticia) {

	?>
								<tr>
                        <td> <?= $noticia ['titulo']?> </td>
                        <td> <?= $noticia ['data'] ?> </td>
                        <td ><?= $noticia ['usuario_id']?> </td>
						<td class="text-center">
							<a class="btn btn-warning" 
							href="noticia-atualiza.php">
							<i class="bi bi-pencil"></i> Atualizar
							</a>
						
							<a class="btn btn-danger excluir" 
							href="noticia-exclui.php">
							<i class="bi bi-trash"></i> Excluir
							</a>
						</td>
					</tr>

	<?php
					
		}

	?>
				</tbody>                
			</table>
	</div>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

