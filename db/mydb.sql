CREATE TABLE customer_info (
	customer_id SERIAL PRIMARY KEY,
	customer_first_name VARCHAR(80),
	customer_last_name VARCHAR(80	)
);

CREATE TABLE address2 (
	address_id SERIAL PRIMARY KEY,
	customer_id INT REFERENCES customer_info (customer_id),
	address_street VARCHAR(80),
	address_city VARCHAR(80),
	address_state VARCHAR(80),
	address_zip_code INT
);

CREATE TABLE payment_method1 (
	payment_method_id SERIAL PRIMARY KEY,
	customer_id  INT REFERENCES customer_information (customer_id),
	payment_card_type VARCHAR(80)
);

CREATE TABLE product (
	product_id SERIAL PRIMARY KEY,
	product_name VARCHAR(80)
);

CREATE TABLE orders1 (
	order_id SERIAL PRIMARY KEY,
	customer_id  INT REFERENCES customer_info (customer_id),
	product_id  INT REFERENCES product (product_id)
);
