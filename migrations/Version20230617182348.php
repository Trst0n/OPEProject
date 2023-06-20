<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230617182348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrator (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_58DF0651F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, zipcode VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum (id INT AUTO_INCREMENT NOT NULL, establishment_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, supp_kw LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_7BE2A7C38565851 (establishment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE establishment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE field (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE field_curriculum (field_id INT NOT NULL, curriculum_id INT NOT NULL, INDEX IDX_766ACE7B443707B0 (field_id), INDEX IDX_766ACE7B5AEA4428 (curriculum_id), PRIMARY KEY(field_id, curriculum_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, phonenumber VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, birthdate DATE NOT NULL, civility VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, city_id INT DEFAULT NULL, sponsorship_id INT DEFAULT NULL, languages LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', wishes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', state VARCHAR(255) NOT NULL, INDEX IDX_818CC9D48BAC62AF (city_id), UNIQUE INDEX UNIQ_818CC9D48ACED59A (sponsorship_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsor_field (sponsor_id INT NOT NULL, field_id INT NOT NULL, INDEX IDX_FB1F056312F7FB51 (sponsor_id), INDEX IDX_FB1F0563443707B0 (field_id), PRIMARY KEY(sponsor_id, field_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsorship (id INT AUTO_INCREMENT NOT NULL, wishes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', state VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, city_id INT DEFAULT NULL, establishment_id INT DEFAULT NULL, sponsorship_id INT DEFAULT NULL, languages LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', wishes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', state VARCHAR(255) NOT NULL, INDEX IDX_B723AF338BAC62AF (city_id), INDEX IDX_B723AF338565851 (establishment_id), UNIQUE INDEX UNIQ_B723AF338ACED59A (sponsorship_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_curriculum (student_id INT NOT NULL, curriculum_id INT NOT NULL, INDEX IDX_963D4A22CB944F1A (student_id), INDEX IDX_963D4A225AEA4428 (curriculum_id), PRIMARY KEY(student_id, curriculum_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE curriculum ADD CONSTRAINT FK_7BE2A7C38565851 FOREIGN KEY (establishment_id) REFERENCES establishment (id)');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B443707B0 FOREIGN KEY (field_id) REFERENCES field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B5AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D48BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_818CC9D48ACED59A FOREIGN KEY (sponsorship_id) REFERENCES sponsorship (id)');
        $this->addSql('ALTER TABLE sponsor_field ADD CONSTRAINT FK_FB1F056312F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor_field ADD CONSTRAINT FK_FB1F0563443707B0 FOREIGN KEY (field_id) REFERENCES field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF338BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF338565851 FOREIGN KEY (establishment_id) REFERENCES establishment (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF338ACED59A FOREIGN KEY (sponsorship_id) REFERENCES sponsorship (id)');
        $this->addSql('ALTER TABLE student_curriculum ADD CONSTRAINT FK_963D4A22CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_curriculum ADD CONSTRAINT FK_963D4A225AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum DROP FOREIGN KEY FK_7BE2A7C38565851');
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B443707B0');
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B5AEA4428');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D48BAC62AF');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_818CC9D48ACED59A');
        $this->addSql('ALTER TABLE sponsor_field DROP FOREIGN KEY FK_FB1F056312F7FB51');
        $this->addSql('ALTER TABLE sponsor_field DROP FOREIGN KEY FK_FB1F0563443707B0');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF338BAC62AF');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF338565851');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF338ACED59A');
        $this->addSql('ALTER TABLE student_curriculum DROP FOREIGN KEY FK_963D4A22CB944F1A');
        $this->addSql('ALTER TABLE student_curriculum DROP FOREIGN KEY FK_963D4A225AEA4428');
        $this->addSql('DROP TABLE administrator');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE curriculum');
        $this->addSql('DROP TABLE establishment');
        $this->addSql('DROP TABLE field');
        $this->addSql('DROP TABLE field_curriculum');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('DROP TABLE sponsor_field');
        $this->addSql('DROP TABLE sponsorship');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE student_curriculum');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
