/*function article(titre, sous_titre, message){
	this.titre = titre;
	this.sous_titre = sous_titre;
	this.message = message;
}

function contact(facebook, instagram, email){
	this.facebook = facebook;
	this.instagram = instagram;
	this.email = email;
}*/

const titre_article = document.getElementById('titre');
const sous_titre_article = document.getElementById('sous_titre');
const message_article = document.getElementById('message');

titre_article.innerHTML = "A propos de moi";
sous_titre_article.innerHTML = "Romain Doyen, 25 septembre 2019";
message_article.innerHTML = "Salut à tous chers internautes, je m\'appelle Romain Doyen. Passionné par le dessin depuis ma tendre enfance et je découvre plus tard l\'informatique qui m'a donné l\'idée de développer un site web pour y inclure mes créations. Dans ce site je vous propose une panoplies de dessins que j\'ai réalisée, bien sûr le site évoluera en fonction du temps.";