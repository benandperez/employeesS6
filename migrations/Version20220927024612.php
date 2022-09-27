<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927024612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE corregimiento ADD district_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE corregimiento ADD CONSTRAINT FK_982AF11BB08FA272 FOREIGN KEY (district_id) REFERENCES district (id)');
        $this->addSql('CREATE INDEX IDX_982AF11BB08FA272 ON corregimiento (district_id)');
        $this->addSql('ALTER TABLE district ADD province_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE district ADD CONSTRAINT FK_31C15487E946114A FOREIGN KEY (province_id) REFERENCES province (id)');
        $this->addSql('CREATE INDEX IDX_31C15487E946114A ON district (province_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE corregimiento DROP FOREIGN KEY FK_982AF11BB08FA272');
        $this->addSql('DROP INDEX IDX_982AF11BB08FA272 ON corregimiento');
        $this->addSql('ALTER TABLE corregimiento DROP district_id');
        $this->addSql('ALTER TABLE district DROP FOREIGN KEY FK_31C15487E946114A');
        $this->addSql('DROP INDEX IDX_31C15487E946114A ON district');
        $this->addSql('ALTER TABLE district DROP province_id');
    }
}
