<header>
    <?php 
        if(isset($_SESSION['logado']) && $_SESSION == true) {
            echo "<p>Usuário <strong>{$_SESSION['usuario']}</strong> está logado no momento. <a href='logout.php'>Efetuar logout</a></p>";
        } else {
            echo "<p>Nenhum usuário logado. <a href='login.php'>Faça login</a>.</p>";
        }
    ?>
</header>