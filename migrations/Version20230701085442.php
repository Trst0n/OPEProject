<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230701085442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sponsorship ADD administrator_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsorship ADD CONSTRAINT FK_C0F10CD44B09E92C FOREIGN KEY (administrator_id) REFERENCES administrator (id)');
        $this->addSql('CREATE INDEX IDX_C0F10CD44B09E92C ON sponsorship (administrator_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sponsorship DROP FOREIGN KEY FK_C0F10CD44B09E92C');
        $this->addSql('DROP INDEX IDX_C0F10CD44B09E92C ON sponsorship');
        $this->addSql('ALTER TABLE sponsorship DROP administrator_id');
    }
}
