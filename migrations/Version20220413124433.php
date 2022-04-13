<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413124433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE user_login ADD user_id_id INT NOT NULL, ADD user INT NOT NULL');
        $this->addSql('ALTER TABLE user_login ADD CONSTRAINT FK_48CA30489D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_48CA30489D86650F ON user_login (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE declaration CHANGE date_de_publication date_de_publication DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE user_login DROP FOREIGN KEY FK_48CA30489D86650F');
        $this->addSql('DROP INDEX IDX_48CA30489D86650F ON user_login');
        $this->addSql('ALTER TABLE user_login DROP user_id_id, DROP user');
    }
}
