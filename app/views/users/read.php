<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table with DataTables</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        /* Styling for table headers */
        thead th {
            background-color: black;
            color: white;
            text-align: center;
        }
        
        /* Removing hover effects for table rows */
        tbody tr {
            background-color: white;
            color: black;
        }

        /* Adding custom borders for table cells */
        table.table {
            border: 2px solid white;
        }

        /* Centering table content */
        td, th {
            text-align: center;
            vertical-align: middle;
        }

        /* Styling for buttons */
        .btn-warning {
            background-color: #ffc107;
            color: black;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }

/* Custom styling for DataTables controls */
.dataTables_wrapper .dataTables_filter label,
.dataTables_wrapper .dataTables_length label,
.dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_paginate {
    color: white; /* Change text color to white */
}

/* Style the search input field */
.dataTables_wrapper .dataTables_filter input {
    color: white; /* Text color */
    background-color: black; /* Background color */
    border: 1px solid white; /* Border color */
}

/* Style the pagination buttons */
.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: white !important; /* Make pagination buttons white */
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
    color: #6c757d !important; /* Lighter color for disabled pagination buttons */
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #007bff; /* Change background color on hover */
    color: white !important; /* Keep text white */
}
    </style>
</head>
<body style="background-color: black; color: white; border-color: white;">

    <div class="container my-5">
        <h2 class="text-center">User Information</h2>
        <a class="btn btn-primary mb-4" role="button" href="<?= site_url('LavaLust/user/create'); ?>">Create User</a>

        <table id="userTable" class="table table-bordered table-striped table-hover rounded" style="color: white;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['cgc_last_name'] ?></td>
                        <td><?= $u['cgc_first_name'] ?></td>
                        <td><?= $u['cgc_email'] ?></td>
                        <td><?= $u['cgc_gender'] ?></td>
                        <td><?= $u['cgc_address'] ?></td>
                        <td>
                            <a href="<?= site_url('LavaLust/user/update/' . $u['id']); ?>" class="btn btn-success btn-sm">Update</a>
                            <a href="<?= site_url('LavaLust/user/delete/' . $u['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTables on the table
            $('#userTable').DataTable({
                "paging": true, // Enable pagination
                "searching": true, // Enable search
                "ordering": true, // Enable sorting
                "pageLength": 5 // Number of rows per page
            });
        });
    </script>
</body>
</html>
