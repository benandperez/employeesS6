<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220921021256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C30061232A4F');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300C2D71C68');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_area DROP FOREIGN KEY FK_F002A2A9BD0F409C');
        $this->addSql('DROP TABLE area');
        $this->addSql('DROP TABLE document_type');
        $this->addSql('DROP TABLE sub_area');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_BA82C30061232A4F ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300C2D71C68 ON employees');
        $this->addSql('ALTER TABLE employees ADD second_name VARCHAR(50) DEFAULT NULL, ADD last_name VARCHAR(50) NOT NULL, ADD mother_last_name VARCHAR(50) DEFAULT NULL, ADD married_last_name VARCHAR(50) DEFAULT NULL, ADD expiration_date DATE NOT NULL, ADD birth_place VARCHAR(50) NOT NULL, ADD nationality VARCHAR(50) NOT NULL, ADD birth_day DATE NOT NULL, ADD age INT NOT NULL, ADD personal_email VARCHAR(20) DEFAULT NULL, ADD residential_telephone VARCHAR(15) DEFAULT NULL, ADD cell_phone VARCHAR(15) NOT NULL, ADD expiration_date_license DATE DEFAULT NULL, ADD has_own_car TINYINT(1) NOT NULL, ADD in_case_of_emergency VARCHAR(50) DEFAULT NULL, ADD family_phone_number VARCHAR(15) DEFAULT NULL, ADD allergic TINYINT(1) NOT NULL, ADD chronic_disease TINYINT(1) NOT NULL, ADD allergic_yes VARCHAR(50) DEFAULT NULL, ADD chronic_disease_yes VARCHAR(50) DEFAULT NULL, ADD blood_donor TINYINT(1) NOT NULL, ADD bank_account TINYINT(1) NOT NULL, ADD account_number VARCHAR(50) DEFAULT NULL, ADD sports_practice TINYINT(1) NOT NULL, ADD what_sports VARCHAR(50) DEFAULT NULL, ADD favorite_hobby VARCHAR(50) DEFAULT NULL, DROP document_type_id, DROP sub_area_id, DROP created_at, DROP updated_at, CHANGE document document VARCHAR(50) NOT NULL, CHANGE first_names first_name VARCHAR(50) NOT NULL, CHANGE last_names full_residence_address VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE area (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE document_type (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sub_area (id INT AUTO_INCREMENT NOT NULL, area_id INT DEFAULT NULL, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_F002A2A9BD0F409C (area_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, roles JSON NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE sub_area ADD CONSTRAINT FK_F002A2A9BD0F409C FOREIGN KEY (area_id) REFERENCES area (id)');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE employees ADD document_type_id INT DEFAULT NULL, ADD sub_area_id INT DEFAULT NULL, ADD first_names VARCHAR(50) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL, DROP first_name, DROP second_name, DROP last_name, DROP mother_last_name, DROP married_last_name, DROP expiration_date, DROP birth_place, DROP nationality, DROP birth_day, DROP age, DROP personal_email, DROP residential_telephone, DROP cell_phone, DROP expiration_date_license, DROP has_own_car, DROP in_case_of_emergency, DROP family_phone_number, DROP allergic, DROP chronic_disease, DROP allergic_yes, DROP chronic_disease_yes, DROP blood_donor, DROP bank_account, DROP account_number, DROP sports_practice, DROP what_sports, DROP favorite_hobby, CHANGE document document VARCHAR(30) NOT NULL, CHANGE full_residence_address last_names VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C30061232A4F FOREIGN KEY (document_type_id) REFERENCES document_type (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300C2D71C68 FOREIGN KEY (sub_area_id) REFERENCES sub_area (id)');
        $this->addSql('CREATE INDEX IDX_BA82C30061232A4F ON employees (document_type_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300C2D71C68 ON employees (sub_area_id)');
    }
}
