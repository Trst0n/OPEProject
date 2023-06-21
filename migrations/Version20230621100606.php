<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230621100606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE field_curriculum (field_id INT NOT NULL, curriculum_id INT NOT NULL, INDEX IDX_766ACE7B443707B0 (field_id), INDEX IDX_766ACE7B5AEA4428 (curriculum_id), PRIMARY KEY(field_id, curriculum_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B443707B0 FOREIGN KEY (field_id) REFERENCES field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B5AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B443707B0');
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B5AEA4428');
        $this->addSql('DROP TABLE field_curriculum');
    }
}
