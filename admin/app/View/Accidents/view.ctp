
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Accident'), array('action' => 'edit', $accident['Accident']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Accident'), array('action' => 'delete', $accident['Accident']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $accident['Accident']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Accidents'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Accident'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="accidents view">

			<h2><?php  echo __('Accident'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LOG1'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LOG1']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LOG2'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LOG2']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('PREDIAL1'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['PREDIAL1']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LOCAL'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LOCAL']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('TIPO ACID'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['TIPO_ACID']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LOCAL VIA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LOCAL_VIA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('QUEDA ARR'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['QUEDA_ARR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('DATA HORA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['DATA_HORA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('DIA SEM'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['DIA_SEM']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('FERIDOS'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['FERIDOS']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('FERIDOS GR'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['FERIDOS_GR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('MORTES'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['MORTES']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('MORTE POST'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['MORTE_POST']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('FATAIS'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['FATAIS']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('AUTO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['AUTO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('TAXI'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['TAXI']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LOTACAO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LOTACAO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('ONIBUS URB'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['ONIBUS_URB']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('ONIBUS MET'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['ONIBUS_MET']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('ONIBUS INT'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['ONIBUS_INT']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CAMINHAO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CAMINHAO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('MOTO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['MOTO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CARROCA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CARROCA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('BICICLETA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['BICICLETA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('OUTRO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['OUTRO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('TEMPO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['TEMPO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('NOITE DIA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['NOITE_DIA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('FONTE'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['FONTE']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('BOLETIM'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['BOLETIM']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('REGIAO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['REGIAO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('DIA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['DIA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('MES'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['MES']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('ANO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['ANO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('FX HORA'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['FX_HORA']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CONT ACID'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CONT_ACID']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CONT VIT'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CONT_VIT']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('UPS'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['UPS']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CONSORCIO'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CONSORCIO']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('CORREDOR'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['CORREDOR']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LONGITUDE'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LONGITUDE']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('LATITUDE'); ?></strong></td>
		<td>
			<?php echo h($accident['Accident']['LATITUDE']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
