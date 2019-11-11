<div style="background-color: white; padding:10px;">

<h1>Templates List</h1>
</div>
<table>
  <thead>
  <tr>
    <th >Id</th>
    <th class="card-body">Name</th>
    <th class="card-body">Description</th>
    <th class="card-body">Prefix</th>
    <th class="card-body">Threshold</th>
    <th class="card-body">Checklists qt</th>
    <th class="card-body">Status</th>
    <th class="card-body">Created at</th>
    <th class="card-body">Updated at</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($templates as $template): ?>
    <tr>
      <td><a href="<?php echo url_for('template/show?id=' . $template->getId()) ?>"><?php echo $template->getId() ?></a>
      </td>
      <td ><?php echo $template->getName() ?></td>
      <td class="card-body"><?php echo $template->getDescription() ?></td>
      <td class="card-body"><?php echo $template->getPrefix() ?></td>
      <td class="card-body"><?php echo $template->getThreshold() ?></td>
      <td class="card-body"><?php echo $template->getChecklistsQt() ?></td>
      <td class="card-body"><?php echo $template->getStatus() ?></td>
      <td class="card-body"><?php echo $template->getCreatedAt() ?></td>
      <td class="card-body"><?php echo $template->getUpdatedAt() ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<div class="fab">
  <div class="trigger text-white bg-info"><i class="fa fa-ellipsis-v"></i></div>
  <div class="actions">
    <div class="action">
      <a data-toggle="tooltip" data-placement="left" title="Nueva plantilla" href="<?php echo url_for('template/new') ?>" class="btn btn-info btn-circle"><i class="fa fa-plus"></i></a>
    </div>
    <div class="action">
      <button data-placement="left" title="Filtrar"  type="button" class="btn btn-info btn-circle" data-toggle="modal" data-target="#filterModal"
              data-whatever="@getbootstrap"><i class="fa fa-search"></i>
      </button>
    </div>
  </div>


  <?php include_partial('checkList/form_filter', array('url' => 'template/index', 'formFilter' => $formFilter)) ?>

