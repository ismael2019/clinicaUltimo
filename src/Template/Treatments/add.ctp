<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <!--Panel-->
<div class="card">
    <h3 id="titulo" class="card-header primary-color white-text">Registrar nuevo Tratamiento</h3>
    <div class="card-body" id="cuerpo">
        <?= $this->Form->create($treatment) ?>
                <div class="form-group">
                        <label>Nombre del Tratamiento</label>
                            <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'label' => false]);?>
                    </div>
                <div class="form-group">
                        <label>Descripcion del Tratamiento</label>
                            <?= $this->Form->input('description', ['class' => 'form-control', 'placeholder' => 'Ingrese Descripcion', 'label' => false]);?>
                    </div>
                <div class="form-group">
                        <label>Costo del Tratamiento</label>
                            <?= $this->Form->input('total_cost', ['class' => 'form-control', 'label' => false]);?>
                    </div>
                    
    </div>
</div>
<!--/.Panel-->
<br>
<center> <?= $this->Form->button('Registrar', ['class' => 'btn btn-info']) ?> </center>
          <?= $this->Form->end() ?>
    </div>
</div>
</div>


          
         

