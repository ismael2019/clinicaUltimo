<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
                    <div class="card-header"><h3>Datos del Paciente: <?= h($patient->full_name) ?></h3></div>
                </div>
          <div class="card-body">
    
                
    <table class="table table-responsive table-striped table-sm" id="tabla">
        <tr>
             <th>Nombre Completo: </th>
             <td><?= h($patient->full_name) ?></td>
        </tr>
            
        <tr>
             <th>C.I:</th>
             <td><?= h($patient->ci) ?></td>
        </tr>
         <tr>
             <th>Correo Electronico</th>
             <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th>Genero</th>
            <td><?php if ($patient->gender==='male'){
                        echo "Hombre";
                    }else{
                        echo "Mujer";
                    }
                ?></td>
        </tr>
        <tr>
            <th>Direccion</th>
            <td><?= h($patient->address) ?></td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?= $this->Number->format($patient->age) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($patient->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($patient->modified) ?></td>
        </tr>
        </table>
        </div>
    </div>
    </div>
    </div>
    </div>

<div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header" id="tituloproblemas"><h3>Problemas que presenta el paciente:</h3></div>
        </div>
          <div class="card-body">
        <table id="cuerpoproblemas" class="table table-responsive table-striped table-sm">
        
        <tr>
            <th>Problemas del Corazon</th>
            <td><?= $patient->heart_problems ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Presion arterial alta</th>
            <td><?= $patient->high_blood_pressure ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas circulatorios</th>
            <td><?= $patient->circulatory_problems ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas Nerviosos</th>
            <td><?= $patient->nervous_problems ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Radio Terapia</th>
            <td><?= $patient->radiotherapy ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Valvulas artificiales en el corazon</th>
            <td><?= $patient->artificial_heart_valves ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Perdida de peso</th>
            <td><?= $patient->weightloss ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Problemas de espalda</th>
            <td><?= $patient->back_problems ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades respiratorias</th>
            <td><?= $patient->respiratory_diseases ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Diabetes</th>
            <td><?= $patient->diabetes ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Presion arterial baja</th>
            <td><?= $patient->low_blood_pressure ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Epilepsia</th>
            <td><?= $patient->epilepsy ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Hepatitis</th>
            <td><?= $patient->hepatitis ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Cancer</th>
            <td><?= $patient->cancer ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Tratamiento Psiquiatrico</th>
            <td><?= $patient->psychiatric_treatment ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Dieta Especial</th>
            <td><?= $patient->special_diet ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades en la sangre</th>
            <td><?= $patient->diseases_of_the_blood ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Artitris</th>
            <td><?= $patient->arthritis ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Glandulas del cuello hinchada</th>
            <td><?= $patient->swollen_neck_glands ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Fiebre Reumatica</th>
            <td><?= $patient->rheumatic_fever ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Vih</th>
            <td><?= $patient->vih ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Embolia cerebral</th>
            <td><?= $patient->cerebral_embolism ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Ulceras</th>
            <td><?= $patient->ulcers ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades veneras</th>
            <td><?= $patient->venereal_diseases ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Hemofilia</th>
            <td><?= $patient->hemophilia ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Osteoporosis</th>
            <td><?= $patient->osteoporosis ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Enfermedades hepatiticas</th>
            <td><?= $patient->liver_diseases ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Diarrea cronica</th>
            <td><?= $patient->chronic_diarrhea ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Drogadiccion</th>
            <td><?= $patient->drug_addiction ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Alergias a anestecias</th>
            <td><?= $patient->allergies_to_anesthetics ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Alergias a medicinas</th>
            <td><?= $patient->allergies_to_medicines ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Allergies generales</th>
            <td><?= $patient->allergies_to_general ? __('Si') : __('No'); ?></td>
        </tr>
        <tr>
            <th>Otros</th>
            <td><?= $patient->others ? __('Si') : __('No'); ?></td>
        </tr>
       </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header" id="tituloestado"><h3>Estado del paciente:</h3></div>
        </div>
          <div class="card-body" >
        <table id="cuerpoestado" class="table table-responsive table-striped table-sm">
        <tr>
            <th>Activo</th>
            <td><?= $patient->active ? __('Si') : __('No'); ?></td>
        </tr>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h3>Problemas que presenta el paciente:</h3></div>
        </div>
          <div class="card-body">
        <?php if (!empty($patient->consultations)): ?>
        <table class="table table-responsive table-striped table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Diagnosis') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Treatment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($patient->consultations as $consultations): ?>
            <tr>
                <td><?= h($consultations->id) ?></td>
                <td><?= h($consultations->diagnosis) ?></td>
                <td><?= h($consultations->detail) ?></td>
                <td><?= h($consultations->active) ?></td>
                <td><?= h($consultations->created) ?></td>
                <td><?= h($consultations->modified) ?></td>
                <td><?= h($consultations->user_id) ?></td>
                <td><?= h($consultations->patient_id) ?></td>
                <td><?= h($consultations->treatment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
         <?php endif; ?>
    </div>
    </div>
    </div>
    </div>
        
   
               
            

