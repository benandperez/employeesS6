<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220922014457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bank (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blood_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE corregimiento (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE district (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gender (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE license_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marital_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE province (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employees ADD document_type_id INT NOT NULL, ADD gender_id INT DEFAULT NULL, ADD marital_status_id INT DEFAULT NULL, ADD province_id INT DEFAULT NULL, ADD corregimiento_id INT DEFAULT NULL, ADD district_id INT DEFAULT NULL, ADD license_type_id INT DEFAULT NULL, ADD blood_type_id INT DEFAULT NULL, ADD bank_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C30061232A4F FOREIGN KEY (document_type_id) REFERENCES document_type (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300E559F9BF FOREIGN KEY (marital_status_id) REFERENCES marital_status (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300E946114A FOREIGN KEY (province_id) REFERENCES province (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300A02E9013 FOREIGN KEY (corregimiento_id) REFERENCES corregimiento (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C300B08FA272 FOREIGN KEY (district_id) REFERENCES district (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C3002C55C7C8 FOREIGN KEY (license_type_id) REFERENCES license_type (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C3007AEA5732 FOREIGN KEY (blood_type_id) REFERENCES blood_type (id)');
        $this->addSql('ALTER TABLE employees ADD CONSTRAINT FK_BA82C30011C8FB41 FOREIGN KEY (bank_id) REFERENCES bank (id)');
        $this->addSql('CREATE INDEX IDX_BA82C30061232A4F ON employees (document_type_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300708A0E0 ON employees (gender_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300E559F9BF ON employees (marital_status_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300E946114A ON employees (province_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300A02E9013 ON employees (corregimiento_id)');
        $this->addSql('CREATE INDEX IDX_BA82C300B08FA272 ON employees (district_id)');
        $this->addSql('CREATE INDEX IDX_BA82C3002C55C7C8 ON employees (license_type_id)');
        $this->addSql('CREATE INDEX IDX_BA82C3007AEA5732 ON employees (blood_type_id)');
        $this->addSql('CREATE INDEX IDX_BA82C30011C8FB41 ON employees (bank_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C30011C8FB41');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C3007AEA5732');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300A02E9013');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300B08FA272');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C30061232A4F');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300708A0E0');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C3002C55C7C8');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300E559F9BF');
        $this->addSql('ALTER TABLE employees DROP FOREIGN KEY FK_BA82C300E946114A');
        $this->addSql('DROP TABLE bank');
        $this->addSql('DROP TABLE blood_type');
        $this->addSql('DROP TABLE corregimiento');
        $this->addSql('DROP TABLE district');
        $this->addSql('DROP TABLE document_type');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP TABLE license_type');
        $this->addSql('DROP TABLE marital_status');
        $this->addSql('DROP TABLE province');
        $this->addSql('DROP INDEX IDX_BA82C30061232A4F ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300708A0E0 ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300E559F9BF ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300E946114A ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300A02E9013 ON employees');
        $this->addSql('DROP INDEX IDX_BA82C300B08FA272 ON employees');
        $this->addSql('DROP INDEX IDX_BA82C3002C55C7C8 ON employees');
        $this->addSql('DROP INDEX IDX_BA82C3007AEA5732 ON employees');
        $this->addSql('DROP INDEX IDX_BA82C30011C8FB41 ON employees');
        $this->addSql('ALTER TABLE employees DROP document_type_id, DROP gender_id, DROP marital_status_id, DROP province_id, DROP corregimiento_id, DROP district_id, DROP license_type_id, DROP blood_type_id, DROP bank_id');
    }
}
