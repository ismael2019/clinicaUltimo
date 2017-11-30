<?php
/**
 * @var \App\View\AppView $this
 */
?>
  <div class="container-fluid" id="contenidousuarios">
      <div class="row">
        <div class="col-8">
                <?= $this->Form->create($recipe) ?>
                 <!--Panel-->
                <div class="card" id="tarjeta">
                    <h3 id="titulo" class="card-header deep-orange lighten-1 white-text">Registrar receta medica.</h3>
                    <div class="card-body" id="cuerpo">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Detalle</label>
                                    <?= $this->Form->input('detail', ['type'=>'textarea','class' => 'form-control', 'placeholder' => 'Ingrese Nombre Completo', 'label' => false]);?>
                                </div>
                                <div class="form-group">
                                    <label>Tratamiento</label>
                                    <?= $this->Form->input('treatment_id',['multiple class' => 'form-control', 'label' => false],['options' => $treatments]);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <!--/.Panel-->
        </div>
        </div>
        <br>
         <center> <?= $this->Form->button('Registrar', ['class' => 'btn btn-info']) ?> </center>
                                <?= $this->Form->end() ?>
    </div>







