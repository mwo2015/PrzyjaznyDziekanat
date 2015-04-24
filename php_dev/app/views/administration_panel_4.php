<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-9'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [4/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Dodanie zajęć:</p>

        <form>
            <div>
                <p class='column'>Nazwa:</p>
                <input type='text' />
            </div>
            <div>
                <div>
                    <p class='column'>Kierunek studiów:</p>
                    <select>
                        <option>Elektronika</option>
                        <option>Informatyka</option>
                        <option>Automatyka i Robotyka</option>
                        <option>Elektrotechnika</option>
                    </select>
                </div>
                <p class='column'>Rok studiów:</p>
                <select>
                    <option>Rok 1</option>
                    <option>Rok 2</option>
                    <option>Rok 3</option>
                    <option>Rok 4</option>
                    <option>Rok 5</option>
                </select>
            </div>
            <div>
                <fieldset>
                    <legend>Prowadzący</legend>
                    <p><input id='prow_1' type='checkbox' /> <label for='prow_1'>prof. Gąbka Baltazar</label>
                        <input id='prow_2'type='checkbox' /> <label for='prow_2'>dr Nowak Jan </label><br />
                        <input id='prow_3'type='checkbox' /> <label for='prow_3'>prof. Kowalski Jan</label>
                        <input id='prow_4'type='checkbox' /> <label for='prow_4'>prof. Wiśniewski Henryk</label> </p>
                </fieldset>
                <p></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>


<?php include('partials/footer.php') ?>