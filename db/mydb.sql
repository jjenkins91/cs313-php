CREATE TABLE customer_information (
	customer_id INT PRIMARY KEY,
	customer_name VARCHAR(80),
	customer_username VARCHAR(80),
	customer_password VARCHAR(80)
);

CREATE TABLE address (
	address_id INT PRIMARY KEY,
	customer_id INT REFERENCES customer_information (customer_id),
	address_street VARCHAR(80),
	address_city VARCHAR(80),
	address_state VARCHAR(80),
	address_zip_code INT
);

CREATE TABLE payment_method (
	payment_method_id INT PRIMARY KEY,
	customer_id  INT REFERENCES customer_information (customer_id),
	payment_card_type VARCHAR(80)
);

CREATE TABLE product (
	product_id INT PRIMARY KEY,
	product_name VARCHAR(80)
);

CREATE TABLE orders (
	order_id INT PRIMARY KEY,
	customer_id  INT REFERENCES customer_information (customer_id),
	product_id  INT REFERENCES product (product_id)
);
