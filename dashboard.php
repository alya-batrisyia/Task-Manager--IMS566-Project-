<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="style.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#">
<i class="bi bi-list-task"></i> Task Manager
</a>

<div class="collapse navbar-collapse">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="dashboard.php">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="tasks.php">Tasks</a>
</li>

<li class="nav-item">
<a class="nav-link" href="categories.php">Categories</a>
</li>

<li class="nav-item">
<a class="nav-link" href="logout.php">Logout</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">

<h2 class="page-title">Dashboard Overview</h2>

<!-- STATS -->
<div class="row">

<!-- TOTAL -->
<div class="col-md-4 mb-3">
<div class="card stat-card bg-primary">
<div class="card-body">
<h3 id="totalTasks">20</h3>
<p>Total Tasks</p>
</div>
</div>
</div>

<!-- COMPLETED -->
<div class="col-md-4 mb-3">
<div class="card stat-card bg-success">
<div class="card-body">
<h3 id="completedTasks">12</h3>
<p>Completed</p>
</div>
</div>
</div>

<!-- PENDING -->
<div class="col-md-4 mb-3">
<div class="card stat-card bg-warning">
<div class="card-body">
<h3 id="pendingTasks">8</h3>
<p>Pending</p>
</div>
</div>
</div>

</div>

<!-- CHART -->
<div class="card shadow mt-4">
<div class="card-body">

<h5 class="mb-4 text-center">Task Status Chart</h5>

<canvas id="taskChart"></canvas>

<script>
const ctx = document.getElementById('taskChart');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Completed', 'Pending'],
        datasets: [{
            data: [12, 8],
            backgroundColor: ['green', 'orange']
        }]
    }
});
</script>

</div>
</div>

</div>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>