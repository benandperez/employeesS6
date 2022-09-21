<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220921022820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employees (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(50) NOT NULL, second_name VARCHAR(50) DEFAULT NULL, last_name VARCHAR(50) NOT NULL, mother_last_name VARCHAR(50) DEFAULT NULL, married_last_name VARCHAR(50) DEFAULT NULL, document VARCHAR(50) NOT NULL, expiration_date DATE NOT NULL, birth_place VARCHAR(50) NOT NULL, nationality VARCHAR(50) NOT NULL, birth_day DATE NOT NULL, age INT NOT NULL, full_residence_address VARCHAR(100) NOT NULL, personal_email VARCHAR(20) DEFAULT NULL, residential_telephone VARCHAR(15) DEFAULT NULL, cell_phone VARCHAR(15) NOT NULL, expiration_date_license DATE DEFAULT NULL, has_own_car TINYINT(1) NOT NULL, in_case_of_emergency VARCHAR(50) DEFAULT NULL, family_phone_number VARCHAR(15) DEFAULT NULL, allergic TINYINT(1) NOT NULL, chronic_disease TINYINT(1) NOT NULL, allergic_yes VARCHAR(50) DEFAULT NULL, chronic_disease_yes VARCHAR(50) DEFAULT NULL, blood_donor TINYINT(1) NOT NULL, bank_account TINYINT(1) NOT NULL, account_number VARCHAR(50) DEFAULT NULL, sports_practice TINYINT(1) NOT NULL, what_sports VARCHAR(50) DEFAULT NULL, favorite_hobby VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE employees');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
