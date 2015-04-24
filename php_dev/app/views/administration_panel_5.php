<?php include('partials/header.php') ?>

    <section class='mockup' id='panel-9'>
        <h1>Przyjazny dziekanat</h1>
        <h2>Panel pracownika administracji [5/8]</h2>
        <p>Zalogowano jako: <span class='highlight'>Ktoś z dziekanatu</span></p>

        <p class='title'>Edytowanie danych studentów:</p>

        <form>
            <div>
                <p class='column'>Imię:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Nazwisko:</p>
                <input type='text' />
            </div>
            <div>
                <p class='column'>Nr indeksu:</p>
                <input type='text' />
                <p class='column'></p>
                <input type='submit' value='Wyszukaj' />
            </div>
        </form>

        <p>Znaleziono:</p>
        <table>
            <thead>
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
                <td>234232</td>
                <td>Jan</td>
                <td>Nowak</td>
                <td>Informatyka</td>
                <td>2</td>
                <td>Grupa 1</td>
                <td><a href='#'>Edytuj</a></td>
            </tr>
            <tr>
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


        <p>Wybrano: <span class='highlight'>Jan Nowak</span> - <span class='highlight'>Nr indeksu: 234232</span>
        <p class='title'>Edycja danych studenta:</p>
        <form class='wide'>
            <fieldset>
                <legend>Dane osobowe</legend>
                <div class='floated-left'>
                    <p class='column'>Imię:</p>
                    <input type='text' value='Jan' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Nazwisko:</p>
                    <input type='text' value='Nowak' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Adres:</p>
                    <input type='text' value='ul. Wawel 1, 31-333 Kraków' />
                </div class='floated-left'>
                <div class='floated-left'>
                    <p class='column'>Telefon:</p>
                    <input type='text' value='345 567 789' />
                </div>
                <div class='floated-left'>
                    <p class='column'>Email:</p>
                    <input type='text' value='jannowak@wp.pl' />
                </div>
            </fieldset>
        </form>
        <form>
            <div>
                <p class='column'>Kierunek studiów:</p>
                <select>
                    <option>Elektronika</option>
                    <option>Informatyka</option>
                    <option>Automatyka i Robotyka</option>
                    <option>Elektrotechnika</option>
                </select>
            </div>
            <div>
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
                <p class='column'>Grupa:</p>
                <select>
                    <option>Grupa 1</option>
                    <option>Grupa 2</option>
                    <option>Grupa 3</option>
                    <option>Grupa 4</option>
                </select>
            </div>
            <div>
                <p class='column'>Tryb studiów:</p>
                <select>
                    <option>Tryb normalny</option>
                    <option>Tryb warunkowy</option>
                    <option>Urlop</option>
                </select>
                <p class='column'></p>
                <input type='submit' value='Zapisz' />
            </div>
        </form>

        <p class='title'>Oceny i obecności studenta:</p>

        <div class='wrapper1'>
            <input type='radio' name='_semestr' id='_semestr1' checked='checked' />
            <label for='_semestr1'>Semestr 1</label>
            <br />
            <input type='radio' name='_semestr' id='_semestr2' />
            <label for='_semestr2'>Semestr 2</label>
        </div>
        <p></p>
        <table>
            <thead>
            <th>Przedmiot</th>
            <th>Prowadzący</th>
            <th>Ocena końcowa</th>
            <th>Obecności</th>
            </thead>
            <tbody>
            <tr>
                <td>Elektronika</td>
                <td>prof. Gąbka Baltazar</td>
                <td>4</td>
                <td>90%</td>
            </tr>
            <tr>
                <td>Informatyka</td>
                <td>dr Nowak Jan</td>
                <td>2</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>Automatyka i Robotyka</td>
                <td>prof. Kowalski Jan</td>
                <td>3</td>
                <td>77%</td>
            </tr>
            <tr>
                <td>Elektrotechnika</td>
                <td>prof. Wiśniewski Henryk</td>
                <td>5</td>
                <td>90%</td>
            </tr>

            </tbody>
        </table>

        <a href="/mow/php_dev/public/administracja-panel"><div class='side-button left'>Wstecz</div></a>
        <a href="/mow/php_dev/public/"><div class='side-button right'>Wyloguj</div></a>

    </section>

<?php include('partials/footer.php') ?>