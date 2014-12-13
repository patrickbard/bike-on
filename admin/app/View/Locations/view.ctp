
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Editar Local'), array('action' => 'edit', $location['Location']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Deletar Local'), array('action' => 'delete', $location['Location']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Listar Local'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Novo Local'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="locations view">

			<h2><?php  echo __('Local'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Latitude'); ?></strong></td>
		<td>
			<?php echo h($location['Location']['latitude']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Longitude'); ?></strong></td>
		<td>
			<?php echo h($location['Location']['longitude']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo h($location['Location']['user']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
