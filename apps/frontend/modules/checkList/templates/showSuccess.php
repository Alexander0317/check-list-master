
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $check_list->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $check_list->getNameWithPrefix() ?></td>
    </tr>
    <tr>
      <th>Descriptor:</th>
      <td><?php echo $check_list->getObservations() ?></td>
    </tr>
    <tr>
      <th>Threshold:</th>
      <td><?php echo $check_list->getOriginalThreshold() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $check_list->getStatus() ?></td>
    </tr>
    <tr>
      <th>Version at:</th>
      <td><?php echo $check_list->getVersionAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $check_list->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $check_list->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a class="btn btn-info" href="<?php echo url_for('checkList/edit?id='.$check_list->getId()) ?>">Editar</a>
&nbsp;
<a class="btn btn-light" href="<?php echo url_for('checkList/index') ?>">Lista</a>
