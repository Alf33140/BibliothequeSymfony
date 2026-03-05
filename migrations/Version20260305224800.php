<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260305224800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD books_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3317DD8AC20 FOREIGN KEY (books_id) REFERENCES emprunt (id)');
        $this->addSql('CREATE INDEX IDX_CBE5A3317DD8AC20 ON book (books_id)');
        $this->addSql('ALTER TABLE user ADD emprunts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64910BD9597 FOREIGN KEY (emprunts_id) REFERENCES emprunt (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64910BD9597 ON user (emprunts_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3317DD8AC20');
        $this->addSql('DROP INDEX IDX_CBE5A3317DD8AC20 ON book');
        $this->addSql('ALTER TABLE book DROP books_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64910BD9597');
        $this->addSql('DROP INDEX IDX_8D93D64910BD9597 ON user');
        $this->addSql('ALTER TABLE user DROP emprunts_id');
    }
}
