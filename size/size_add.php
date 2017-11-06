<?php include '../view/header.php'; ?>
<main>
    <section>
    <h1>Add Size</h1>
    <form action="index.php" method="post" id="add_size_form">
        <input type="hidden" name="action" value="add_size">
        <label>Size Name: </label>
            <input type="text" name="size_name" />
            <br>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add" />
        <br>
             
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_size">View Size List</a>
    </p>
    </section>
</main>
<?php include '../view/footer.php'; ?>