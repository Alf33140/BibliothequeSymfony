<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260306100633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A3317DD8AC20 FOREIGN KEY (books_id) REFERENCES emprunt (id)');
        $this->addSql('ALTER TABLE emprunt ADD book_id_id INT DEFAULT NULL, ADD user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D771868B2E FOREIGN KEY (book_id_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D79D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_364071D771868B2E ON emprunt (book_id_id)');
        $this->addSql('CREATE INDEX IDX_364071D79D86650F ON emprunt (user_id_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64910BD9597 FOREIGN KEY (emprunts_id) REFERENCES emprunt (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A3317DD8AC20');
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D771868B2E');
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D79D86650F');
        $this->addSql('DROP INDEX IDX_364071D771868B2E ON emprunt');
        $this->addSql('DROP INDEX IDX_364071D79D86650F ON emprunt');
        $this->addSql('ALTER TABLE emprunt DROP book_id_id, DROP user_id_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64910BD9597');
    }
}
