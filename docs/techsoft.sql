CREATE TABLE IF NOT EXISTS `techsoft`.`categories` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `techsoft`.`products` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `price` DOUBLE(11,2) NOT NULL,
  `category_id` INT UNSIGNED NOT NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  `deleted_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_products_categories_idx` (`category_id` ASC),
  CONSTRAINT `fk_products_categories`
    FOREIGN KEY (`category_id`)
    REFERENCES `techsoft`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `techsoft`.`files` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `fileable_type` VARCHAR(45) NULL,
  `fileable_id` INT NULL,
  `path` VARCHAR(255) NULL,
  `category` VARCHAR(100) NULL,
  `created_at` TIMESTAMP(1) NULL,
  `updated_at` TIMESTAMP(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;