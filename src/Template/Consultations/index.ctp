<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultation[]|\Cake\Collection\CollectionInterface $consultations
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe[]|\Cake\Collection\CollectionInterface $recipes
 */
?>
 <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h1>Lista de consultas medicas</h1></div>
        </div>
          <div class="card-body">
            <table class="table table-responsive table-striped table-sm">
        <thead>
            <tr class="bg-warning">
                <th>Diagnostico</th>
                <th>Detalle</th>
                <th>Estado del Paciente</th>
                <th>Creado</th>
                
                <th>Atendido por:</th>
                <th>Consulta del paciente</th>
                <th>Tratamiento asignado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($consultations as $consultation): ?>
            <tr>
               
                <td><?= h($consultation->diagnosis) ?></td>
                <td><?= h($consultation->detail) ?></td>
                <td><?= $consultation->active ? __('Activo') : __('No Activo'); ?></td>
               <td><?= h($consultation->created) ?></td>
                
                <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->full_name, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
                <td><?= $consultation->has('patient') ? $this->Html->link($consultation->patient->full_name, ['controller' => 'Patients', 'action' => 'view', $consultation->patient->id]) : '' ?></td>
                <td><?= $consultation->has('treatment') ? $this->Html->link($consultation->treatment->name, ['controller' => 'Treatments', 'action' => 'view', $consultation->treatment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(('<i class="fa fa-eye" aria-hidden="true"></i>'), ['action' => 'view', $consultation->id] ,['class'=>'btn btn-info','escape'=>false]) ?>
                    <?= $this->Html->link(('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), ['action' => 'edit', $consultation->id],['class'=>'btn btn-success','escape'=>false]) ?>
                    <?= $this->Form->postLink(('<i class="fa fa-trash" aria-hidden="true"></i>'), ['action' => 'delete', $consultation->id],['class'=>'btn btn-danger','escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  
          </div>
        </div>
  <center>      
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} usuario(s) de {{count}}')]) ?></p>
    </div>
    </center>
</div>
</div>
</div>







