<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-10'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [6/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Statystyki / raporty:</p>

        <form class='wide'>
            <fieldset>
                <legend>Dane studenta</legend>
                <div class='floated-left'>
                    <p class='column'>Imię:</p>
                    <input type='text' class='medium' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Nazwisko:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Nr albumu:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Rok studiów:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Kierunek:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Grupa:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Przedmiot</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Ocena (min):</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Ocena (max):</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Obecności (min) [%]:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Obecności (max) [%]:</p>
                    <input type='text' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Tryb studiów:</p>
                    <input type='text' />
                </div>
                <p class='column'></p>
                <input type='submit' value='Wyszukaj' />
            </fieldset>
        </form>

        <p>Znaleziono:</p>
        <table>
            <thead>
            <th><input type='checkbox' checked='checked'></th>
            <th>Nr indeksu</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Kierunek</th>
            <th>Rok</th>
            <th>Grupa</th>
            <th>Wybór</th>
            </thead>
            <tbody>
            <tr>
                <td><input type='checkbox' checked='checked'></td>
                <td>234232</td>
                <td>Jan</td>
                <td>Nowak</td>
                <td>Informatyka</td>
                <td>2</td>
                <td>Grupa 1</td>
                <td><a href='#'>Edytuj</a></td>
            </tr>
            <tr>
                <td><input type='checkbox' checked='checked'></td>
                <td>934234</td>
                <td>Jan</td>
                <td>Nowak</td>
                <td>Informatyka</td>
                <td>2</td>
                <td>Grupa 1</td>
                <td><a href='#'>Edytuj</a></td>
            </tr>
            </tbody>
        </table>
        <p></p>
        <input type='submit' value='Drukuj wyniki' />
        <input type='submit' value='Wyślij maila do zaznaczonych' />

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>