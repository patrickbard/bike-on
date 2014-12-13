
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-1">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('New Accident'), array('action' => 'add'), array('class' => '')); ?></li>
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-11">

		<div class="accidents index">
		
			<h2><?php echo __('Accidents'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('LOG1'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('LOG2'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('PREDIAL1'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('LOCAL'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('TIPO_ACID'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('LOCAL_VIA'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('QUEDA_ARR'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('DATA_HORA'); ?></th>
							<th><?php echo $this->Paginator->sort('DIA_SEM'); ?></th>
							<th><?php echo $this->Paginator->sort('FERIDOS'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('FERIDOS_GR'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('MORTES'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('MORTE_POST'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('FATAIS'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('AUTO'); ?></th>
							<th><?php echo $this->Paginator->sort('TAXI'); ?></th>
							<th><?php echo $this->Paginator->sort('LOTACAO'); ?></th>
							<th><?php echo $this->Paginator->sort('ONIBUS_URB'); ?></th>
							<th><?php echo $this->Paginator->sort('ONIBUS_MET'); ?></th>
							<th><?php echo $this->Paginator->sort('ONIBUS_INT'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('CAMINHAO'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('MOTO'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('CARROCA'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('BICICLETA'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('OUTRO'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('TEMPO'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('NOITE_DIA'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('FONTE'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('BOLETIM'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('REGIAO'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('DIA'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('MES'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('ANO'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('FX_HORA'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('CONT_ACID'); ?></th>
							<th><?php echo $this->Paginator->sort('CONT_VIT'); ?></th>
							<th><?php echo $this->Paginator->sort('UPS'); ?></th>
<!--							<th>--><?php //echo $this->Paginator->sort('CONSORCIO'); ?><!--</th>-->
<!--							<th>--><?php //echo $this->Paginator->sort('CORREDOR'); ?><!--</th>-->
							<th><?php echo $this->Paginator->sort('LONGITUDE'); ?></th>
							<th><?php echo $this->Paginator->sort('LATITUDE'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($accidents as $accident): ?>
	<tr>
		<td><?php echo h($accident['Accident']['id']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['LOG1']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['LOG2']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['PREDIAL1']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['LOCAL']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['TIPO_ACID']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['LOCAL_VIA']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['QUEDA_ARR']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['DATA_HORA']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['DIA_SEM']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['FERIDOS']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['FERIDOS_GR']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['MORTES']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['MORTE_POST']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['FATAIS']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['AUTO']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['TAXI']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['LOTACAO']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['ONIBUS_URB']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['ONIBUS_MET']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['ONIBUS_INT']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['CAMINHAO']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['MOTO']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['CARROCA']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['BICICLETA']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['OUTRO']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['TEMPO']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['NOITE_DIA']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['FONTE']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['BOLETIM']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['REGIAO']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['DIA']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['MES']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['ANO']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['FX_HORA']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['CONT_ACID']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['CONT_VIT']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['UPS']); ?>&nbsp;</td>
<!--		<td>--><?php //echo h($accident['Accident']['CONSORCIO']); ?><!--&nbsp;</td>-->
<!--		<td>--><?php //echo h($accident['Accident']['CORREDOR']); ?><!--&nbsp;</td>-->
		<td><?php echo h($accident['Accident']['LONGITUDE']); ?>&nbsp;</td>
		<td><?php echo h($accident['Accident']['LATITUDE']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accident['Accident']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accident['Accident']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accident['Accident']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $accident['Accident']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->