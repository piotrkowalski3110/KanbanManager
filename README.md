# Kanban Manager - Piotr Kowalski

Aplikacja służąca do zarządzania codziennymi zadaniami i projektami studenta. Uczeń będzie miał możliwość dodawania do bazy nowych tasków, aby mieć lepszy wgląd w rzeczy, które w najbliższym czasie będzie musiał wykonać.

## Dokładniejszy opis projektu:
- Dostęp do aplikacji realozowany będzie poprzez stronę logowania oraz rejestracji. Użytkownik będzie miał możliwość przejścia ze strony głównej do panelu logowania lub rejestracji (możliwa opcja utworzenia elementu typu popup). Tworzenie konta będzie dodawało odpowiednie dane do bazy danych (hasło musi być hashowane, aby zapewnić bezpieczeństwo danych użytkownika)

- Dodawanie tasków odbywać się będzie poprzez odpowiedni formularz. Użytkownik podawać będzie tytuł zadania, krótki opis o określonej długości znaków, datę końcową zadania oraz kategorię do jakiej należy (na stronie dostępne będzie filtrowanie rekordów z bazy danych (np. szkoła, dom, praca, itp.))

- Wyświetlanie aktualnych zadań będzie w formie tablicy kanban:
![Kanban](https://static.kanbantool.com/kanban-board/pl/zbuduj-tablice-kanban-krok3-zapisz-zadania-na-karteczkach-i-umiesc-je-na-tablicy.png)

- Zarządzanie zadaniami odbywać się będzie poprzez przycisk edycji (zmiana opisu, nazwy, daty, itd.) oraz poprzez przeciąganie drag&drop do odpowiednich kolumn (przykładowo DO ZROBIENIA > W TRAKCIE > DO TESTÓW > GOTOWE) oraz łatwego usuwania rekordów z bazy poprzez kliknięcie odpowiedniego przycisku i zaakceptowanie operacji (zabezpieczenie przed przypadkowym usuwaniem zadań)

- zadania których termin wykonania będzie mniejszy niż tydzień będą zmieniać kolor (przykładowo na pomarańczowy), a zadania których termin wykonania będzie mniejszy niż 3 dni lub przekroczony będą podświetlały się na czerwono, aby zwrócić uwagę użytkownika

- dodatkowo pojawią się elementy typowe dla stron i aplikacji internetowych:
    - menu navbar
    - footer
    - itp

## Wykorzystywane technologie:
- jQuery.ajax
- PHP
- HTML, CSS, JS
- Bootstrap
- Bazy danych (MariaDB w PHPMyAdmin, utworzenie bazy i zarządzanie realizowane poprzez XAMPP (LAMPP na systemie linux))
- inne, które będą dopisywane wraz z rozwojem aplikacji