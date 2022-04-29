<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220429061930 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE photo_declaration (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_7434361E4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE photo_declaration ADD CONSTRAINT FK_7434361E4B89032C FOREIGN KEY (post_id) REFERENCES declaration (id)');
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE photo_declaration');
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
