<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Today is day <?php echo $today['current_day']; ?></h1>
        
        <form  action="index.php" method="post">
            <input type="hidden" name="action" value="change_nextday">           
            <input type="submit" value="Change To Next Day" />
            <br>
        </form>
        <form  action="index.php" method="post">
            <input type="hidden" name="action" value="initial_db">           
            <input type="submit" value="Initialize DB" />
            <br>
        </form>

        <h2>Today's Orders</h2>
        	<table>
        	<tr>
                    <th>Order ID</th><th>Room No</th><th>Status</th>
                </tr>
		   <?php foreach ($dayorder as $order) : ?>
                <tr>
		<td><?php echo $order['id']; ?></td>
		<td><?php echo $order['room_number']; ?> </td>
                <td><?php echo $order['status']; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
  
    </section>
</main>
<?php include '../view/footer.php'; ?>