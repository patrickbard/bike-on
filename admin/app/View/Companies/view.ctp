
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Editar Estabelecimento'), array('action' => 'edit', $company['Company']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Deletar Estabelecimento'), array('action' => 'delete', $company['Company']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Listar Estabelecimento'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Novo Estabelecimento'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="companies view">

			<h2><?php  echo __('Estabelecimento'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Nome'); ?></strong></td>
		<td>
			<?php echo h($company['Company']['nome']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Descricao'); ?></strong></td>
		<td>
			<?php echo h($company['Company']['descricao']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($company['Company']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Telefone'); ?></strong></td>
		<td>
			<?php echo h($company['Company']['telefone']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
