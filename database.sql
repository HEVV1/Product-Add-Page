CREATE DATABASE product_store;

CREATE TABLE product(
    id INT(10) not null PRIMARY KEY AUTO_INCREMENT,
    sku varchar(64),
    name varchar(64),
    price numeric(10,2),
    image LONGTEXT,
    attribute varchar(68)
);

INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200123', 'Tennis Racket', 1.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '700');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.50, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC235223', 'T-Shirt', 13.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803869258833980/9088.png', '900');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200124', 'Jeans', 25.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803912103641088/hmgoepprod.png', '0.5');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC324673', 'Shorts', 15.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803941363122216/Rust_Front.png', '31x15x7');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('GGWP007', 'Tennis Racket', 20.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '2');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC235223', 'T-Shirt', 13.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803869258833980/9088.png', '900');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200124', 'Jeans', 25.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803912103641088/hmgoepprod.png', '0.5');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC324673', 'Shorts', 15.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803941363122216/Rust_Front.png', '31x15x7');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200123', 'Tennis Racket', 1.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '700');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.50, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200123', 'Tennis Racket', 1.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '700');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.50, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC235223', 'T-Shirt', 13.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803869258833980/9088.png', '900');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200124', 'Jeans', 25.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803912103641088/hmgoepprod.png', '0.5');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC324673', 'Shorts', 15.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803941363122216/Rust_Front.png', '31x15x7');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('GGWP007', 'Tennis Racket', 20.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '2');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC235223', 'T-Shirt', 13.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803869258833980/9088.png', '900');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200124', 'Jeans', 25.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803912103641088/hmgoepprod.png', '0.5');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC324673', 'Shorts', 15.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872803941363122216/Rust_Front.png', '31x15x7');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('JVC200123', 'Tennis Racket', 1.00, 'https://cdn.discordapp.com/attachments/872802741167218728/872805127411597322/tennis-racket.png', '700');
INSERT INTO product(sku, name, price, image, attribute) VALUES ('TR120555', 'Chair', 40.50, 'https://cdn.discordapp.com/attachments/872802741167218728/872803825449308180/81J5r9dANGL.png', '24x45x15');
