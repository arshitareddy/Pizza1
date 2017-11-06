<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Welcome Student!</h1>
        
        <h2>Available Sizes</h2>
        <?php foreach ($size as $size) : ?>
        <?php echo $size['size_name']; ?>
        <?php endforeach; ?>
	<h2>Available Toppings</h2>
        <?php foreach ($toppings as $topping) : ?>
        <?php echo $topping['topping_name']; ?>
        <?php endforeach; ?>
        <h2>Form for room number</h2>

        <h2>Orders in progress for room </h2>

        <h2> Button to acknowledge receipt of pizzas that are ready </h2>

        <h2> Link to order a pizza </h2>
    </section>
</main>
<?php include '../view/footer.php'; ?>