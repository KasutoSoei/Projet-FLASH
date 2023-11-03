var timer = document.getElementsByClassName("timer");
var chrono;
var ms = 0,
  sec = 0,
  min = 0;

function commencerChrono() {
  chrono = setInterval(acutaliserChrono, 1);
}

function acutaliserChrono() {
  ms += 1;
  if (ms >= 100) {
    ms -= 100;
    sec += 1;
  }
  if (sec == 60) {
    sec = 0;
    min += 1;
  }

  if (min < 10) {
    timer[0].innerHTML = "0" + min;
  } else {
    timer[0].innerHTML = min;
  }
  if (sec < 10) {
    timer[1].innerHTML = "0" + sec;
  } else {
    timer[1].innerHTML = sec;
  }
  if (ms < 10) {
    timer[2].innerHTML = "0" + ms;
  } else {
    timer[2].innerHTML = ms;
  }
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

function ajouterColonnes(ligne, n, tailleCase, theme, indexes) {
  const colonne = document.createElement("td");
  const carte = document.createElement("img");
  carte.src = "../../assets/images/" + theme + "/back.png";
  carte.style.height = tailleCase;
  carte.classList.add("cartes");
  carte.classList.add(indexes[0]);
  indexes.splice(0, 1);
  colonne.appendChild(carte);
  ligne.appendChild(colonne);
  if (n > 1) {
    return ajouterColonnes(ligne, n - 1, tailleCase, theme, indexes);
  }
}

function ajouterLignes(table, n, tailleGrille, tailleCase, theme, indexes) {
  const ligne = document.createElement("tr");
  ajouterColonnes(ligne, tailleGrille, tailleCase, theme, indexes);
  table.appendChild(ligne);
  if (n > 1) {
    return ajouterLignes(
      table,
      n - 1,
      tailleGrille,
      tailleCase,
      theme,
      indexes
    );
  }
}

function creerGrille(tailleGrille, tailleCase, theme, indexes) {
  const table = document.createElement("table");
  ajouterLignes(table, tailleGrille, tailleGrille, tailleCase, theme, indexes);
  return table;
}

function creerEndroitJeu(tailleGrille, tailleCase, theme, indexes) {
  const div = document.createElement("div");
  div.setAttribute("id", "gameTemps");
  div.className = "game";

  const minutes = document.createElement("span");
  const secondes = document.createElement("span");
  const millisecondes = document.createElement("span");
  minutes.className = "timer";
  secondes.className = "timer";
  millisecondes.className = "timer";

  const table = creerGrille(tailleGrille, tailleCase, theme, indexes);
  table.setAttribute("id", "gameGrille");
  table.className = "game";

  const section = document.getElementById("section");

  div.appendChild(minutes);
  div.append(":");
  div.appendChild(secondes);
  div.append(":");
  div.appendChild(millisecondes);
  section.appendChild(div);
  section.appendChild(table);
}

function CreerListeIndexEtMelanger(tailleGrille) {
  if (tailleGrille != 10) {
    var liste = [0];
  } else {
    var liste = [];
  }
  for (let i = 1; i <= Math.floor(tailleGrille ** 2 / 2); i++) {
    liste.push(i);
    liste.push(i);
  }
  for (let i = 1; i < tailleGrille ** 2; i++) {
    i1 = Math.floor(Math.random() * tailleGrille ** 2);
    i2 = Math.floor(Math.random() * tailleGrille ** 2);
    const n1 = liste[i1];
    liste[i1] = liste[i2];
    liste[i2] = n1;
  }
  return liste;
}

function insererScore() {
  clearInterval(chrono);
  if (min < 10) {
    min = "0" + min;
  }
  if (sec < 10) {
    sec = "0" + sec;
  }
  if (ms < 10) {
    ms = "0" + ms;
  }
  var score = min + ":" + sec + ":" + ms;
  const difficultes = document.getElementById("difficultes");
  var difficulte = difficultes.value;
  $.ajax({
    type: "POST",
    url: "../../utils/insererScore.php",
    data: { score: score, difficulte: difficulte },
  });
  let popupDejaMontre = false;

  if (!popupDejaMontre) {
    document.getElementById("popup").style.display = "block";
    document.getElementById("scoreIci").innerHTML = score;
    popupDejaMontre = true;
  }
  document.getElementById("popupRejouer").addEventListener("click", function () {
    location.reload();
  });
  document
    .getElementById("popupQuitter")
    .addEventListener("click", function () {
      location.href = "../../index.php";
    });
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
    var tailleGrille = 7;
    var tailleCase = "13vmin";
  } else {
    var tailleGrille = 10;
    var tailleCase = "9vmin";
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
    if (document.getElementById("introRegles")) {
      document.getElementById("introRegles").remove();
    }
    if (document.getElementById("regles")) {
      document.getElementById("regles").remove();
    }

    const indexes = CreerListeIndexEtMelanger(tailleGrille);
    creerEndroitJeu(tailleGrille, tailleCase, theme, indexes);

    var cartes = document.getElementsByClassName("cartes");
    var imageRetournee = false;
    var nombreCartesRetournees = 0;
    var peutRetournerCarte = true;
    var indexImage;
    var images;
    setTimeout(() => {
      for (let i = 0; i < cartes.length; i++) {
        cartes[i].addEventListener("click", function () {
          if (peutRetournerCarte) {
            if (cartes[i].src.includes("back")) {
              nombreCartesRetournees++;
              cartes[i].src =
                "../../assets/images/" +
                theme +
                "/" +
                cartes[i].className.slice(7) +
                ".png";
              if (imageRetournee) {
                peutRetournerCarte = false;
                if (indexImage == 0) {
                  nombreCartesRetournees++;
                  images = document.getElementsByClassName(
                    cartes[i].className.slice(7)
                  );
                  for (let j = 0; j < 2; j++) {
                    images[j].src =
                      "../../assets/images/" +
                      theme +
                      "/" +
                      cartes[i].className.slice(7) +
                      ".png";
                  }
                  peutRetournerCarte = true;
                } else if (cartes[i].className.slice(7) == 0) {
                  nombreCartesRetournees++;
                  images = document.getElementsByClassName(indexImage);
                  for (let j = 0; j < 2; j++) {
                    images[j].src =
                      "../../assets/images/" +
                      theme +
                      "/" +
                      indexImage +
                      ".png";
                  }
                  peutRetournerCarte = true;
                } else if (indexImage != cartes[i].className.slice(7)) {
                  nombreCartesRetournees -= 2;
                  setTimeout(() => {
                    images = document.getElementsByClassName(indexImage);
                    for (let j = 0; j < 2; j++) {
                      images[j].src =
                        "../../assets/images/" + theme + "/back.png";
                    }

                    images = document.getElementsByClassName(
                      cartes[i].className.slice(7)
                    );
                    for (let j = 0; j < 2; j++) {
                      images[j].src =
                        "../../assets/images/" + theme + "/back.png";
                    }
                    peutRetournerCarte = true;
                  }, 1000);
                } else {
                  peutRetournerCarte = true;
                }
                imageRetournee = false;
                if (nombreCartesRetournees == tailleGrille ** 2) {
                  insererScore();
                }
              } else {
                indexImage = cartes[i].className.slice(7);
                imageRetournee = true;
              }
            }
          }
        });
      }
      commencerChrono();
    }, 3000);
  }
}
