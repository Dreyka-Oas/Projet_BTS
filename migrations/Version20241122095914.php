<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241122095914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE users ADD is_verified BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE users ALTER mdp TYPE VARCHAR(255)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9AA08CB10 ON users (login)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74');
        $this->addSql('DROP INDEX UNIQ_1483A5E9AA08CB10');
        $this->addSql('ALTER TABLE users DROP roles');
        $this->addSql('ALTER TABLE users DROP is_verified');
        $this->addSql('ALTER TABLE users ALTER mdp TYPE VARCHAR(15)');
    }
}