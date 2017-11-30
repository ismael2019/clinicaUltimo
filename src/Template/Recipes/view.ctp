<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recipe $recipe
 */
?>
    <div class="container-fluid">
     
      <div class="row">
            <div class="col-12">
            <div class="card border-info mb-3 ">
            <div class="card text-white bg-info mb-3">
              <div class="card-header"><h3>Detalle de receta medica</h3></div>
            </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped table-sm">
                        <tr>
                            <th>Detalle</th>
                            <td><?= h($recipe->detail) ?></td>
                        </tr>
                        <tr>
                            <th>Pertenece al tratamiento</th>
                            <td><?= $recipe->has('treatment') ? $this->Html->link($recipe->treatment->name, ['controller' => 'Treatments', 'action' => 'view', $recipe->treatment->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td><?= $this->Number->format($recipe->id) ?></td>
                        </tr>
                        <tr>
                            <th>Creado</th>
                            <td><?= h($recipe->created) ?></td>
                        </tr>
                        <tr>
                            <th>Modificado</th>
                            <td><?= h($recipe->modified) ?></td>
                        </tr>
                    </table>
    
                </div>
            </div>
            </div>
        </div>
    </div>




