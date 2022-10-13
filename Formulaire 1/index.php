<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benoit de Mahieu</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="" method="">
        <div class="containerFlexible justify-content-space-evenly">
            <fieldset class="coordonnees">
                <legend>Vos coordonnées</legend>
                <div class="form_group">
                    <label for="nom">Nom : </label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form_group">
                    <label for="prenom">Prénom : </label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div class="form_group">
                    <label for="dateDeNaissance">Date de naissance : </label>
                    <input type="date" name="dateDeNaissance" id="dateDeNaissance" required>
                </div>
                <div class="form_group">
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form_group">
                    <label for="pays">Pays : </label>
                    <select id="pays">
                        <optgroup label="Europe">
                            <option value="belgique">Belgique</option>
                        </optgroup>
                        <optgroup label="Amérique du nord">
                            <option value="etats-unis">États-Unis</option>
                            <option value="canada">Canada</option>
                        </optgroup>
                        <optgroup label="Asie">
                            <option value="japon">Japon</option>
                            <option value="chine">Chine</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form_group">
                    <label for="nombreCopies">Nombre de copies souhaitées : </label>
                    <input type="number" name="nombreCopies" id="nombreCopies" min="0" value="1">
                </div>
            </fieldset>
            <div>
                <fieldset class="periodicite">
                    <legend>Périodicité</legend>
                    <div class="form_group">
                        <input type="radio" id="hebdomadaire" name="newsletter" value="hebdomadaire" checked>
                        <label for="hebdomadaire">Newsletter hebdomadaire</label>
                    </div>
                    <div class="form_group">
                        <input type="radio" id="mensuelle" name="newsletter" value="mensuelle">
                        <label for="mensuelle">Newsletter mensuelle</label>
                    </div>
                    <div class="form_group">
                        <input type="radio" id="trimestrielle" name="newsletter" value="trimestrielle">
                        <label for="trimestrielle">Newsletter trimestrielle</label>
                    </div>
                </fieldset>
                <fieldset class="version">
                    <legend>Version papier - informatique</legend>
                    <div class="form_group">
                        <input type="checkbox" id="papier" name="version" value="papier" checked>
                        <label for="papier">Recevoir la version papier</label>
                    </div>
                    <div class="form_group">
                        <input type="checkbox" id="informatique" name="version" value="informatique" checked>
                        <label for="informatique">Recevoir la version informatique</label>
                    </div>
                </fieldset>
                <div class="form_group containerFlexible justify-content-center">
                    <input class="submit" type="submit" name="valider" id="valider" value="Envoyer">
                </div>
            </div>
        </div>
    </form>
</body>
</html>