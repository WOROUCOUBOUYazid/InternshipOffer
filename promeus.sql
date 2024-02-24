CREATE TABLE users(id int AUTO_INCREMENT PRIMARY KEY, firstname varchar(255), lastname varchar(255), phone int, email varchar(255) UNIQUE NOT NULL, profile varchar(255), password varchar(255) NOT NULL, created_at timestamp, updated_at timestamp);

CREATE TABLE students (id int AUTO_INCREMENT PRIMARY KEY, filiere varchar(255), entite varchar(255), user_id int, FOREIGN KEY (user_id) REFERENCES users (id), created_at timestamp, updated_at timestamp);

CREATE TABLE companies (id int AUTO_INCREMENT PRIMARY KEY, name varchar(255), phone int, email varchar(255), field varchar(255), location varchar(255), logo varchar(255), created_at timestamp, updated_at timestamp);

CREATE TABLE employees (id int AUTO_INCREMENT PRIMARY KEY, role varchar(255), user_id int, company_id int, FOREIGN KEY (user_id) REFERENCES users (id), FOREIGN KEY (company_id) REFERENCES companies (id), created_at timestamp, updated_at timestamp);

CREATE TABLE internship_offers (id int AUTO_INCREMENT PRIMARY KEY, position varchar(255), presentation varchar(255), places_available int, level_required varchar(255), deadline date, application_file varchar(255), company_id int, FOREIGN KEY (company_id) REFERENCES companies (id), created_at timestamp, updated_at timestamp);

CREATE TABLE offer_applications (id int AUTO_INCREMENT PRIMARY KEY, student_id int, offer_id int, message text, files varchar(255), status varchar(255), FOREIGN KEY (student_id) REFERENCES students (id), FOREIGN KEY (offer_id) REFERENCES internship_offers (id), created_at timestamp, updated_at timestamp);
