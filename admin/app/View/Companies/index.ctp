
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('Novo Estabelecimento'), array('action' => 'add'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="companies index">
		
			<h2><?php echo __('Estabelecimentos'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('nome'); ?></th>
							<th><?php echo $this->Paginator->sort('descricao'); ?></th>
							<th><?php echo $this->Paginator->sort('email'); ?></th>
							<th><?php echo $this->Paginator->sort('telefone'); ?></th>
                            <th class="actions"><?php echo __('Ações'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['nome']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['email']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['telefone']); ?>&nbsp;</td>
		<td class="actions">
            <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $company['Company']['id']), array('class' => 'btn btn-default btn-xs')); ?>
            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $company['Company']['id']), array('class' => 'btn btn-warning btn-xs')); ?>
            <?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $company['Company']['id']), array('class' => 'btn btn-danger btn-xs'),
                                                                                            __('Certeza de que quer deletar # %s?', $company['Company']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
                        'format' => __('Página {:page} de {:pages}, apresentando {:current} resultados de um total de {:count}. Começando em {:start}, terminando em {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
                    echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
                    echo $this->Paginator->next(__('Próxima') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->