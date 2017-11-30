 <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h1>Lista de usuarios</h1></div>
        </div>
          <div class="card-body">
            <table class="table table-responsive table-striped table-sm">
        <thead>
            <tr class="bg-warning">
                <th>Foto</th>
                <th>Nombre completo</th>
                <th>C.I</th>
                <th>Email</th>
                <th>Telefono/cel</th>
                <th>Cargo</th>
                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$this->Html->image('../files/users/photo/' . $user->photo_dir . '/square_' . $user->photo,['class'=>'img-fluid','width'=>'100px']); ?></td>
                <td><?= h($user->full_name) ?></td>
                <td><?= h($user->ci) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->role) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(('<i class="fa fa-eye" aria-hidden="true"></i>'), ['action' => 'view', $user->id] ,['class'=>'btn btn-info','escape'=>false]) ?>
                    <?= $this->Html->link(('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), ['action' => 'edit', $user->id],['class'=>'btn btn-success','escape'=>false]) ?>
                    <?= $this->Form->postLink(('<i class="fa fa-trash" aria-hidden="true"></i>'), ['action' => 'delete', $user->id],['class'=>'btn btn-danger','escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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






