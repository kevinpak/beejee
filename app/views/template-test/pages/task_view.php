<div class="page-content">
<div class="page-content__head">
<h1 class="i-title-page"><?=(isset($pageTitle))? $pageTitle:'';?></h1>
</div>
<div class="page-content__menu">
<ul>
<li><a href="<?=BASE_URL.'task/add'?>" class="i-add">Новая задача</a></li>
</ul>
</div>
<div class="page-content__main">
<?php
if($all_tasks):
  //var_dump($all_tasks);
  ?>
  <table class="i-table" id="task-table">
  <thead>
  <tr>
  <th>Имя пользователя</th>
  <th>E-mail</th>
  <th>Текст задачи</th>
  <th>Статус</th>
  </tr>
  </thead>
  <tbody>
  <?php
  foreach($all_tasks as $all_task):
    $ideTask = $all_task->ideTas;
    $status = $all_task->status;
    $up = $all_task->up;
    ?>
    <tr>
    <td><?=$all_task->name;?></td>
    <td><?=$all_task->email;?></td>
    <td>
    <?=$all_task->task;?>
    </td>
    <td>
    <ul class="tbl-action">
    
    <?php 
    if($status==1):
      if(isset($_SESSION['admin'])):
        ?>
        <li><a href="<?=BASE_URL.'task/update/?id='.$ideTask;?>" class="toggle-officon- js-update-status" data-toggle="modal" data-target="#upStatus" data-idtask="<?=$ideTask;?>"></a></li>
        <?php
      endif;
      elseif($status==2):
        ?>
        <li>
        <span class="okicon- green">Выполнено</span>
        <?php
        if($up>0):
          ?>
          <span class="okicon- ">Отредактировано администратором</span>
          <?php
        endif;
        ?>
        </li>
        
        <?php
      endif;
      ?>
      <?php
      if(isset($_SESSION['admin'])):
        ?>
        <li><a href="<?=BASE_URL.'task/update/?id='.$ideTask;?>" class="editicon-"></a></li>
        <?php
      endif;
      ?>
      
      
      </ul>
      </td>
      </tr>
      <?php
    endforeach;
    ?>
    </tbody>
    </table>
    
    <?php
  else:
    echo '<div class="alert-empty alert alert-primary" role="alert">Информация не найдена</div>';
  endif;
  ?>
  
  
  </div>
  
  </div>
  
  
  