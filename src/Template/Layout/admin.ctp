<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['admin/bootstrap.min', 'admin/font-awesome.min', 'admin/sb-admin.min','admin/estilo']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <a class="navbar-brand" id="clinica">Clinica Dental</a>
    <button id="boton" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars" aria-hidden="true"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="imagen navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages1">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <span class="nav-link-text" id="texto">Menu Usuarios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages1">
            <li>
              <?= $this->Html->link('<i class="fa fa-user-plus" aria-hidden="true"></i> Agregar Usuario', ['controller' => 'Users', 'action' => 'add'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
            <li>
              <?= $this->Html->link('<i class="fa fa-list-ol" aria-hidden="true"></i> Lista de Usuarios', ['controller' => 'Users', 'action' => 'index'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
             <i class="fa fa-user" aria-hidden="true"></i>
             <span class="nav-link-text" id="texto">Menu pacientes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
            <li>
             <?= $this->Html->link('<i class="fa fa-plus-square" aria-hidden="true"></i> Registrar paciente', ['controller' => 'Patients', 'action' => 'add'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
            <li>
             <?= $this->Html->link('<i class="fa fa-list-ol" aria-hidden="true"></i> Lista de Pacientes', ['controller' => 'Patients', 'action' => 'index'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages3" data-parent="#exampleAccordion">
             <i class="fa fa-file-text" aria-hidden="true"></i>
             <span class="nav-link-text" id="texto">Menu recetas medicas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages3">
            <li>
             <?= $this->Html->link('<i class="fa fa-plus-square" aria-hidden="true"></i> Agregar receta medica', ['controller' => 'Recipes', 'action' => 'add'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
            <li>
             <?= $this->Html->link('<i class="fa fa-list-ol" aria-hidden="true"></i> Lista de recetas medicas', ['controller' => 'Recipes', 'action' => 'index'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages4" data-parent="#exampleAccordion">
             <i class="fa fa-heartbeat" aria-hidden="true"></i>
            <span class="nav-link-text" id="texto">Tratamientos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages4">
            <li>
            <?= $this->Html->link('<i class="fa fa-plus-square" aria-hidden="true"></i> Agregar nuevo tratamiento', ['controller' => 'Treatments', 'action' => 'add'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
            <li>
             <?= $this->Html->link('<i class="fa fa-plus-square" aria-hidden="true"></i> Lista de tratamientos', ['controller' => 'Treatments', 'action' => 'index'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages5" data-parent="#exampleAccordion">
             <i class="fa fa-stethoscope" aria-hidden="true"></i>
            <span class="nav-link-text" id="texto">Consultas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages5">
            <li>
            <?= $this->Html->link('<i class="fa fa-medkit" aria-hidden="true"></i> Registrar nueva consulta', ['controller' => 'Consultations', 'action' => 'add'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
            <li>
             <?= $this->Html->link('<i class="fa fa-hospital-o" aria-hidden="true"></i> Lista de consultas', ['controller' => 'Consultations', 'action' => 'index'], ['class'=>'nav-link','escape' => false]) ?>
            </li>
          </ul>
        </li>
        <!--
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="fondito">
            <i class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto" id="menumensajes">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small" id="textopeque">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small" id="textopeque">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small" id="textopeque">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a id="texto2" class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          
            <?= $this->Html->link('<i class="fa fa-fw fa-sign-out"></i> Cerrar Sesion', ['controller' => 'Users', 'action' => 'logout'], ['class' =>'btn btn-danger', 'escape' => false]) ?>
        </li>
      </ul>
    </div>
  </nav>
      
  <div class="content-wrapper">
      <?= $this->Flash->render() ?>
     <?= $this->fetch('content') ?>
    <div>
       
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer" id="pie">
      <div class="container">
        <div class="text-center">
          <small id="pieletra">Clinica Dental DFVD 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" id="que">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
</div>

    



     <?= $this->Html->script(['admin/jquery.min', 'admin/popper.min', 'admin/bootstrap.min', 'admin/jquery.easing.min', 'admin/sb-admin.min', 'admin/bootstrap-filestyle.min']) ?>
</body>
</html>
