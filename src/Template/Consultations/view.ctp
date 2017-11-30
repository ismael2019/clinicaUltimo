<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultation $consultation
 */
?>
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
              <div class="card-header"><h3>Detalle de Consulta</h3></div>
            </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped table-sm">
                        <tr>
                            <th>Diagnostico</th>
                            <td><?= h($consultation->diagnosis) ?></td>
                        </tr>
                        <tr>
                            <th>Detalle</th>
                            <td><?= h($consultation->detail) ?></td>
                        </tr>
                        <tr>
                            <th>Atendido por</th>
                            <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->full_name, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th>Paciente</th>
                            <td><?= $consultation->has('patient') ? $this->Html->link($consultation->patient->full_name, ['controller' => 'Patients', 'action' => 'view', $consultation->patient->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th>Tratamiento</th>
                            <td><?= $consultation->has('treatment') ? $this->Html->link($consultation->treatment->name, ['controller' => 'Treatments', 'action' => 'view', $consultation->treatment->id]) : '' ?></td>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <td><?= $this->Number->format($consultation->id) ?></td>
                        </tr>
                        <tr>
                            <th>Creado</th>
                            <td><?= h($consultation->created) ?></td>
                        </tr>
                        <tr>
                            <th>Modificado</th>
                            <td><?= h($consultation->modified) ?></td>
                        </tr>
                        <tr>
                            <th>Estado del paciente</th>
                            <td><?= $consultation->active ? __('Activo') : __('No Activo'); ?></td>
                        </tr>
                    </table>
    
                </div>
            </div>
            </div>
        </div>
    </div>







