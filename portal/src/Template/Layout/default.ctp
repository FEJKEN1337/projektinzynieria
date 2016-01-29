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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
<!--
    <?= $this->Html->css('cake.css') ?>
  -->  
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


<link href='http://fonts.googleapis.com/css?family=Lato:400,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


<script type="text/javascript">
function GetClock(){
var d=new Date();
var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
if(nmin<=9) nmin="0"+nmin
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+ndate+"."+(nmonth+1)+"."+nyear+" "+nhour+":"+nmin+":"+nsec+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>


</head>
<body>
   
<div id="container">
    
        
<div id="menu">
            <div class="option"><?= $this->Html->link('Strona Główna', array('controller' => 'Articles', 'action' => 'main')); ?></a></div>
            <?php if($authUser) : ?>
            <div class="option"><?= $this->Html->link('Panel', array('controller' => 'Articles', 'action' => 'index')); ?></a></div>
            <div class="option"><?= $this->Html->link('Wyloguj się', array('controller' => 'Users', 'action' => 'logout')); ?></a></div>
            <?php endif; ?>
            
            <?php if(!$authUser) : ?>
            <div class="option">
    
    

    <?= $this->Html->link('Zaloguj się', array('controller' => 'Users', 'action' => 'login')); ?></a>

</div> <?php endif; ?>

<div id="clockbox"></div>
            <div style="clear:both;"></div>
        
     </div>
        
        <div id="content">
             <?= $this->fetch('content') ?>
        </div>
        
       
      

        
    
     

<div id="footer">
            Jazda z &copy; Wszelkie prawa zastrzeżone
        </div>
</div>



</body>
</html>


