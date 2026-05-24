<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tasks</title>

<div class="container mt-4">

    <h2 class="page-title">Task List</h2>

    <div class="row">

    <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="dashboard.php">
Task Manager
</a>

<div class="navbar-nav ms-auto">

<a class="nav-link" href="dashboard.php">
Dashboard
</a>

<a class="nav-link active" href="tasks.php">
Tasks
</a>

<a class="nav-link" href="categories.php">
Categories
</a>

<a class="nav-link" href="logout.php">
Logout
</a>

</div>

</div>

</nav>

        <!-- RIGHT: ADD / EDIT TASK -->
        <div class="col-md-4">

            <div class="card shadow p-3">

                <h5 id="formTitle">Add Task</h5>

                <form id="taskForm">

                    <input type="hidden" id="editIndex">

                    <input type="text" id="taskName" class="form-control mb-2" placeholder="Task name" required>

                    <select id="taskStatus" class="form-control mb-2">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>

                    <button class="btn btn-primary w-100">Save Task</button>

                </form>

            </div>

        </div>

    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="style.css">

</head>

<div class="container mt-4">

<div class="card shadow">

<div class="card-body">

<table class="table table-striped">

<thead class="table-dark">

<tr>

<th>ID</th>

<th>Task</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<tr>
<td>1</td>
<td>Individual Project  IMS565</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>2</td>
<td>Quiz IMS564</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>3</td>
<td>Group Project IMS560</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>4</td>
<td>Writing Test Mandarin</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>5</td>
<td>Individual Assignment IMS564</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>6</td>
<td>Listening Test Mandarin</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>7</td>
<td>Group Project IMS565</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>8</td>
<td>Group Project IMS566</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>9</td>
<td>Writing  Test Mandarin</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>10</td>
<td>Group Assignment IMS564</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>11</td>
<td>Individual Project IMS566</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>12</td>
<td>Group Assignment ELEK</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>13</td>
<td>Individual Assignment ELEK</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>14</td>
<td>Individual Project IMS560</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>15</td>
<td>Individual Project IMS566</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>16</td>
<td>Project Discussion IMS565</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>17</td>
<td>Quiz IMS560</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>18</td>
<td>Quiz IMS566</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

<tr>
<td>19</td>
<td>Individual Assignment LCC</td>
<td>
<span class="badge bg-success">
Completed
</span>
</td>
</tr>

<tr>
<td>20</td>
<td>Group Assignment LCC</td>
<td>
<span class="badge bg-warning">
Pending
</span>
</td>
</tr>

</tbody>

</table>

</div>

</div>

</div>

<script>
function loadTasks() {
    let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

    let table = document.getElementById("taskTable");
    let output = "";

    tasks.forEach((task, index) => {

        let badgeClass = task.status === "Completed" ? "bg-success" : "bg-warning";

        output += `
        <tr>
            <td>${index + 1}</td>
            <td>${task.title}</td>
            <td>
                <span class="badge ${badgeClass}">
                    ${task.status}
                </span>
            </td>
        </tr>
        `;
    });

    table.innerHTML = output;
}

window.onload = loadTasks;
</script>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>