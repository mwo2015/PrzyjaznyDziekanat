
<?php include('partials/header.php') ?>

<section id='panel-1'>
    <h1>Przyjazny dziekanat</h1>
    <h2>Panel logowania</h2>
    <form method="post" action="">
        <div>
            <p class='column'>Login:</p>
            <input name='login' type='text' />
        </div>
        <div>
            <p class='column'>Hasło:</p>
            <input type='password' />
            <p class='column'></p>
            <input type='submit' value='Loguj' />
        </div>
    </form>
    <p class='small'><a href='#'>Nie pamiętam hasła</a></p>
</section>

<?php include('partials/footer.php') ?>