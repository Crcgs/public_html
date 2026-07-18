<div class="box">

<div class="box-header">

<h3 class="box-title">User Activity Logs</h3>

</div>

<div class="box-body table-responsive">

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>ID</th>

<th>User</th>

<th>Module</th>

<th>Action</th>

<th>Description</th>

<th>IP</th>

<th>Browser</th>

<th>Date</th>

</tr>

</thead>

<tbody>

<?php foreach($logs as $log): ?>

<tr>

<td><?= $log['id']; ?></td>
<td><?= esc($log['username']); ?></td>
<td><?= esc($log['module']); ?></td>
<td><?= esc($log['action']); ?></td>
<td><?= esc($log['description']); ?></td>
<td><?= esc($log['ip_address']); ?></td>
<td><?= esc($log['browser']); ?></td>
<td><?= esc($log['created_at']); ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>