<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
  <div class="container-fluid" id="contenidousuarios">
      <div class="row">
        <div class="col-8">
               <?= $this->Form->create($consultation) ?>
                 <!--Panel-->
                <div class="card" id="tarjeta">
                    <h3 id="titulo" class="card-header deep-orange lighten-1 white-text">Registrar nueva consulta.</h3>
                    <div class="card-body" id="cuerpo">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Diagnostico</label>
                                    <?= $this->Form->input('diagnosis', ['type'=>'textarea','class' => 'form-control', 'label' => false]);?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Detalle</label>
                                    <?= $this->Form->input('detail', ['type'=>'textarea','class' => 'form-control', 'label' => false]);?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check">
                                        <label class="form-check-label">
                                        <?= $this->Form->input('active', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Estado del paciente.
                                        </label>
                                    </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Atendido por</label>
                                    <?= $this->Form->input('user_id',['multiple class' => 'form-control', 'label' => false],['options' => $users]);?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Consulta del paciente</label>
                                    <?= $this->Form->input('patient_id',['multiple class' => 'form-control', 'label' => false],['options' => $patients]);?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Tratamiento</label>
                                    <?= $this->Form->input('treatment_id',['multiple class' => 'form-control', 'label' => false],['options' => $treatments]);?>
                                </div>
                            </div>
                            
                        </div>
                        
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                 
                <!--/.Panel-->
        </div>
       
        <br>
         <center> <?= $this->Form->button('Registrar', ['class' => 'btn btn-info']) ?> </center>
                                <?= $this->Form->end() ?> <br>
    











