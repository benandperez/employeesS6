<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927000847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE family_nucleus (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(50) DEFAULT NULL, last_name VARCHAR(50) DEFAULT NULL, birth_day DATE DEFAULT NULL, age INT NOT NULL, occupation VARCHAR(100) DEFAULT NULL, first_name_spouse VARCHAR(50) DEFAULT NULL, second_name_spouse VARCHAR(50) DEFAULT NULL, last_name_spouse VARCHAR(50) DEFAULT NULL, mother_last_name_spouse VARCHAR(50) DEFAULT NULL, married_last_name_spouse VARCHAR(50) DEFAULT NULL, birth_day_spouse DATE DEFAULT NULL, age_spouse INT DEFAULT NULL, document_spouse VARCHAR(50) DEFAULT NULL, works TINYINT(1) DEFAULT NULL, work_place VARCHAR(100) DEFAULT NULL, job_performs VARCHAR(50) DEFAULT NULL, salary VARCHAR(50) DEFAULT NULL, time_spouse VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relationship (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE family_nucleus');
        $this->addSql('DROP TABLE relationship');
    }
}
