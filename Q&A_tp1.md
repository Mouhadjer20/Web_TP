# Q&A TP1

## Q1

Q: Quelle est al difference entre l'URL et le chemin de la ressource?
A: access via network vs access just from localhost

## Q2

Q: Pourquoi une reponse 200 peut-elle etre recue meme sans saisir de parametres?
A: because the request is GET we can see the page with empty parameters

## Q3

Q: Ou apparaissent les parametres?
A: after ? and before # in URL

## Q4

Q: pourqoui les espace et le sybole & sont-ils encodés?
A: they are not allowed in URL and keep url valid

## Q5

Q: differncier la valeur decodee dans $_GET de la chaine brute dans l'URL?
A: in $_GET values are decoded, in url they are encoded

## Q6

Q: Est-il conseille de placer un mot de passe dans une URL?
A: NO, because it is visible in the URL

## Q7

Q: Ou se trouvent les donnees de POST?
A: in the request body

## Q8

Q: pourquoi ne sont-elles pas dans la query string?
A: not allowed to keep data secure and private

## Q9

Q: Le corps POST est-il chiffre lorsque le serveur utilise http:// ?
A: NO

## Q10

Q: Quel mecanise  apporte la confidentialite du transport?
A: HTTPS (TLS/SSL)

## Q11

Q: Quels en tetes peuvent etre absents?
A: Content-Length, Host, Accept-Charset, Accept-Encoding, Accept-Language, Accept

## Q12

Q: Quel est le role de Content-Type dans la reponse?
A: tells browser what is the type of the response

## Q13

Q: pourquoi un lien suivi depuis une page peut-il produire un referrer different d'une saisie directe?
A: can control the referrer header from the page where the link is located

## Q14

Q: qui decide du code de status?
A: serveur

## Q15

Q: Pourquoi 302 declenche une seconde requete?
A: redirection temporaire 

## Q16

Q: Difference entre 404 et 405?
A: 404: Not Found, 405: Method Not Allowed

## Q17

Q: Une serveur peut-il faire confiance aux valeurs d'un formulaire?
A: NON, car elles viennent du client et peuvent etre modifies

## Q18

Q: Pourquoi POST n'assure-t-il pas la condidentialite?
A: car il n'est pas chiffre par defaut (http://)

## Q19

Q: Quels controles seont necessaires pour une application reelle?
A: validation cote serveur, controle des droits d'acces, gestion des sessions, chiffrement HTTPS