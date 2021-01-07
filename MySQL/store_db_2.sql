CREATE DATABASE store;
USE store;
CREATE TABLE customer
(
	customerNumber		INT NOT NULL PRIMARY KEY,
    customerName 		VARCHAR(50) NOT NULL,
    contactLastName		VARCHAR(50) NOT NULL,
    contactFirstName	VARCHAR(50) NOT NULL,
    phone				VARCHAR(50) NOT NULL,
    addressLine1		VARCHAR(50) NOT NULL,
    addressLine2		VARCHAR(50),
    city				VARCHAR(50) NOT NULL,
    state				VARCHAR(50) NOT NULL,
    postalCode			VARCHAR(15) NOT NULL,
    country				VARCHAR(50) NOT NULL,
    creditLimit			FLOAT,
    salesRepEmployeeNumber VARCHAR(10) NOT NULL,
    FOREIGN KEY (salesRepEmployeeNumber) REFERENCES employees(employeeNumber)
);

CREATE TABLE orders
(
	orderNumber			INT PRIMARY KEY NOT NULL,
    orderDate			DATETIME NOT NULL,
	requiredDate		DATETIME NOT NULL,
    shippedDate			DATETIME,
    status				VARCHAR(15) NOT NULL,
    comments			TEXT,
    quantityOrdered		INT NOT NULL,
    priceEach			FLOAT NOT NULL,
    customerNumber 		INT NOT NULL,
	FOREIGN KEY (customerNumber) REFERENCES customer(customerNumber)
);

CREATE TABLE orderDetails
(
	productCode			VARCHAR(15) NOT NULL,
    FOREIGN KEY (productCode) REFERENCES product(productCode),
	orderNumber 		INT NOT NULL,
	FOREIGN KEY (orderNumber) REFERENCES orders(orderNumber)
);

CREATE TABLE payments
(
	customerNumber 		INT NOT NULL,
	FOREIGN KEY (customerNumber) REFERENCES customer(customerNumber),
    checkNumber			VARCHAR(50) NOT NULL,
    paymentDate			DATETIME NOT NULL,
    amount				FLOAT NOT NULL
);

CREATE TABLE product
(
	productCode			VARCHAR(15) PRIMARY KEY NOT NULL,
    productName			VARCHAR(70) NOT NULL,
    productScale		VARCHAR(10) NOT NULL,
    productVendor		VARCHAR(50) NOT NULL,
    productDescription	TEXT NOT NULL,
    quantityInStock 	INT NOT NULL,
    buyPrice			FLOAT NOT NULL,
    MSRP				FLOAT NOT NULL,
    productLine			VARCHAR(50) NOT NULL,
    FOREIGN KEY (productLine) REFERENCES productlines(productLine)
);

CREATE TABLE productlines
(
	productLine			VARCHAR(50) PRIMARY KEY NOT NULL,
    textDescription 	TEXT NOT NULL,
    image 				VARCHAR(100)
);

CREATE TABLE employees 
(
	employeeNumber		VARCHAR(10) PRIMARY KEY NOT NULL,
    lastName			VARCHAR(50) NOT NULL,
    firstName			VARCHAR(50) NOT NULL,
    email				VARCHAR(100) NOT NULL,
    jobTitle			VARCHAR(50) NOT NULL,
    reportTo			VARCHAR(10) NOT NULL,
    FOREIGN KEY (reportTo) REFERENCES employees(employeeNumber),
    officeCode			VARCHAR(10) NOT NULL,
    FOREIGN KEY (officeCode) REFERENCES offices(officeCode)
);

CREATE TABLE offices
(
	officeCode			VARCHAR(10) PRIMARY KEY NOT NULL,
    city				VARCHAR(50) NOT NULL,
    phone 				VARCHAR(50) NOT NULL,
	addressLine1 		VARCHAR(50) NOT NULL,
    addressLine2		VARCHAR(50),
    state 				VARCHAR(50),
    country 			VARCHAR(50),
    postalCode			VARCHAR(15) NOT NULL
);