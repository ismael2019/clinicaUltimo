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
              <div class="card-header"><h1>Lista de recetas medicas</h1></div>
        </div>
          <div class="card-body">
            <table class="table table-responsive table-striped table-sm">
        <thead>
            <tr class="bg-warning">
                
                <th>Detalle de receta</th>
                <th>Pertenece a:</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach ($recipes as $recipe): ?>
            <tr>
               
                <td><?= h($recipe->detail) ?></td>
                <td><?= $recipe->has('treatment') ? $this->Html->link($recipe->treatment->name, ['controller' => 'Treatments', 'action' => 'view', $recipe->treatment->id]) : '' ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(('<i class="fa fa-eye" aria-hidden="true"></i>'), ['action' => 'view', $recipe->id] ,['class'=>'btn btn-info','escape'=>false]) ?>
                    <?= $this->Html->link(('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), ['action' => 'edit', $recipe->id],['class'=>'btn btn-success','escape'=>false]) ?>
                    <?= $this->Form->postLink(('<i class="fa fa-trash" aria-hidden="true"></i>'), ['action' => 'delete', $recipe->id],['class'=>'btn btn-danger','escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]) ?>
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






