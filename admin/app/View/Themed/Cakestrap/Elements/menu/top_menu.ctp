<script>
    $(document).ready(function(){
        var urlArray = document.URL.split('/');
        var currentPage = urlArray[urlArray.length-1];
        $("#"+currentPage).addClass("active");
    })
</script>
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Bike on', 'http://bikeon.ia8.com.br/admin', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li id="accidents">
                <a href="http://bikeon.ia8.com.br/admin/accidents">Acidentes</a>
            </li>
            <li id="companies">
                <a href="http://bikeon.ia8.com.br/admin/companies">Estabelicimentos</a>
            </li>
            <li id="parkings">
                <a href="http://bikeon.ia8.com.br/admin/parkings">Estacionamentos</a>
            </li>
            <li id="locations">
                <a href="http://bikeon.ia8.com.br/admin/locations">Locais Salvos</a>
            </li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->