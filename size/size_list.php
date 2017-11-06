<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Size List</h1>
	<table>
        	<tr>
                <th>Size Name</th><th>&nbsp;</th>
                </tr>
		   <?php foreach ($size as $size) : ?>
                <tr>
		<td><?php echo $size['size_name']; ?></td>
		<form>
                <td> <input type ="submit" value="Delete"></td>
		</form>
		</tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Size</a>
	</p>
        </section>
</main>
<?php include '../view/footer.php'; ?>