<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient[]|\Cake\Collection\CollectionInterface $patients
 */
?>
 <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h1>Lista de Pacientes</h1></div>
        </div>
          <div class="card-body">
            <table class="table table-responsive table-striped table-sm">
        <thead>
            <tr class="bg-warning">
                <th>Nombre del Paciente</th>
                <th>C.I</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= h($patient->full_name) ?></td>
                <td><?= h($patient->ci) ?></td>
                <td><?= h($patient->email) ?></td>
                <td>
               <?php if ($patient->gender==='male'){
                        echo "Hombre";
                    }else{
                        echo "Mujer";
                    }
                ?>
                </td>
                <td><?= $this->Number->format($patient->age) ?></td>
                <td><?= h($patient->phone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(('<i class="fa fa-eye" aria-hidden="true"></i>'), ['action' => 'view', $patient->id],['class'=>'btn btn-info','escape'=>false]) ?>
                    <?= $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), ['action' => 'edit', $patient->id],['class'=>'btn btn-success','escape'=>false]) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash" aria-hidden="true"></i>'), ['action' => 'delete', $patient->id],['class'=>'btn btn-danger','escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
          </div>
        </div>
  
</div>
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
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} Paciente(s) de {{count}}')]) ?></p>
    </div>
    </center>


  
