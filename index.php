<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1,5L water daags</title>
</head>

<body>
<link rel="stylesheet" href="styleSession.css" type="text/css">
<div class="body-content">
    <div class="module">
        <div class="titleHeading">
            <h1 class="head headerTitle head-primary">Thieme VRDI</h1>
        </div>

        <form class="form" method="post" action="index.php" enctype="multipart/form-data" autocomplete="off">
            * Voornaam:<br>
            <input type="text" name="voornaam" required />
            Tussenvoegsel:<br>
            <input type="text" name="tussenvoegsel"/>
            * Achternaam:<br>
            <input type="text" name="achternaam" required />
            * Adres:<br>
            <input type="text" name="adres" required />
            * Postcode:<br>
            <input type="text" name="postcode" required />
            * Woonplaats:<br>
            <input type="text"  name="woonplaats" required />
            * Email adres:<br>
            <input type="email" name="email" required />

            * Hoe speelt u het liefst:<br>
            <select name="favoSpeel" size="1" required>
                <option value="Alleen">Alleen</option>
                <option value="Fysiek samen">Fysiek samen</option>
                <option value="Online samen">Online samen</option>
            </select><br>
            * Wat is uw favoriete spel:<br>
            <input type="text" name="favoSpel" required />
            * Gezelschapspellen:
            <select name="gezel" size="1">
                <option value="Geen">Geen</option>
                <option value="Bordspel">Bordspel</option>
                <option value="Dobbelspel">Dobbelspel</option>
                <option value="Evenwichtspel">Evenwichtspel</option>
                <option value="Eenpersoonsspel">Eenpersoonsspel</option>
                <option value="Kaartspel">Kaartspel</option>
                <option value="Puzzelspel">Puzzelspel</option>
                <option value="Rollenspel">Rollenspel</option>
                <option value="Straat- en pleinspel">Straat- en pleinspe</option>
            </select><br>
            * Online games:
            <select name="onlineGames" size="1" required>
                <option value="Geen">Geen</option>
                <option value="Actie">Actie</option>
                <option value="Avontuur">Avontuur</option>
                <option value="RPG">RPG</option>
                <option value="Horror">Horror</option>
                <option value="Strategie">Strategie</option>
                <option value="Simulatie">Simulatie</option>
                <option value="Sport">Sport</option>
                <option value="Retro-gaming">Retro-gaming</option>
                <option value="Puzzel">Puzzel</option>
                <option value="Partyspel">Partyspel</option>
                <option value="Overige">Overige</option>
            </select><br>
            <input  type="submit" value="Invullen" name="submit_form" class="logout btn btn-block btn-primary" />
        </form>
    </div>
</div>

</body>
</html>