<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Treatment $treatment
 */
?>
<div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h3><?= h($treatment->name) ?></h3></div>
        </div>
          <div class="card-body">
          <table class="table table-responsive table-striped table-sm">
        <tr>
            <th>Nombre del tratamiento</th>
            <td><?= h($treatment->name) ?></td>
        </tr>
        <tr>
            <th>Descripcion</th>
            <td><?= h($treatment->description) ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($treatment->id) ?></td>
        </tr>
        <tr>
            <th>Costo total</th>
            <td><?= $this->Number->format($treatment->total_cost) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($treatment->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($treatment->modified) ?></td>
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
              <div class="card-header"><h3>Detalles de consultas</h3></div>
        </div>
          <div class="card-body">
            <?php if (!empty($treatment->consultations)): ?>
          <table class="table table-responsive table-striped table-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Diagnosis') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Payment Type') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Treatment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($treatment->consultations as $consultations): ?>
            <tr>
                <td><?= h($consultations->id) ?></td>
                <td><?= h($consultations->diagnosis) ?></td>
                <td><?= h($consultations->detail) ?></td>
                <td><?= h($consultations->active) ?></td>
                <td><?= h($consultations->payment_type) ?></td>
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
    </div>

 <div class="container-fluid">         
    <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h3>Detalles de recetas medicas</h3></div>
        </div>
          <div class="card-body">
          <?php if (!empty($treatment->recipes)): ?>
          <table class="table table-responsive table-striped table-sm">
            <tr>
                <th>Id</th>
                <th>Detalle</th>
                <th>Creado</th>
                <th>Modificado</th>
                <th>Id tratamiento</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($treatment->recipes as $recipes): ?>
            <tr>
                <td><?= h($recipes->id) ?></td>
                <td><?= h($recipes->detail) ?></td>
                <td><?= h($recipes->created) ?></td>
                <td><?= h($recipes->modified) ?></td>
                <td><?= h($recipes->treatment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recipes', 'action' => 'view', $recipes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recipes', 'action' => 'edit', $recipes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipes', 'action' => 'delete', $recipes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
          </div>
        </div>
    </div>
    </div>
      

