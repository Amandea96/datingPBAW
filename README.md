# datingPBAW
 Poprzez rejestrację możliwe jest utworzenia konta, które będzie stanowić 
 dużą więdzę o użytkownikach i o ich zainteresowaniach.

## Baza danych składa się z takich tabeli (i ich pól)jak:
### Zawiera dane logowania jak i podstawowe  informacje o osobie
- person (id_person, nick, pass, gender, email, prefM, prefW, nation, city, age, height, complex, ecolor, hcolor,image),
### Zawiera opisy charakteru, przeżyć danej osoby
- description (data, text, id_pd, id_desc, main),
### Lista znajomych
- friend (Id_person1, id_person2)
### Wiadomości między znajomymi
- msg (sender, receiver, id_msg, date_msg, message),



> w laravel blade
