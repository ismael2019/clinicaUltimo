<?php
/**
 * @var \App\View\AppView $this
 */
?>
    <div class="container-fluid">
      <ol class="breadcrumb">
         <h1 class="breadcrumb-item active">Registrar Paciente</h1>
      </ol>
      <div class="row">
        <div class="col-8">
                <?= $this->Form->create($patient) ?>

    
    
                 <!--Panel-->
                <div class="card" id="tarjeta">
                    <h3 id="titulo" class="card-header deep-orange lighten-1 white-text">Datos del Paciente.</h3>
                    <div class="card-body" id="cuerpo">
                      <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                <label>Nombre Completo</label>
                                <?= $this->Form->input('full_name', ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre Completo', 'label' => false]);?>
                            </div>
                          </div>
                          <div class="col-md-2">
                                <div class="form-group">
                                    <label>Carnet/DNI</label>
                                    <?= $this->Form->input('ci', ['class' => 'form-control', 'placeholder' => 'C.I.', 'label' => false]);?>
                                </div>
                          </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'correo@mail.com', 'label' => false]);?>
                                </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                <label>Genero</label>
                                <?= $this->Form->input('gender', ['options' => ['male' => 'Masculino', 'female' => 'Femenino'],'class' => 'form-control', 'placeholder' => 'M-F', 'label' => false]);?>
                             </div>
                          </div>
                        </div>
                          <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Edad</label>
                                        <?= $this->Form->input('age', ['class' => 'form-control','label' => false]);?>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <?= $this->Form->input('address', ['class' => 'form-control', 'placeholder' => 'Ingrese su Direccion', 'label' => false]);?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="form-group">
                                        <label>Telefono/Celular</label>
                                        <?= $this->Form->input('phone', ['class' => 'form-control', 'placeholder' => 'Ingrese su Telefono o Celular', 'label' => false]);?>
                                        </div> 
                                </div>
                          </div>
                  </div>
                  </div>
                  <br>
               
                <!--/.Panel-->
               
    

   
                <!--Panel-->
                    <div class="card" id="selecciones">
                        <h3 id="tituloSelec" class="card-header primary-color white-text">Problemas que padece el paciente</h3>
                        <div class="card-body" id="contenido">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <?= $this->Form->input('heart_problems', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Problemas del corazon.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                        <?= $this->Form->input('high_blood_pressure', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Presion sanguinea alta.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('circulatory_problems', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Problemas Circulatorios.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('nervous_problems', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Problemas Nerviosos.
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('radiotherapy', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Radio Terapia.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('artificial_heart_valves', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Valvulas artificiales en el corazon.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('weightloss', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Perdida de peso.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('back_problems', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Problemas de espalda.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('respiratory_diseases', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Enfermedades respiratorios.
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('diabetes', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Diabetes.
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('low_blood_pressure', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Presion arterial baja.
                                        </label>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('epilepsy', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Epilepsia.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('hepatitis', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Hepatitis.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('cancer', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Cancer.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('psychiatric_treatment', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Tratamiento Psiquiatrico.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('special_diet', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Dieta Especial.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('diseases_of_the_blood', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Enfermedades de la sangre.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('arthritis', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Artitris.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('swollen_neck_glands', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Glandulas del cuello hinchadas.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('rheumatic_fever', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Fiebre reumatica.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('vih', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> VIH.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('cerebral_embolism', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Embolia Cerebral.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('ulcers', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Ulceras.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('venereal_diseases', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Enfermedades Venereas.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('hemophilia', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Hemofilia.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('osteoporosis', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Osteoporosis.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('liver_diseases', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Enfermedades Hepatiticas.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('chronic_diarrhea', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Diarrea Cronica.
                                        </label>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('drug_addiction', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Drogadiccion.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                   <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('allergies_to_anesthetics', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Alergia a Anestecias.
                                        </label>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('allergies_to_medicines', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Alergia a Medicinas.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('allergies_to_general', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Alergias General.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('others', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Otros.
                                        </label>
                                    </div>
                                </div>                                
                            </div>
                        <h1>Estado del Paciente</h1>
                            <div class="form-check">
                                        <label class="form-check-label">
                                          <?= $this->Form->input('active', ['type'=>'checkbox','class' => 'form-check-input','label' => false]);?> Active.
                                        </label>
                            </div>
                        </div>
                    </div>
                    <br>
<!--/.Panel-->
         


               
                
                 
                

                    <center><?= $this->Form->button('Registrar', ['class' => 'btn btn-info']) ?></center>
                   <?= $this->Form->end() ?>
                          
        </div>
      </div>
    </div>