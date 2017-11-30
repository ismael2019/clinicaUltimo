<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Treatment[]|\Cake\Collection\CollectionInterface $treatments
 */
?>
<div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h1>Lista de Tratamientos</h1></div>
        </div>
          <div class="card-body">
          <table class="table table-responsive table-striped table-sm">
        <thead>
            <tr class="bg-warning">
                <th>Tratamiento</th>
                <th>Descripcion</th>
                <th>Costo total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($treatments as $treatment): ?>
            <tr>
                <td><?= h($treatment->name) ?></td>
                <td><?= h($treatment->description) ?></td>
                <td><?= $this->Number->format($treatment->total_cost) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<i class="fa fa-eye" aria-hidden="true"></i>'), ['action' => 'view', $treatment->id],['class'=>'btn btn-info','escape'=>false]) ?>
                    <?= $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), ['action' => 'edit', $treatment->id],['class'=>'btn btn-success','escape'=>false]) ?>
                    <?= $this->Form->postLink(__('<i class="fa fa-trash" aria-hidden="true"></i>'), ['action' => 'delete', $treatment->id],['class'=>'btn btn-danger','escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $treatment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <center>      
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} Tratamiento(s) de {{count}}')]) ?></p>
    </div>
    </center>
          </div>
        </div>
        </div>
        </div>
    </div>
    
    
