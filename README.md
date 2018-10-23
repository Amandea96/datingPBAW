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
- person (id_person, nick, pass, gender, email, prefM, prefW, nation, city, age, height, complex, ecolor, hcolor,image),
### Zawiera opisy charakteru, przeżyć danej osoby
- description (data, text, id_pd, id_desc, main),
### Lista znajomych
- friend (Id_person1, id_person2)
### Wiadomości między znajomymi
- msg (sender, receiver, id_msg, date_msg, message),


## Wykorzystane technologie:
- PHP 
- Framework Laravel

> w laravel blade, carbon, date
