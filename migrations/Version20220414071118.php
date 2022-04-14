<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414071118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE users ADD name VARCHAR(200) NOT NULL, ADD firstname VARCHAR(200) NOT NULL, ADD date_naissance DATETIME NOT NULL, ADD lieu_naissance VARCHAR(200) NOT NULL, ADD address VARCHAR(200) NOT NULL, ADD contact VARCHAR(40) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE users DROP name, DROP firstname, DROP date_naissance, DROP lieu_naissance, DROP address, DROP contact');
    }
}
