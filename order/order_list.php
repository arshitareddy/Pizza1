<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Current Orders Report</h1>
             
        <h2>Orders Baked but not delivered</h2>
        <?php foreach ($baked as $baked) : ?>
        <p> ID: <?php echo $baked['id']; ?> Room Number: <?php echo $baked['room_number']; ?> </p>
            <?php endforeach; ?>
        
        <h2>Orders Preparing(in the oven): Any ready now?</h2>
        
        <?php foreach ($preping as $prep) : ?>
        <p> ID: <?php echo $prep['id']; ?> Room Number: <?php echo $prep['room_number']; ?> </p>
            <?php endforeach; ?>
        <br> 
        <form  action="index.php" method="post" >
            <input type="hidden" name="action" value="change_to_baked">
            <input type="submit" value="Mark Oldest Pizza Baked (NYI)" />
            <br>
        </form>
        <br>  

        <form  action="index.php" method="post">
            <input type="hidden" name="action" value="initial_db">           
            <input type="submit" value="Initialize DB" />
            <br>
        </form>      

    </section>
</main>
<?php include '../view/footer.php'; ?>
