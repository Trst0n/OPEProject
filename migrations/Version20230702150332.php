<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230702150332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrator (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_58DF0651F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, zipcode VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, lat DOUBLE PRECISION NOT NULL, lng DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE curriculum (id INT AUTO_INCREMENT NOT NULL, establishment_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, supp_kw LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_7BE2A7C38565851 (establishment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE establishment (id INT AUTO_INCREMENT NOT NULL, city_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_DBEFB1EE8BAC62AF (city_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE field (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE field_curriculum (field_id INT NOT NULL, curriculum_id INT NOT NULL, INDEX IDX_766ACE7B443707B0 (field_id), INDEX IDX_766ACE7B5AEA4428 (curriculum_id), PRIMARY KEY(field_id, curriculum_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `lead` (id INT AUTO_INCREMENT NOT NULL, person_id INT DEFAULT NULL, city_id INT NOT NULL, curriculum_id INT DEFAULT NULL, civility VARCHAR(255) NOT NULL, languages LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', wishes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', state VARCHAR(255) NOT NULL, activity LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', discr VARCHAR(255) NOT NULL, INDEX IDX_289161CB217BBB47 (person_id), INDEX IDX_289161CB8BAC62AF (city_id), INDEX IDX_289161CB5AEA4428 (curriculum_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proposal_field (proposal_id INT NOT NULL, field_id INT NOT NULL, INDEX IDX_9C028CF9F4792058 (proposal_id), INDEX IDX_9C028CF9443707B0 (field_id), PRIMARY KEY(proposal_id, field_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, phonenumber VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, birthdate DATE NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', discr VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_34DCD176E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sponsorship (id INT AUTO_INCREMENT NOT NULL, sponsor_request_id INT NOT NULL, sponsor_proposal_id INT NOT NULL, administrator_id INT DEFAULT NULL, wishes LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', state VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updates_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_C0F10CD45E98090 (sponsor_request_id), INDEX IDX_C0F10CD4A28D7343 (sponsor_proposal_id), INDEX IDX_C0F10CD44B09E92C (administrator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE curriculum ADD CONSTRAINT FK_7BE2A7C38565851 FOREIGN KEY (establishment_id) REFERENCES establishment (id)');
        $this->addSql('ALTER TABLE establishment ADD CONSTRAINT FK_DBEFB1EE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B443707B0 FOREIGN KEY (field_id) REFERENCES field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE field_curriculum ADD CONSTRAINT FK_766ACE7B5AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE `lead` ADD CONSTRAINT FK_289161CB5AEA4428 FOREIGN KEY (curriculum_id) REFERENCES curriculum (id)');
        $this->addSql('ALTER TABLE proposal_field ADD CONSTRAINT FK_9C028CF9F4792058 FOREIGN KEY (proposal_id) REFERENCES `lead` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE proposal_field ADD CONSTRAINT FK_9C028CF9443707B0 FOREIGN KEY (field_id) REFERENCES field (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsorship ADD CONSTRAINT FK_C0F10CD45E98090 FOREIGN KEY (sponsor_request_id) REFERENCES `lead` (id)');
        $this->addSql('ALTER TABLE sponsorship ADD CONSTRAINT FK_C0F10CD4A28D7343 FOREIGN KEY (sponsor_proposal_id) REFERENCES `lead` (id)');
        $this->addSql('ALTER TABLE sponsorship ADD CONSTRAINT FK_C0F10CD44B09E92C FOREIGN KEY (administrator_id) REFERENCES administrator (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum DROP FOREIGN KEY FK_7BE2A7C38565851');
        $this->addSql('ALTER TABLE establishment DROP FOREIGN KEY FK_DBEFB1EE8BAC62AF');
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B443707B0');
        $this->addSql('ALTER TABLE field_curriculum DROP FOREIGN KEY FK_766ACE7B5AEA4428');
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB217BBB47');
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB8BAC62AF');
        $this->addSql('ALTER TABLE `lead` DROP FOREIGN KEY FK_289161CB5AEA4428');
        $this->addSql('ALTER TABLE proposal_field DROP FOREIGN KEY FK_9C028CF9F4792058');
        $this->addSql('ALTER TABLE proposal_field DROP FOREIGN KEY FK_9C028CF9443707B0');
        $this->addSql('ALTER TABLE sponsorship DROP FOREIGN KEY FK_C0F10CD45E98090');
        $this->addSql('ALTER TABLE sponsorship DROP FOREIGN KEY FK_C0F10CD4A28D7343');
        $this->addSql('ALTER TABLE sponsorship DROP FOREIGN KEY FK_C0F10CD44B09E92C');
        $this->addSql('DROP TABLE administrator');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE curriculum');
        $this->addSql('DROP TABLE establishment');
        $this->addSql('DROP TABLE field');
        $this->addSql('DROP TABLE field_curriculum');
        $this->addSql('DROP TABLE `lead`');
        $this->addSql('DROP TABLE proposal_field');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE sponsorship');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
