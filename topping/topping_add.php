<?php include '../view/header.php'; ?>

<main>
    <section>
    <h1>Add Topping</h1>
    <form action="index.php" method="post" id="add_topping_form">
        <input type="hidden" name="action" value="add_topping">
        <label>Topping Name: </label>
            <input type="text" name="topping_name" />
            <br>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add" />
        <br>
             
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_toppings">View Topping List</a>
    </p
    </section>
</main>
<?php include '../view/footer.php'; ?>