function ajouterMessage(chat, infos, n) {
  const chatMessageBox = document.createElement("div");
  const chatMessage = document.createElement("div");

  const pp = document.createElement("img");
  pp.className = "chatPP";
  pp.src =
    "userFiles/" + infos[infos.length - n].utilisateurId + "/profile.png";

  const chatInfosMessage = document.createElement("div");
  chatInfosMessage.className = "chatInfosMessage";

  const pseudo = document.createElement("p");
  pseudo.innerText = infos[infos.length - n].pseudo;

  if (infos[infos.length - n].messageChat.includes("<img")) {
    var chatMessageContenu = document.createElement("img");
    chatMessageContenu.src = infos[infos.length - n].messageChat.slice(12, -2);
  } else {
    var chatMessageContenu = document.createElement("p");
    chatMessageContenu.style.overflowWrap = "break-word";
    chatMessageContenu.innerText = infos[infos.length - n].messageChat;
  }
  chatMessageContenu.style.maxWidth = "40vw";

  const chatMessageHeure = document.createElement("p");
  chatMessageHeure.className = "chatMessageHeure";
  chatMessageHeure.innerText = "Envoyé à " + infos[infos.length - n].heure;

  if (infos[infos.length - n].estEnvoyeur == 1) {
    chatMessageBox.className = "chatMessageBoxEnvoyeur";
    chatMessage.className = "chatMessageEnvoye";
    pseudo.style.color = "yellow";
    chatInfosMessage.style.alignItems = "end";
    chatMessageContenu.style.textAlign = "right";
  } else {
    chatMessageBox.className = "chatMessageBoxReceveur";
    chatMessage.className = "chatMessageRecu";
    pseudo.style.color = "green";
  }

  chatInfosMessage.appendChild(pseudo);
  chatInfosMessage.appendChild(chatMessageContenu);
  chatMessage.appendChild(pp);
  chatMessage.appendChild(chatInfosMessage);
  chatMessageBox.appendChild(chatMessage);
  chatMessageBox.appendChild(chatMessageHeure);
  chat.appendChild(chatMessageBox);
  scrollChatEnBas();

  if (n > 1) {
    return ajouterMessage(chat, infos, n - 1);
  }
}

var nombreElements = 0;
setInterval(function () {
  $.ajax({
    url: "utils/obtenirMessages.php",
    dataType: "json",
    success: function (donnees) {
      if (nombreElements > donnees.length) {
        document.getElementById("chat").firstChild.remove();
        nombreElements = donnees.length;
      }
      if (nombreElements < donnees.length) {
        ajouterMessage(chat, donnees, donnees.length - nombreElements);
        nombreElements = donnees.length;
      }
    },
  });
});
function scrollChatEnBas(){
  const chatDiv = document.getElementById('chat');
  chatDiv.scrollTop = chatDiv.scrollHeight;
}

