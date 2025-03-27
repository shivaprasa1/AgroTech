CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_number VARCHAR(16),
    expiry_date VARCHAR(7),
    cvv VARCHAR(4),
    total_amount DECIMAL(10,2),
    order_details TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ALTER TABLE orders ADD COLUMN payment_id VARCHAR(50);

);


