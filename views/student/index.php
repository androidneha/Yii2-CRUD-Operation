<?php
use yii\helpers\Html;
?>
 
<style>
a
{
    margin-right: 10px;
    margin-left: 10px;
}
</style>
 

<h1>Student Details</h1>
<table class='table' style="margin-top: 80px">
    <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php foreach($model as $field){ ?>
    <tr>
        <td><?= $field->full_name; ?></td>
        <td><?= $field->address; ?></td>
        <td><?= $field->phone; ?></td>
        <td><?= Html::a("Edit", ['student/edit', 'id' => $field->id] , ['class' => 'btn btn-success col-xs-3']); ?>   <?= Html::a("Delete", ['student/delete', 'id' => $field->id], ['class' => 'btn btn-danger col-xs-3']); ?></td>
    </tr>
    <?php }
    echo Html::a('Add Record', ['student/create'], ['class' => 'btn btn-primary col-xs-1 pull-right']);
    ?>
    
</table>

