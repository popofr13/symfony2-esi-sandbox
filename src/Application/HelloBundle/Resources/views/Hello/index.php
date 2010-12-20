<?php $view->extend('HelloBundle::layout.php') ?>

<div id="divZone1">
    <?php echo $view['actions']->render('HelloBundle:Hello:zone1', array('id' => $id), array('standalone' => true)) ?>
</div>

<div id="divZone2">
    <?php echo $view['actions']->render('HelloBundle:Hello:zone2', array('id' => $id), array('standalone' => true)) ?>
</div>

<div id="divZone3">
    <?php echo $view['actions']->render('HelloBundle:Hello:zone3', array('id' => $id), array('standalone' => true)) ?>
</div>
