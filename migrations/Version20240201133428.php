<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201133428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3C2CBBAF3E FOREIGN KEY (id_recette_id) REFERENCES recette (id)');
        // $this->addSql('CREATE INDEX IDX_43B9FE3C2CBBAF3E ON step (id_recette_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3C2CBBAF3E');
        // $this->addSql('DROP INDEX IDX_43B9FE3C2CBBAF3E ON step');
    }
}
