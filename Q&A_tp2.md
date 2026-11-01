# Q&A TP2

## Partie A — Cookies HTTP

**## Q1**

Q: Pourquoi la valeur mise par `setcookie()` n'apparaît-elle pas immédiatement dans `$_COOKIE` ?

A: Because the cookie is sent to the browser and returned with the next request.

**## Q2**

Q: Quelle est la différence entre `Set-Cookie` et `Cookie` ?

A: `Set-Cookie` is sent by the server to create or modify a cookie. `Cookie` is sent by the browser to the server.

**## Q3**

Q: Pourquoi une suppression exige-t-elle la même portée ?

A: Because the cookie must have the same Path and Domain to be deleted correctly.

**## Q4**

Q: HttpOnly empêche-t-il le navigateur d'envoyer le cookie ?

A: NO, it only prevents JavaScript from reading the cookie.

**## Q5**

Q: Quel est le rôle de Secure ?

A: It allows the cookie to be sent only over HTTPS.

**## Q6**

Q: Quel est le rôle de SameSite ?

A: It controls when cookies are sent with cross-site requests.

---

## Partie B — Sessions PHP

**## Q7**

Q: Que contient PHPSESSID ?

A: A unique session ID, not the user's personal data.

**## Q8**

Q: Où résident les données de `$_SESSION` ?

A: On the server.

**## Q9**

Q: Pourquoi utiliser `session_regenerate_id(true)` après la connexion ?

A: To prevent session fixation attacks.

**## Q10**

Q: Quel risque existe en l'absence de HTTPS ?

A: The session ID can be intercepted and stolen.

---

## Partie C — Same-Origin Policy (SOP)

**## Q11**

Q: Quels sont les trois éléments qui définissent une origine ?

A: Scheme (protocol), host (domain/IP), and port.

**## Q12**

Q: Pourquoi les sites sur les ports 8080 et 8081 sont-ils d'origines différentes ?

A: Because their ports are different.

**## Q13**

Q: SOP interdit-elle tout envoi de requête cross-origin ?

A: NO, a request can be sent, but JavaScript may not be allowed to read the response.

**## Q14**

Q: Pourquoi JavaScript ne peut-il pas lire certaines réponses cross-origin ?

A: Because the server does not allow that origin through CORS.

---

## Partie D — CORS et OPTIONS

**## Q15**

Q: Quel est le rôle de CORS ?

A: It allows a server to specify which origins can read its responses.

**## Q16**

Q: CORS protège-t-il l'API contre curl ou Postman ?

A: NO, CORS is enforced by browsers, not by curl or Postman.

**## Q17**

Q: Quel est le rôle de la requête OPTIONS ?

A: It is a preflight request used by the browser to check CORS permissions before the actual request.

**## Q18**

Q: Pourquoi notre requête OPTIONS retourne-t-elle le code 204 ?

A: Because 204 means No Content. The server accepts the preflight without returning a response body.

**## Q19**

Q: Que vérifie le navigateur pendant le Preflight ?

A: The allowed origin, HTTP method, and request headers.

**## Q20**

Q: Quelle est la différence entre autorisation CORS et contrôle d'accès serveur ?

A: CORS controls whether JavaScript can read the response. Server access control checks whether the user is allowed to access the resource.

**## Q21**

Q: À quoi sert `Access-Control-Allow-Origin: *` ?

A: It allows requests from any origin to read the response, for public data.

**## Q22**

Q: Pourquoi ne pas utiliser `Access-Control-Allow-Origin: *` pour des données privées ?

A: Because any origin could read the response.

**## Q23**

Q: Pourquoi ne pas toujours utiliser `Access-Control-Allow-Credentials: true` ?

A: Because it allows credentials such as cookies to be included, which can expose private data if misconfigured.

---

## Partie E — Content Security Policy (CSP)

**## Q24**

Q: Quel est le rôle de CSP ?

A: It controls which resources the browser is allowed to load or execute.

**## Q25**

Q: Quel script est bloqué par `script-src 'self'` sans `unsafe-inline` ?

A: The inline JavaScript script.

**## Q26**

Q: Pourquoi le script externe local fonctionne-t-il ?

A: Because it comes from the same origin (`'self'`).

**## Q27**

Q: Pourquoi l'image externe est-elle bloquée par `img-src 'self'` ?

A: Because it comes from another origin.

**## Q28**

Q: À quoi sert Content-Security-Policy-Report-Only ?

A: It reports CSP violations without blocking resources.

**## Q29**

Q: CSP remplace-t-elle l'échappement des sorties et la validation côté serveur ?

A: NO, CSP is an additional security layer, not a replacement.