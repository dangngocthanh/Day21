<td><a href="index.php?page=add">Add new</a></td>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($List as $value): ?>
        <tr>
            <td scope="row"><?php echo($value['id']) ?></td>
            <td><?php echo($value['name']) ?></td>
            <td><?php echo($value['email']) ?></td>
            <td><?php echo($value['address']) ?></td>
            <td><a onclick="confirm('Are you sure?')" href="index.php?page=delete&id=<?php echo($value['id']) ?>">Delete</a>
            </td>
            <td><a href="index.php?page=edit&id=<?php echo($value['id']) ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
