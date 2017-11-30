
 <html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['login/bootstrap.min', 'login/font-awesome.min', 'login/form-elements','login/style']) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
   <body>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Inicie sesión</h3>
                                    <p>Ingrese su nombre de usuario y contraseña para iniciar sesion:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="login-form">
                                    <div class="form-group">
                                    <fieldset>
                                        <label class="sr-only" for="form-username">Nombre de usuario</label>
                                        <?= $this->Form->Control('email', ['class' => 'form-control', 'placeholder' => 'Ingrese su email...', 'label' => false]);?>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <?= $this->Form->Control('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña...', 'label' => false]);?>
                                    </div>
                                    </fieldset>
                                  <div class="row">
                                    <div class="col-lg-6 col-sm-6 ">
                                    <?= $this->Form->button('Ingresar',['class'=>'btn btn-primary','id'=>'botonIniciar'])?>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 ">
                                    <?= $this->Html->link('Regresar',['controller'=>'Pages','action'=>'home'],['class'=>'btn btn-primary','id'=>'botonRegresar'])?>
                                    
                                   </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <?= $this->Html->script(['login/jquery-1.11.1.min.js','login/bootstrap.min', 'login/jquery.backstretch.min.js','login/scripts.js']) ?>
    </body>

</html>