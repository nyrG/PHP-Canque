<?php
    include 'crud.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu List</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vf52PI41zFspD6Vd0QOgySwt27F5PO8R95bCC5UTDkqrLLOiZz/Spf4fXGr6A9t5" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Canque PoS</a>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.php">Manage Menus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="addMenu.php">Create Menu</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
		<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
            <thead>
                <tr>
                    <th style="text-align: center;">ID</th>
                    <th style="text-align: center;">Menu Name</th>
                    <th style="text-align: center;">Menu Description</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>

			<?php
			$rows = view_data();
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['menu_name'] . "</td>";
				echo "<td>" . $row['menu_desc'] . "</td>"; ?>
				<td style="width: 170px; text-align: center;">
                    <form method="post" enctype="multipart/form-data" action="?edit_id=<?php echo $row['id']; ?>" style="display: inline;">
						<input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editMenuModal" data-menu-id="<?php echo $row['id']; ?>" data-menu-name="<?php echo $row['menu_name']; ?>" data-menu-desc="<?php echo $row['menu_desc']; ?>">EDIT</button>&nbsp;
					</form>

					<form method="post" style="display: inline;">
						<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteMenuModal" data-menu-id="<?php echo $row['id']; ?>">DELETE</button>
					</form>
				</td>
            <?php echo "</tr>"; } ?>
        </table>
    </div>

    <?php 
        include 'editModal.php';
        include 'deleteModal.php';
    ?>

    <script>
		 $('#editMenuModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var menuId = button.data('menu-id');
            var menuName = button.data('menu-name');
            var menuDesc = button.data('menu-desc');

            $('#edit-menu-id').val(menuId);
            $('#edit-menuName').val(menuName);
            $('#edit-menuDesc').val(menuDesc);
        });

		$('#deleteMenuModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var menuId = button.data('menu-id');

        $('#delete-menu-id').val(menuId);
		});
    </script>

    
</body>
</html>