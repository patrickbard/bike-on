


<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Editar Estacionamento'), array('action' => 'edit', $parking['Parking']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Deletar Estacionamento'), array('action' => 'delete', $parking['Parking']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $parking['Parking']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Listar Estacionamento'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Novo Estacionamento'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">

        <script>
            function initialize() {
                var myLatlng = new google.maps.LatLng(<?php echo h($parking['Parking']['latitude']) ?>,<?php echo h($parking['Parking']['longitude']) ?>);
                var mapOptions = {
                    zoom: 15,
                    center: myLatlng
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Hello World!'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <div style="width: 100%; height: 400px" id="map-canvas"></div>

        <div class="parkings view">

			<h2><?php  echo __('Estacionamento'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($parking['Parking']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Latitude'); ?></strong></td>
		<td>
			<?php echo h($parking['Parking']['latitude']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Longitude'); ?></strong></td>
		<td>
			<?php echo h($parking['Parking']['longitude']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Local'); ?></strong></td>
		<td>
			<?php echo h($parking['Parking']['local']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
