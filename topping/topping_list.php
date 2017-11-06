<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Topping List</h1>
	<h2>Toppings<h2>
	<table>
        	<tr>
                <th>Topping Name</th><th>&nbsp;</th>
                </tr>
		   <?php foreach ($toppings as $topping) : ?>
                <tr>
		<td><?php echo $topping['topping_name']; ?></td>
		<form>
                <td> <input type ="submit" value="Delete"></td>
		</form>
		</tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Topping</a>
	</p>
        </section>
    </main>
<?php include '../view/footer.php'; ?>
