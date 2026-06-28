USE app;

CREATE TABLE categories (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(255) NOT NULL,
    description TEXT
) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS articles (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    image       VARCHAR(500),
    title       VARCHAR(255) NOT NULL,
    description TEXT,
    content     LONGTEXT,
    views_count INT NOT NULL DEFAULT 0
) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE article_categories (
    article_id  INT NOT NULL,
    category_id INT NOT NULL,
    PRIMARY KEY (article_id, category_id),
    CONSTRAINT fk_article_categories_article
        FOREIGN KEY (article_id) REFERENCES articles(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
    CONSTRAINT fk_article_categories_category
        FOREIGN KEY (category_id) REFERENCES categories(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE
) ENGINE=InnoDB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE INDEX idx_article_categories_category_id ON article_categories(category_id);