<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
    <title>SIGEP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    </style>
    <body class="w3-theme-l5">

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"></i>SIGEP</a>
                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button w3-padding-large"  value="Projetos"><i class="fa fa-pencil w3-margin-right"></i>Projetos</button>
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                        <?php echo $this->Html->link('Novo Projeto', array('controller' => 'projects', 'action' => 'add'), array('class' => 'w3-bar-item w3-button')) ?>
                        <?php echo $this->Html->link('Projetos Cadastrados', array('controller' => 'projects', 'action' => 'index'), array('class' => 'w3-bar-item w3-button')) ?>
                        <?php echo $this->Html->link('Avaliar Projeto', array('controller' => 'evaluations', 'action' => 'add'), array('class' => 'w3-bar-item w3-button')) ?>
                    </div>
                </div>

                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button w3-padding-large" value="Avaliacoes"><i class="fa fa-file w3-margin-right"></i>Avaliaçoes</button>
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                        <?php echo $this->Html->link('Nova Avaliaçao', array('controller' => 'evaluations', 'action' => 'add'), array('class' => 'w3-bar-item w3-button')) ?>
                        <?php echo $this->Html->link('Avaliaçoes Realizadas', array('controller' => 'evaluations', 'action' => 'index'), array('class' => 'w3-bar-item w3-button')) ?>
                    </div>
                </div>

                <div class="w3-dropdown-hover w3-hide-small">
                    <?php echo $this->Html->link('Instituições', array('controller' => 'institutions', 'action' => 'index'), array('class' => 'w3-button w3-padding-large')) ?>
                </div>

                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button w3-padding-large" value="quesitos"><i class="fa fa-info w3-margin-right"></i>Quesitos Avaliados</button>
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                        <?php echo $this->Html->link('Criterios', array('controller'=>'criterions','action'=>'index'), array('class'=>'w3-bar-item w3-button'))?>
                        <?php echo $this->Html->link('Subcriterios', array('controller'=>'subcriterions','action'=>'index'), array('class'=>'w3-bar-item w3-button'))?>
                        <?php echo $this->Html->link('standards', array('controller'=>'subcriterions','action'=>'index'), array('class'=>'w3-bar-item w3-button'))?>
                        <?php echo $this->Html->link('standards', array('controller'=>'subcriterions','action'=>'index'), array('class'=>'w3-bar-item w3-button'))?>
                    </div>
                </div>

                <div class="w3-dropdown-hover w3-hide-small">
                    <button class="w3-button w3-padding-large" value="ajuda"><i class="fa fa-question w3-margin-right"></i>Ajuda</button>
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                        <a href="#" class="w3-bar-item w3-button">Como utilizar</a>
                    </div>
                </div>
                <!--
        
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a> -->
                <div class="w3-dropdown-hover w3-hide-small w3-right">
                    <button class="w3-button w3-padding-large" value="ajuda"><i class="fa fa-user "></i> <?= $user['username']?></button>
                    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                        <a href="#" class="w3-bar-item w3-button">Minha Conta</a>
                        <?= $this->Html->link('<i class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white fa fa-home">' . __('Logout') . '</i>', ['action' => 'logout'], ['escape' => false]) ?>
                    </div>
                </div> </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">My profile</a>
        </div>

        <!-- Page Container -->
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
            <!-- The Grid -->
            <div class="w3-row">
                <!-- Left Column -->
                <div class="w3-col m3">
                    <!-- Profile -->
                    <div class="w3-card-2 w3-round w3-white">
                        <div class="w3-container">
                            <h4 class="w3-center">Meu Perfil</h4>
                            <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                            <hr>
                            <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
                            <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
                        </div>
                    </div>
                    <br>

                    <!-- Accordion -->
                    <div class="w3-card-2 w3-round">
                        <div class="w3-white">
                            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Meus grupos</button>
                            <div id="Demo1" class="w3-hide w3-container">
                                <p>Metodologias Ageis</p>
                            </div>
                            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-pencil fa-fw w3-margin-right"></i> Meus Projetos</button>
                            <div id="Demo2" class="w3-hide w3-container">
                                <p>Projeto TCC 1</p>
                            </div>
                            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-file fa-fw w3-margin-right"></i> Minhas Avaliaçoes</button>
                            <div id="Demo3" class="w3-hide w3-container">
                                <div class="w3-row-padding">
                                    <p>Avaliaçao Projeto de Metodologias Ageis</p>
                                    <!--   <div class="w3-half">
                                        <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>

                    <!-- End Left Column -->
                </div>

                <!-- Middle Column -->
                <div class="w3-col m7">

                    <div class="w3-row-padding">
                        <div class="w3-col m12">
                            <div class="w3-card-2 w3-round w3-white">
                                <div class="w3-container w3-padding">
                                    <h6 class="w3-opacity">Busque por Projetos</h6>
                                    <p contenteditable="true" class="w3-border w3-padding">Pesquise aqui</p>
                                    <button type="button" class="w3-button w3-theme"><i class="fa fa-search"></i>  Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>

                    </div>
                    <!-- End Middle Column -->
                </div>

                <!-- Right Column -->

                <div class="w3-col m2">

                    <!--  <div class="w3-card-2 w3-round w3-white w3-center">
                          <div class="w3-container">
                              <p>Upcoming Events:</p>
                              <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
                              <p><strong>Holiday</strong></p>
                              <p>Friday 15:00</p>
                              <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                          </div>
                      </div>
                      <br>
          
                      <div class="w3-card-2 w3-round w3-white w3-center">
                          <div class="w3-container">
                              <p>Friend Request</p>
                              <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
                              <span>Jane Doe</span>
                              <div class="w3-row w3-opacity">
                                  <div class="w3-half">
                                      <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
                                  </div>
                                  <div class="w3-half">
                                      <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <br> -->

                    <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
                        <p>ADS</p>
                    </div>
                    <br>

                    <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
                        <p><i class="fa fa-bug w3-xlarge"></i></p>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
        <br>

        <footer class="w3-container w3-theme-d5">
            <h5>Sistema de Gerenciamento de Projetos - SIGEP</h5>
            <p>Todos os direitos reservados a Pombos ltda.</p>
        </footer>

        <script>
            // Accordion
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                    x.previousElementSibling.className += " w3-theme-d1";
                } else {
                    x.className = x.className.replace("w3-show", "");
                    x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-theme-d1", "");
                }
            }

            // Used to toggle the menu on smaller screens when clicking on the menu button
            function openNav() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>

    </body>
</html>
