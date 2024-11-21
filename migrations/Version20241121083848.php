<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241121083848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE define ADD level_id INT NOT NULL');
        $this->addSql('ALTER TABLE define ADD activity_id INT NOT NULL');
        $this->addSql('ALTER TABLE define ADD CONSTRAINT FK_EC989F5C5FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE define ADD CONSTRAINT FK_EC989F5C81C06096 FOREIGN KEY (activity_id) REFERENCES activity (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_EC989F5C5FB14BA7 ON define (level_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EC989F5C81C06096 ON define (activity_id)');
        $this->addSql('ALTER TABLE users ADD discr VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE define DROP CONSTRAINT FK_EC989F5C5FB14BA7');
        $this->addSql('ALTER TABLE define DROP CONSTRAINT FK_EC989F5C81C06096');
        $this->addSql('DROP INDEX IDX_EC989F5C5FB14BA7');
        $this->addSql('DROP INDEX UNIQ_EC989F5C81C06096');
        $this->addSql('ALTER TABLE define DROP level_id');
        $this->addSql('ALTER TABLE define DROP activity_id');
        $this->addSql('ALTER TABLE users DROP discr');
    }
}
