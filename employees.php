<?php include 'includes/header.php'; ?>

<div class="container-fluid">

<div class="row">

<?php include 'includes/sidebar.php'; ?>

<div class="col-md-10">

<div class="topbar">

<h2>Employee Directory</h2>

</div>

<div class="container mt-4">

<table class="table table-bordered">

<tr>

<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Action</th>

</tr>

<tr>

<td>1</td>
<td>John Miller</td>
<td>IT</td>
<td>
<a href="viewemployee.php?id=1"
class="btn btn-primary">

View

</a>
</td>

</tr>

<tr>

<td>2</td>
<td>Sarah Johnson</td>
<td>HR</td>
<td>

<a href="viewemployee.php?id=2"
class="btn btn-primary">

View

</a>

</td>

</tr>

</table>

</div>

</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>
