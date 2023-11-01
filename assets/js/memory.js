var timer = document.getElementsByClassName("timer");
var chrono;
var ms = 0,
  sec = 0,
  min = 0;

function commencerChrono() {
  chrono = setInterval(acutaliserChrono, 100);
}

function acutaliserChrono() {
  ms += 1;
  if (ms == 10) {
    ms = 1;
    sec += 1;
  }
  if (sec == 60) {
    sec = 0;
    min += 1;
  }
  timer[0].innerHTML = min;
  timer[1].innerHTML = sec;
  timer[2].innerHTML = ms;
}

function reinitialiserChrono() {
  clearInterval(chrono);
  (ms = 0), (sec = 0), (min = 0);
  timer[0].innerHTML = min;
  timer[1].innerHTML = sec;
  timer[2].innerHTML = ms;
}

function retirerErreur(elements, nombreErreurs) {
  elements[nombreErreurs - 1].remove();
  if (nombreErreurs > 1) {
    return retirerErreur(elements, nombreErreurs - 1);
  }
}

function ajouterColonnes(ligne, n, tailleCase, theme) {
  const colonne = document.createElement("td");
  const carte = document.createElement("img");
  carte.src = "../../assets/images/" + theme + "/back.png";
  carte.style.height = tailleCase;
  colonne.appendChild(carte);
  ligne.appendChild(colonne);
  if (n > 1) {
    return ajouterColonnes(ligne, n - 1, tailleCase, theme);
  }
}

function ajouterLignes(table, n, tailleGrille, tailleCase, theme) {
  const ligne = document.createElement("tr");
  ajouterColonnes(ligne, tailleGrille, tailleCase, theme);
  table.appendChild(ligne);
  if (n > 1) {
    return ajouterLignes(table, n - 1, tailleGrille, tailleCase, theme);
  }
}

function creerGrille(tailleGrille, tailleCase, theme) {
  const table = document.createElement("table");
  ajouterLignes(table, tailleGrille, tailleGrille, tailleCase, theme);
  return table;
}

function creerEndroitJeu(tailleGrille, tailleCase, theme) {
  const div = document.createElement("div");
  div.setAttribute("id", "gameTemps");
  div.className = ("game");

  const minutes = document.createElement("span");
  const secondes = document.createElement("span");
  const millisecondes = document.createElement("span");
  minutes.className = ("timer");
  secondes.className = ("timer");
  millisecondes.className = ("timer");

  const table = creerGrille(tailleGrille, tailleCase, theme);
  table.setAttribute("id", "gameGrille");
  table.className = ("game");

  const section = document.getElementById("section");

  div.appendChild(minutes);
  div.append(":");
  div.appendChild(secondes);
  div.append(":");
  div.appendChild(millisecondes);
  section.appendChild(div);
  section.appendChild(table);
}

function genererGrille() {
  const erreurs = document.getElementsByClassName("gameOptionsError");
  if (erreurs.length > 0) {
    retirerErreur(erreurs, erreurs.length);
  }

  const difficultes = document.getElementById("difficultes");
  if (difficultes.value == "") {
    difficultes.insertAdjacentHTML(
      "afterend",
      '<p class="gameOptionsError">Veuillez sélectionner une difficulté</p>'
    );
  } else if (difficultes.value == "easy") {
    var tailleGrille = 5;
    var tailleCase = "18vmin";
  } else if (difficultes.value == "medium") {
    var tailleGrille = 10;
    var tailleCase = "9vmin";
  } else {
    var tailleGrille = 20;
    var tailleCase = "4.25vmin";
  }

  const themes = document.getElementById("themes");
  if (themes.value == "") {
    themes.insertAdjacentHTML(
      "afterend",
      '<p class="gameOptionsError">Veuillez sélectionner une difficulté</p>'
    );
  } else {
    var theme = themes.value;
  }

  const game = document.getElementsByClassName("game");
  if (game.length > 0) {
    reinitialiserChrono();
    game[1].remove();
    game[0].remove();
  }

  if (typeof tailleGrille != "undefined" && typeof theme != "undefined") {
    creerEndroitJeu(tailleGrille, tailleCase, theme);
    commencerChrono();
  }
}
