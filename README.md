# Aplikacja internetowa do zamawiania cateringu

# Dokumentacja projektu
Autor	Łukasz Wołoszyn
Kierunek, rok	Informatyka, II rok, st. stacjonarne (3,5-l)


# Wstęp
Projekt "Catering Dietetyczny" to aplikacja internetowa stworzona w celu zarządzania usługami cateringu dietetycznego. Aplikacja jest przeznaczona zarówno dla klientów, którzy chcą zamówić spersonalizowane plany żywieniowe, jak i dla administratorów zarządzających ofertami, zamówieniami oraz przepisami.
Aplikacja obejmuje szeroki zakres usług związanych z cateringiem dietetycznym. Użytkownicy mogą przeglądać różnorodne diety dostosowane do ich indywidualnych potrzeb. Każda dieta jest szczegółowo opisana, zawierając informacje o posiłkach. Aplikacja umożliwia również przeglądanie przepisów kulinarnych, które są częścią oferowanych diet. 
Narzędzia i technologie

Wykorzystane programy: </br>
•	Visual Studio Code 1.63.22 </br>
•	XAMPP Control Panel v3.3.0 </br>
Oraz techonolgii: </br>
•	PHP (darmowa, www.php.net, dokumentacja: PHP: Documentation)</br>
•	Laravel 11.x (darmowy, www.laravel.com, dokumentacja: Installation - Laravel 8.x - The PHP Framework For Web Artisans)</br>
•	MySQL (darmowy, www.mysql.comm dokumentacja: MySQL :: MySQL Documentation)</br>
•	Bootstrap v5.3.3  (darmowy, www.getbootstrap.com, dokumentacja: Introduction · Bootstrap (getbootstrap.com) )</br>

# Baza danych
Schemat ERD:</br>
![image](https://github.com/user-attachments/assets/9e463473-c70f-4f5e-bf40-9b34fee5c237)

Zawartość bazy danych:</br>
•	Tabela offers: Zawiera całą ofertę cateringu.</br>
•	Tabela orders: Zawiera informacje o zamówieniu.</br>
•	Tabela accounts: Zawiera informacje o użytkownikach oraz adminach.</br>
•	Tabela recipes: Zawiera przepisy wybranych dań z konkretnej oferty.</br>

# GUI
Strona główna:</br>
 ![image](https://github.com/user-attachments/assets/13df8939-8572-423e-907f-1d9f1132acf7)

Ogólny przegląd ofert:</br>
![image](https://github.com/user-attachments/assets/7a2a3a99-b5d6-4ba3-baec-82728c6695cc)

Edycja przepisów po stronie admina:</br>
![image](https://github.com/user-attachments/assets/bd218582-f61f-48af-9a9b-a8a6da4e9517)
 
# Uruchomienie aplikacji
Aby uruchomić aplikację, należy mieć zainstalowane:
1.	Visual Studio Code lub inne środowisko programistyczne
2.	XAMPP Control Panel v3.3.0, następnie włączyć usługę Apache oraz MySQL
3.	Najnowszą wersję PHP (www.php.net/downloads.php )
4.	Najnowszą wersję Composer (Introduction - Composer (getcomposer.org))
5.	Zainstaluj MySQL. (www.mysql.com/downloads)
Następnie należy:
6.	Wypakować projekt.
7.	Stworzyć nową bazę danych catering po adresem: localhost /phpMyAdmin
8.	Uruchomić polecenie composer install w katalogu projektu.
9.	Uruchomić migracje bazy danych: php artisan db:seed.

# Funkcjonalności aplikacji
Rejestracja:</br>
Nowi użytkownicy mogą założyć nowe konto wpisując swoje dane:</br>
![image](https://github.com/user-attachments/assets/f4f9d236-9878-4d07-8178-74678e4edcc1)

W kodzie użyto walidacji po stronie backendu za pomocą metody validate obiektu Request, co uniemożliwia stworzenia nowego konta, gdy użytkownik wprowadzi błędne dane: </br>
![image](https://github.com/user-attachments/assets/d36b75ac-343b-4e61-8558-f914f25cca64)
 
Logowanie:</br>
Aby użytkownik/admin mógł zalogować się na swoje konto musi podać poprawny adres email oraz hasło:</br>
![image](https://github.com/user-attachments/assets/d74b6839-7cae-4e18-a0c1-4e5d74b13892)
 	</br>Logowanie admina:</br>
		Login: kamilmak@gmail.com</br>
		Hasło: 1235</br>
	Logowanie użytkownika:</br>
		Login:  jannowak@gmail.com</br>
		Hasło: 1235</br>
Jeśli użytkownik poda nieprawidłowe dane logowania, zostają o tym poinformowany: </br>
![image](https://github.com/user-attachments/assets/0b2756b8-b668-4024-8331-cf3670f0007f)
 
# CRUD przeprowadzany przez administratora
Administrator ma możliwość edytowania, usuwania, dodawania między innymi zamówień użytkowników, przepisów oraz całej oferty. </br>
Edycja/usuwanie oferty:</br>
![image](https://github.com/user-attachments/assets/c32679ab-bc54-4fcc-87a0-42471cee5648)

Dodawanie nowej oferty:</br>
![image](https://github.com/user-attachments/assets/cb33ee4d-9ab8-4092-98ca-b03eddb1c636)
 
Jeśli administrator poda nieprawidłowe wartości, również zadziała walidacja:</br>
![image](https://github.com/user-attachments/assets/4256bb98-acfe-4d68-8d94-960af8fc46f6)

Panel edycji/usuwania przepisów:</br>
![image](https://github.com/user-attachments/assets/ea5975fb-05cc-45e3-8577-389689fecd55)
 
Edycja przepisu:</br>
![image](https://github.com/user-attachments/assets/399f3510-f792-499c-a489-ae9365aca5e1)
 
Dodawanie przepisu:</br>
![image](https://github.com/user-attachments/assets/7f6e84df-2cd1-40f4-80e5-126fb6cbd288)

Panel edycji zamówień użytkowników:</br>
![image](https://github.com/user-attachments/assets/420a1a68-6b7f-48a4-ae64-326029191096)

Edycja/usuwanie zamówienia:</br>
![image](https://github.com/user-attachments/assets/2a2d402c-0e7d-4726-916b-f07754008225)

![image](https://github.com/user-attachments/assets/ff022150-1536-4b25-8cad-100523828797)

Zarządzanie swoimi zasobami przez użytkownika aplikacji
	Zalogowany użytkownik może zamawiać oraz edytować/usuwać swoje zamówienie:
![image](https://github.com/user-attachments/assets/b011be52-0fde-420f-93b3-3bd777db6ab7)
![image](https://github.com/user-attachments/assets/01d54037-17f0-4fd5-b12b-d99b3e2ac238)


