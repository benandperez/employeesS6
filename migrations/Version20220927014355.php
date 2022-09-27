<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927014355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE education_level (id INT AUTO_INCREMENT NOT NULL, education_level_type_id INT DEFAULT NULL, institution VARCHAR(50) DEFAULT NULL, title VARCHAR(50) DEFAULT NULL, INDEX IDX_2666D6B4BB87B52F (education_level_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE education_level_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employees_personal_references (employees_id INT NOT NULL, personal_references_id INT NOT NULL, INDEX IDX_CD1023298520A30B (employees_id), INDEX IDX_CD102329F680466D (personal_references_id), PRIMARY KEY(employees_id, personal_references_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_nucleus (id INT AUTO_INCREMENT NOT NULL, document_type_id INT DEFAULT NULL, gender_id INT DEFAULT NULL, relationship_id INT DEFAULT NULL, first_name VARCHAR(50) DEFAULT NULL, last_name VARCHAR(50) DEFAULT NULL, birth_day DATE DEFAULT NULL, age INT NOT NULL, occupation VARCHAR(100) DEFAULT NULL, first_name_spouse VARCHAR(50) DEFAULT NULL, second_name_spouse VARCHAR(50) DEFAULT NULL, last_name_spouse VARCHAR(50) DEFAULT NULL, mother_last_name_spouse VARCHAR(50) DEFAULT NULL, married_last_name_spouse VARCHAR(50) DEFAULT NULL, birth_day_spouse DATE DEFAULT NULL, age_spouse INT DEFAULT NULL, document_spouse VARCHAR(50) DEFAULT NULL, works TINYINT(1) DEFAULT NULL, work_place VARCHAR(100) DEFAULT NULL, job_performs VARCHAR(50) DEFAULT NULL, salary VARCHAR(50) DEFAULT NULL, time_spouse VARCHAR(50) DEFAULT NULL, dependent TINYINT(1) DEFAULT NULL, INDEX IDX_A2441D061232A4F (document_type_id), INDEX IDX_A2441D0708A0E0 (gender_id), INDEX IDX_A2441D02C41D668 (relationship_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financial_profile (id INT AUTO_INCREMENT NOT NULL, account_type_id INT DEFAULT NULL, accounts TINYINT(1) NOT NULL, name VARCHAR(50) DEFAULT NULL, credit_balance VARCHAR(255) DEFAULT NULL, credit_card TINYINT(1) DEFAULT NULL, INDEX IDX_D394E865C6798DB (account_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, language_level_id INT DEFAULT NULL, language_level_written_id INT DEFAULT NULL, language VARCHAR(50) DEFAULT NULL, institution VARCHAR(50) DEFAULT NULL, certificate TINYINT(1) DEFAULT NULL, INDEX IDX_D4DB71B53313139D (language_level_id), INDEX IDX_D4DB71B556F4A489 (language_level_written_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language_level (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_references (id INT AUTO_INCREMENT NOT NULL, gender_id INT DEFAULT NULL, relationship_id INT DEFAULT NULL, name VARCHAR(100) DEFAULT NULL, last_names VARCHAR(100) DEFAULT NULL, birth_day DATE DEFAULT NULL, ocupation VARCHAR(100) DEFAULT NULL, INDEX IDX_DFCE8A3C708A0E0 (gender_id), INDEX IDX_DFCE8A3C2C41D668 (relationship_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relationship (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE studies_currently (id INT AUTO_INCREMENT NOT NULL, level VARCHAR(50) DEFAULT NULL, institution VARCHAR(50) DEFAULT NULL, title VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicle_features (id INT AUTO_INCREMENT NOT NULL, vehicle_types_id INT DEFAULT NULL, plate_number VARCHAR(50) NOT NULL, model VARCHAR(50) DEFAULT NULL, year_production VARCHAR(50) DEFAULT NULL, mark VARCHAR(50) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_62D2D38753A03CC3 (vehicle_types_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicle_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE working_information (id INT AUTO_INCREMENT NOT NULL, since DATE DEFAULT NULL, until DATE DEFAULT NULL, business VARCHAR(50) DEFAULT NULL, position_held VARCHAR(50) DEFAULT NULL, direct_boss VARCHAR(50) DEFAULT NULL, reference_phone VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE education_level ADD CONSTRAINT FK_2666D6B4BB87B52F FOREIGN KEY (education_level_type_id) REFERENCES education_level_type (id)');
        $this->addSql('ALTER TABLE employees_personal_references ADD CONSTRAINT FK_CD1023298520A30B FOREIGN KEY (employees_id) REFERENCES employees (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employees_personal_references ADD CONSTRAINT FK_CD102329F680466D FOREIGN KEY (personal_references_id) REFERENCES personal_references (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE family_nucleus ADD CONSTRAINT FK_A2441D061232A4F FOREIGN KEY (document_type_id) REFERENCES document_type (id)');
        $this->addSql('ALTER TABLE family_nucleus ADD CONSTRAINT FK_A2441D0708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE family_nucleus ADD CONSTRAINT FK_A2441D02C41D668 FOREIGN KEY (relationship_id) REFERENCES relationship (id)');
        $this->addSql('ALTER TABLE financial_profile ADD CONSTRAINT FK_D394E865C6798DB FOREIGN KEY (account_type_id) REFERENCES account_type (id)');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B53313139D FOREIGN KEY (language_level_id) REFERENCES language_level (id)');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B556F4A489 FOREIGN KEY (language_level_written_id) REFERENCES language_level (id)');
        $this->addSql('ALTER TABLE personal_references ADD CONSTRAINT FK_DFCE8A3C708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE personal_references ADD CONSTRAINT FK_DFCE8A3C2C41D668 FOREIGN KEY (relationship_id) REFERENCES relationship (id)');
        $this->addSql('ALTER TABLE vehicle_features ADD CONSTRAINT FK_62D2D38753A03CC3 FOREIGN KEY (vehicle_types_id) REFERENCES vehicle_types (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education_level DROP FOREIGN KEY FK_2666D6B4BB87B52F');
        $this->addSql('ALTER TABLE employees_personal_references DROP FOREIGN KEY FK_CD1023298520A30B');
        $this->addSql('ALTER TABLE employees_personal_references DROP FOREIGN KEY FK_CD102329F680466D');
        $this->addSql('ALTER TABLE family_nucleus DROP FOREIGN KEY FK_A2441D061232A4F');
        $this->addSql('ALTER TABLE family_nucleus DROP FOREIGN KEY FK_A2441D0708A0E0');
        $this->addSql('ALTER TABLE family_nucleus DROP FOREIGN KEY FK_A2441D02C41D668');
        $this->addSql('ALTER TABLE financial_profile DROP FOREIGN KEY FK_D394E865C6798DB');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B53313139D');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B556F4A489');
        $this->addSql('ALTER TABLE personal_references DROP FOREIGN KEY FK_DFCE8A3C708A0E0');
        $this->addSql('ALTER TABLE personal_references DROP FOREIGN KEY FK_DFCE8A3C2C41D668');
        $this->addSql('ALTER TABLE vehicle_features DROP FOREIGN KEY FK_62D2D38753A03CC3');
        $this->addSql('DROP TABLE account_type');
        $this->addSql('DROP TABLE education_level');
        $this->addSql('DROP TABLE education_level_type');
        $this->addSql('DROP TABLE employees_personal_references');
        $this->addSql('DROP TABLE family_nucleus');
        $this->addSql('DROP TABLE financial_profile');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE language_level');
        $this->addSql('DROP TABLE personal_references');
        $this->addSql('DROP TABLE property_status');
        $this->addSql('DROP TABLE relationship');
        $this->addSql('DROP TABLE studies_currently');
        $this->addSql('DROP TABLE vehicle_features');
        $this->addSql('DROP TABLE vehicle_types');
        $this->addSql('DROP TABLE working_information');
    }
}
