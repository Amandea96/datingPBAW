# datingPBAW
 Projekt jest serwisem randkowym, działającym podobnie do facebooka, lecz skupiającym się na poszukiwaniu partnera życiowego.
 Ważnym aspektem strony jest personalizacja swojego konta poprzez dodawanie licznych postów i opisów, jak i rozmowa ze znajomymi.
 


## Każdy użytkownik ma dostęp do:
- strony głównej,
- listy użytkowników (możliwe jest wyszukanie osoby),
- swojego profilu - dostępne jest dodanie nowych opisów,
- edycji profilu,
- listy znajomych (możliwa jest rozmowa ze znajomymi),
- do profili innych użytkowników, możliwość dodania i usunięcia ich ze znajomych,

## Niezarejstrowana osoba ma dostęp do:
- strony głównej,
- listy użytkowników bez wglądu do profili,
- rejestracja konta,

## Baza danych składa się z takich tabeli (i ich pól)jak:
### Zawiera dane logowania jak i podstawowe  informacje o osobie
- users (id, name, pass,role, gender, email, prefM, prefW, nation, city, age, height, complex, ecolor, hcolor,image),
### Zawiera opisy charakteru, przeżyć danej osoby
- post (data_desc, text, id, id_desc, title),
### Lista znajomych
- friend (Id_person1, id_person2, type)
### Wiadomości między znajomymi
- msg (sender, receiver, id_msg, date_msg, message),


## Wykorzystane technologie:
- PHP 
- Framework Laravel


