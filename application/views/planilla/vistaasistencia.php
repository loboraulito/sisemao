<div class="table-responsive">
	<table class="table tabla-planillas wallet-wrapper">
		<thead>
			<tr>
				<th>día</th>
				<th>Marcado</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($marcadosmes as $i => $marcado) : ?>
				<tr>
					<th><?= $marcado->gen_date ?></th>
					<td><?= $marcado->time?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
