<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230617184636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student_curriculum DROP FOREIGN KEY FK_963D4A225AEA4428');
        $this->addSql('ALTER TABLE student_curriculum DROP FOREIGN KEY FK_963D4A22CB944F1A');
        $this->addSql('DROP TABLE student_curriculum');
        $this->addSql('ALTER TABLE sponsor ADD person_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D4217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('CREATE INDEX IDX_818CC9D4217BBB47 ON sponsor (person_id)');
        $this->addSql('ALTER TABLE student ADD curriculum_id INT DEFAULT NULL, ADD person_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF335AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('CREATE INDEX IDX_B723AF335AEA4428 ON student (curriculum_id)');
        $this->addSql('CREATE INDEX IDX_B723AF33217BBB47 ON student (person_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_curriculum (student_id INT NOT NULL, curriculum_id INT NOT NULL, INDEX IDX_963D4A225AEA4428 (curriculum_id), INDEX IDX_963D4A22CB944F1A (student_id), PRIMARY KEY(student_id, curriculum_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE student_curriculum ADD CONSTRAINT FK_963D4A225AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_curriculum ADD CONSTRAINT FK_963D4A22CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D4217BBB47');
        $this->addSql('DROP INDEX IDX_818CC9D4217BBB47 ON sponsor');
        $this->addSql('ALTER TABLE sponsor DROP person_id');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF335AEA4428');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF33217BBB47');
        $this->addSql('DROP INDEX IDX_B723AF335AEA4428 ON student');
        $this->addSql('DROP INDEX IDX_B723AF33217BBB47 ON student');
        $this->addSql('ALTER TABLE student DROP curriculum_id, DROP person_id');
    }
}
