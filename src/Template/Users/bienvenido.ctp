<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clinica dental y de Especialidades</title>
<meta name="description" content="">
<meta name="author" content="">

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['notificacion/bootstrap','notificacion/style','notificacion/font-awesome','notificacion/prettyPhoto','notificacion/estilo']) ?>
        
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="preloader">
  <div id="status"> <?=$this->Html->image('index/preloader.gif'); ?> </div>
</div>
<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">

      <div class="row">
        <div>
          <div class="container">
		  	<p id="palabra1"><a id="brillo" href="">Bienvenido: <br> <?= $current_user['full_name'] ?></a></p>
		  </div>
           <?= $this->Html->link('Continuar...',['controller'=>'Users','action'=>'index'],['class'=>'btn btn-success','id'=>'botonRegresar'])?>
      </div>
    </div>
  </div>
</div>


<!-- Javascripts
    ================================================== --> 

<?= $this->Html->script(['notificacion/jquery.1.11.1','notificacion/bootstrap','notificacion/SmoothScroll','notificacion/jquery.prettyPhoto','notificacion/jquery.isotope','notificacion/jquery.parallax','notificacion/jqBootstrapValidation','notificacion/contact_me','notificacion/main'])?>
</body>
</html>
