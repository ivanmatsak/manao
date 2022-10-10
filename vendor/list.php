<p>
    <?php
    session_start();

    if (isset($_SESSION['authorization_message'])) {
        echo '<p class="msg">' . $_SESSION['authorization_message'] . '</p>';
    }
    ?>
</p>
<p>
    <form action="exit.php" method="POST">
        <button type="submit">Exit</button>
    </form>

</p>