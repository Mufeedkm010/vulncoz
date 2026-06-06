CREATE DATABASE IF NOT EXISTS vulncoz;

USE vulncoz;

CREATE TABLE IF NOT EXISTS users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(100),
role VARCHAR(50),
email VARCHAR(100)
);

INSERT IGNORE INTO users
(id, username, password, role, email)
VALUES
(1,'john','Welcome@123','employee','[john@vulncoz.local](mailto:john@vulncoz.local)'),
(2,'sarah','Sarah@2025','hr','[sarah@vulncoz.local](mailto:sarah@vulncoz.local)'),
(3,'developer','Dev@2025','developer','[developer@vulncoz.local](mailto:developer@vulncoz.local)'),
(4,'admin','Admin@2025','admin','[admin@vulncoz.local](mailto:admin@vulncoz.local)');

CREATE TABLE IF NOT EXISTS employees (
id INT AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(100),
department VARCHAR(50),
email VARCHAR(100),
salary VARCHAR(20)
);

INSERT IGNORE INTO employees
(id, fullname, department, email, salary)
VALUES
(1,'John Smith','IT','[john.smith@vulncoz.local](mailto:john.smith@vulncoz.local)','75000'),
(2,'Sarah Johnson','HR','[sarah.johnson@vulncoz.local](mailto:sarah.johnson@vulncoz.local)','68000'),
(3,'Michael Brown','Finance','[michael.brown@vulncoz.local](mailto:michael.brown@vulncoz.local)','85000'),
(4,'David Wilson','Development','[david.wilson@vulncoz.local](mailto:david.wilson@vulncoz.local)','95000');

CREATE TABLE IF NOT EXISTS tickets (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
subject VARCHAR(255),
message TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT IGNORE INTO tickets
(id, username, subject, message)
VALUES
(1,'john','VPN Access','Unable to connect to corporate VPN'),
(2,'sarah','Payroll Issue','Need access to payroll records'),
(3,'developer','Server Access','Requesting access to development server');

CREATE TABLE IF NOT EXISTS uploads (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
filename VARCHAR(255),
upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT IGNORE INTO uploads
(id, username, filename)
VALUES
(1,'john','resume.pdf'),
(2,'sarah','employees.xlsx'),
(3,'developer','backup.zip');
