  <div class="container-fluid" id="contenidousuarios">
      <div class="row">
        <div class="col-8">
                <?= $this->Form->create($user, ['type' => 'file']) ?>
                 <!--Panel-->
                <div class="card" id="tarjeta">
                    <h3 id="titulo" class="card-header deep-orange lighten-1 white-text">Editar usuario.</h3>
                    <div class="card-body" id="cuerpo">
                        <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                            <label>Nombre Completo</label>
                            <?= $this->Form->input('full_name', ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre Completo', 'label' => false]);?>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                            <label>Carnet/DNI</label>
                            <?= $this->Form->input('ci', ['class' => 'form-control', 'placeholder' => 'Ingrese Numero de Documento', 'label' => false]);?>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                            <label>Correo Electrónico</label>
                                <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Ingrese Correo Electrónico', 'label' => false]);?>
                          </div> 
                        </div> 
                        </div>
                        <div class="row">                 
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Contraseña</label>
                                <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su Contraseña', 'label' => false]);?>
                          </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Teléfono/Celular</label>
                                <?= $this->Form->input('phone', ['class' => 'form-control', 'placeholder' => 'Ingrese Teléfono', 'label' => false]);?>
                            </div> 
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto</label>
                                <?= $this->Form->input('photo', ['type' => 'file', 'class' => 'filestyle', 'data-btnClass' => 'btn-primary', 'data-Text' =>'<i class="fa fa-camera" aria-hidden="true"></i>
                                Examinar','placeholder' => 'Foto', 'label' => false]);?>
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





    