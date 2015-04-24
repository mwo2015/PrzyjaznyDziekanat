<?php include('partials/header.php') ?>

<section class='mockup' id='panel-6'>
    <h1>Przyjazny dziekanat</h1>
    <h2>Panel pracownika administracji [1/8]</h2>
    <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

    <p class='title'>Dostępne czynności:</p>
    <table>
        <thead>
        <th>Studenci</th>
        <th>Prowadzący</th>
        <th>Zajęcia</th>
        <th>Inne</th>
        </thead>
        <tbody>
        <tr>
            <td><a href='/mow/php_dev/public/administracja-panel?page=2'>Dodaj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=3'>Dodaj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=4'>Dodaj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=6'>Statystyki / raporty</a></td>
        </tr>
        <tr>
            <td><a href='/mow/php_dev/public/administracja-panel?page=5'>Edytuj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=8'>Edytuj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=8'>Edytuj</a></td>
            <td><a href='/mow/php_dev/public/administracja-panel?page=7'>Zakończenie semestru</a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
    <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

</section>

<?php include('partials/footer.php') ?>
