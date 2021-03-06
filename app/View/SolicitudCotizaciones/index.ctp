<div class="container-fluid">
        <div class="row-fluid">
          <div class="span12">
		<hr />
	<?php echo $this->TwitterBootstrap->add_crumb("Solicitud Cotizaciones", null);echo $this->TwitterBootstrap->breadcrumbs(array("divider" => "/")); ?>		<hr />
          <!-- Sheet starts -->
            <div class="box-body">
              <div class="ysheet">
                <div class="bor"></div>
                 <div class="ysheet1">
                    <!-- Title -->
                    <h3>Solicitudes de Cotizaciones</h3>
                    <!-- Para -->
                    <p>Listado de cotizaciones según el filtro que haya escogido</p>
		    <div style= "text-align: right; padding-right: 10%">
		       </div>
                 </div>
                 <div class="ysheet2"></div>
                 <div class="ysheet3"></div>
              </div>
            </div>

          <!-- Sheet ends -->




	<?php $cantidad = $this->Paginator->counter(array('format' => __('{:count}') ));if( strcmp( $cantidad , '0') != 0 ){ ?> 
	
	<div class="box-body">
        <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>

			<th><?php echo $this->Paginator->sort('estado_id', 'Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_tipo_id', 'Tipo de Evento'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id', 'Solicitante'); ?></th>
			<th><?php echo $this->Paginator->sort('recinto_tipo_id', 'Tipo de Recinto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre', 'Nombre del Evento'); ?></th>
	
	<th class="actions"><?php echo __('Acciones'); ?></th>

 	</thead>
           <tbody>
             <tr>

	<?php foreach ($solicitudCotizaciones as $solicitudCotizacione): ?>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $solicitudCotizacione['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['EventoTipo']['nombre'], array('controller' => 'evento_tipos', 'action' => 'view', $solicitudCotizacione['EventoTipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['Cliente']['nombreCompleto'], array('controller' => 'clientes', 'action' => 'view', $solicitudCotizacione['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($solicitudCotizacione['RecintoTipo']['nombre'], array('controller' => 'recinto_tipos', 'action' => 'view', $solicitudCotizacione['RecintoTipo']['id'])); ?>
		</td>
		<td><?php echo h($solicitudCotizacione['SolicitudCotizacione']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $solicitudCotizacione['SolicitudCotizacione']['id']), null, __('¿Estás seguro de que quieres eliminar el elemento #%s?', $solicitudCotizacione['SolicitudCotizacione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
                      </table>
                    </div>
	<p>
	<?php 
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}. Se han encontrado: {:count} resultados ')
	));
	?>	</p>

	<?php $pag = $this->Paginator->counter(array('format' => __('{:pages}') ));if( strcmp( $pag , '1') != 0 ){ ?> 
	
	<div class="box-body">
		<ul class="pagination" style="text-align: center;">
		<ul>
	<?php
		echo $this->Paginator->prev('Anterior', array('tag' => 'li'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentClass' => 'active activePaginacion','tag' => 'li'));
		echo $this->Paginator->next('Siguiente', array('tag' => 'li'));
	?>
		</ul>
		</ul>
	</div>
	 <?php } ?>		
	 <?php } 
		 else {  echo "<hr /> <h1 style='text-align: center'> Aún no se han ingresado Solicitud Cotizaciones</h1> <hr />"; } ?>	</div>
	</div>


	
</div>
