<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Categories</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="dashboard.php">
<i class="bi bi-list-task"></i> Task Manager
</a>

<div class="navbar-nav ms-auto">

<a class="nav-link" href="dashboard.php">Dashboard</a>
<a class="nav-link" href="tasks.php">Tasks</a>
<a class="nav-link active" href="categories.php">Categories</a>
<a class="nav-link" href="logout.php">Logout</a>

</div>

</div>

</nav>

<div class="container mt-4">

<h2 class="page-title">Task Categories</h2>

<div class="row">

<!-- Academic -->
<div class="col-md-4 mb-3">

<div class="card shadow h-100"
     data-bs-toggle="collapse"
     data-bs-target="#academicTasks"
     style="cursor:pointer;">

<div class="card-body text-center">

<i class="bi bi-book text-primary fs-1"></i>

<h5 class="mt-3">Academic</h5>

<p>Assignments and study tasks</p>

</div>

</div>

</div>

<!-- Work -->
<div class="col-md-4 mb-3">

<div class="card shadow h-100"
     data-bs-toggle="collapse"
     data-bs-target="#workTasks"
     style="cursor:pointer;">

<div class="card-body text-center">

<i class="bi bi-briefcase text-success fs-1"></i>

<h5 class="mt-3">Work</h5>

<p>Projects and meetings</p>

</div>

</div>

</div>

<!-- Personal -->
<div class="col-md-4 mb-3">

<div class="card shadow h-100"
     data-bs-toggle="collapse"
     data-bs-target="#personalTasks"
     style="cursor:pointer;">

<div class="card-body text-center">

<i class="bi bi-person text-danger fs-1"></i>

<h5 class="mt-3">Personal</h5>

<p>Personal daily activities</p>

</div>

</div>

</div>

</div>

<!-- Academic Tasks -->
<div class="collapse mt-4" id="academicTasks">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h5 class="mb-0">
<i class="bi bi-book"></i>
Academic Tasks
</h5>

</div>

<div class="card-body">

<table class="table table-striped">

<thead>

<tr>
<th>No.</th>
<th>Task</th>
<th>Due Date</th>
<th>Status</th>
</tr>

</thead>

<tbody>

<tr>
<td>1</td>
<td>Individual Project IMS565</td>
<td>2026-05-20</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>2</td>
<td>Quiz IMS564</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>3</td>
<td>Group Project IMS560</td>
<td>2026-06-20</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>4</td>
<td>Writing Test Mandarin</td>
<td>2026-05-25</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>5</td>
<td>Individual Assignment IMS564</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>6</td>
<td>Listening Test Mandarin</td>
<td>2026-06-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>7</td>
<td>Group Project IMS565</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>8</td>
<td>Group Project IMS566</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>9</td>
<td>Writing Test Mandarin</td>
<td>2026-05-25</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>10</td>
<td>Group Assignment IMS564</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>11</td>
<td>Individual Project IMS566</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>12</td>
<td>Group Assignment ELEK</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>13</td>
<td>Individual Assignment ELEK</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>14</td>
<td>Individual Project IMS560</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>15</td>
<td>Individual Project IMS566</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>16</td>
<td>Project Discussion IMS565</td>
<td>2026-05-30</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>17</td>
<td>Quiz IMS560</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>18</td>
<td>Quiz IMS566</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

<tr>
<td>19</td>
<td>Individual Assignment LCC</td>
<td>2026-06-15</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>

<tr>
<td>20</td>
<td>Group Assignment LCC</td>
<td>2026-06-15</td>
<td><span class="badge bg-warning text-dark">Pending</span></td>
</tr>

</tbody>

</tbody>

</table>

</div>

</div>

</div>

</div>

<!-- Work Tasks -->
<div class="collapse mt-4" id="workTasks">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h5 class="mb-0">
<i class="bi bi-briefcase"></i>
Work Tasks
</h5>

</div>

<div class="card-body text-center">

<i class="bi bi-inbox fs-1 text-muted"></i>

<h5 class="mt-3">No Tasks Available</h5>

<p class="text-muted">
There are currently no work-related tasks.
</p>

</div>

</div>

</div>

<!-- Personal Tasks -->
<div class="collapse mt-4" id="personalTasks">

<div class="card shadow">

<div class="card-header bg-danger text-white">

<h5 class="mb-0">
<i class="bi bi-person"></i>
Personal Tasks
</h5>

</div>

<div class="card-body text-center">

<i class="bi bi-inbox fs-1 text-muted"></i>

<h5 class="mt-3">No Tasks Available</h5>

<p class="text-muted">
There are currently no personal tasks.
</p>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>