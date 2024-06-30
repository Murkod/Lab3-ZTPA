# Laravel Mini-App

Mini aplikacja w Laravel demonstrująca podstawowe funkcjonalności i użycie Composera.

## Funkcjonalności

- Routing dla podstron (główna, kontakt, oferta, logowanie, profil)
- Połączenie z bazą danych
- Mechanizm kont użytkowników
- Przykład użycia biblioteki PHPMailer

## Wymagania

- PHP >= 7.3
- Composer
- MySQL lub inny kompatybilny system bazy danych

## Instalacja

1. Sklonuj repozytorium:
   git clone https://github.com/twoja-nazwa-uzytkownika/laravel-mini-app.git

2. Przejdź do katalogu projektu:
   cd laravel-mini-app

3. Zainstaluj zależności:
   composer install

4. Skopiuj plik .env.example do .env i skonfiguruj połączenie z bazą danych:
   cp .env.example .env

5. Wygeneruj klucz aplikacji:
   php artisan key:generate

6. Uruchom migracje:
   php artisan migrate

7. Uruchom serwer deweloperski:
   php artisan serve

Aplikacja powinna być dostępna pod adresem http://localhost:8000

## Struktura projektu

- `app/` - Główny katalog aplikacji
  - `Http/Controllers/` - Kontrolery aplikacji
  - `Http/Mail` - Serwis mailowy
- `config/` - Pliki konfiguracyjne
- `database/` - Migracje i seedery bazy danych
- `public/` - Publiczny katalog serwera web
- `resources/` - Widoki, assety i pliki językowe
- `routes/` - Definicje tras aplikacji
- `tests/` - Testy automatyczne

## Użycie Composera

Ten projekt wykorzystuje Composer do zarządzania zależnościami. Główne zależności to:

- Laravel Framework
- PHPMailer

Aby dodać nową zależność, użyj komendy:
composer require nazwa-pakietu

Więcej informacji o użyciu Composera w tym projekcie znajdziesz w [Wiki projektu](https://github.com/twoja-nazwa-uzytkownika/laravel-mini-app/wiki).

## Routing

Główne trasy aplikacji zdefiniowane są w pliku `routes/web.php`:

- `/` - Strona główna
- `/contact` - Strona kontaktowa
- `/offer` - Strona z ofertą
- `/login` - Strona logowania
- `/profile` - Profil użytkownika (wymaga zalogowania)

## Baza danych

Projekt używa Eloquent ORM do interakcji z bazą danych. Schemat bazy danych jest definiowany w migracjach w katalogu `database/migrations/`.

## Autentykacja

Mechanizm autentykacji jest dostarczany przez Laravel. Użytkownicy mogą się rejestrować, logować i wylogowywać.

## Przykład użycia PHPMailer

W projekcie znajduje się przykład użycia biblioteki PHPMailer do wysyłania e-maili. Kod przykładu można znaleźć w `app/Http/Controllers/MailController.php`.

## Testy

Aby uruchomić testy automatyczne, użyj komendy:
php artisan test

## Wdrożenie

Instrukcje wdrożenia aplikacji na serwer produkcyjny znajdują się w [Wiki projektu](https://github.com/twoja-nazwa-uzytkownika/laravel-mini-app/wiki/Wdrożenie).

