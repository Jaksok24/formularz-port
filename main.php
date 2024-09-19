<html>
    <head>
        <title>Rezerwacje</title>
        <style>
			body{
				font-family: sans-serif;
			}
            .fr{
                text-align: center;
                margin: auto;
                background-color: lightgrey;
                border-radius: 5px;
                width: 45rem;
                height: 36rem;
            }
            .ip, select{
                border:none;
                border-radius: 5px;
                height: 2rem;
				width: 35rem;
            }
            .bt{
				border: none;
				background-color: #333333;
				color: White;
				font-weight: bold;
				width: 35rem;
				height: 2rem;
				border-radius: 5px;
            }
			.hdf{
				font-size: 2.5rem;
				color: #333333;
				font-weight: bold;
			}
			.odp{
				text-align: center;
				border: black solid;
				width: 35rem;
				margin: auto;
			}
			.col{
				width: 17.4rem;
				text-align: center;
				margin: auto;
				border:none;
                border-radius: 5px;
				height: 2rem;
			}
			.col2{
				width: 11,6rem;
				text-align: center;
				margin: auto;
				border:none;
                border-radius: 5px;
				height: 2rem;
			}
			.rdtb{
				margin: auto;
				color: #333333;
				background-color: white;
				border-radius: 5px;
				width: 35rem;
			}
        </style>
        <script>
            function toggleCateringOptions() {
                var cateringTak = document.getElementById("catering_tak");
                var cateringOptions = document.getElementById("catering-options");

                if (cateringTak.checked) {
                    cateringOptions.style.display = "block";
                } else {
                    cateringOptions.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
        <form action="index.php" method="post" class="fr">
			<br><label class="hdf">Zapisz się na rejs!</label><br>
            <br><input class="ip" type="text" name="imie" id="imie" placeholder="Podaj imie i nazwisko..."><br>
            <br><input class="ip" type="text" name="mail" id="mail" placeholder="Podaj email..."><br>
            <br><input class="ip" type="text" name="tel" id="tel" placeholder="Podaj numer telefonu..."><br>
			<br><table style="margin: auto; text-align: center;"><td><input class="col" type="date" name="data" id="data" placeholder="Podaj datę..."></td>
			<td><input class="col" type="time" name="godz" id="godz" placeholder="Podaj godzinę..."></td></table><br>
			<select id="rejs" name="rejs">
				<option value="" disabled selected>Wybierz rejs...</option>
				<option value="Po rzekach i jeziorach - 1h">Po rzekach i jeziorach - 1h</option>
				<option value="Fotel Papieski - 1h">Fotel Papieski - 1h</option>
				<option value="Kanał Augustowski - 1h">Kanał Augustowski - 1h</option>
				<option value="Dolina Rospudy - 1,5h">Dolina Rospudy - 1,5h</option>
				<option value="Szlakiem Papieskim - 3h">Szlakiem Papieskim - 3h</option>
				<option value="Staw Swoboda - 4h">Staw Swoboda - 4h</option>
				<option value="Gorczyca - „Pełen Szlak Papieski” - 6h">Gorczyca - „Pełen Szlak Papieski” - 6h</option>
				<option value="Paniewo">Paniewo</option>
			</select><br>
			<br><input class="ip" type="number" id="lo" name="lo" min=0 max=60 placeholder="Podaj liczbę osób..."><br>
			<br><table class="rdtb">
				<td style="width: 11.5rem; height: 2rem; text-align: left;"><label>Catering: </label></td>
				<td style="width: 11.5rem; height: 2rem; text-align: center;">
					<input type="radio" id="catering_tak" name="catering" value="Tak" onclick="toggleCateringOptions()">
					<label>Tak</label>
				</td>
				<td style="width: 11.5rem; height: 2rem; text-align: center;">
					<input type="radio" id="catering_nie" name="catering" value="Nie" onclick="toggleCateringOptions()">
					<label>Nie</label>
				</td>
			</table>
			<div id="catering-options" style="display: none;">
				<br>
				<select id='cat' name='cat'>
					<option value='' disabled selected>Wybierz catering...</option>
					<option value='Catering na statku'>Catering na statku</option>
					<option value='Catering w restauracji'>Catering w restauracji</option>
				</select><br>
			</div>
            <br><input type="submit" text="Prześlij" class="bt"><br>
        </form>
    </body>
</html>
