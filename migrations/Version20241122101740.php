<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241122101740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ALTER mdp TYPE VARCHAR(4096)');
        $this->addSql('ALTER TABLE users ALTER roles TYPE JSON');
        $this->addSql('ALTER TABLE users ALTER is_verified TYPE BOOLEAN');
        $this->addSql('ALTER TABLE users ALTER is_verified SET NOT NULL');
        $this->addSql('ALTER TABLE users ALTER discr TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER discr SET NOT NULL');
        $this->addSql('ALTER TABLE users ALTER discr TYPE VARCHAR(255)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9AA08CB10 ON users (login)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74');
        $this->addSql('DROP INDEX UNIQ_1483A5E9AA08CB10');
        $this->addSql('ALTER TABLE users ALTER mdp TYPE VARCHAR(50)');
        $this->addSql('ALTER TABLE users ALTER roles TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER is_verified TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE users ALTER is_verified DROP NOT NULL');
        $this->addSql('ALTER TABLE users ALTER discr TYPE CHAR(50)');
        $this->addSql('ALTER TABLE users ALTER discr DROP NOT NULL');
        $this->addSql('ALTER TABLE users ALTER discr TYPE CHAR(50)');
    }
}
