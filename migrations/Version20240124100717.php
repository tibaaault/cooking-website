<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240124100717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette ADD img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE recette_ingredient MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON recette_ingredient');
        $this->addSql('ALTER TABLE recette_ingredient DROP id');
        $this->addSql('ALTER TABLE recette_ingredient ADD PRIMARY KEY (recette_id, ingredient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette DROP img');
        $this->addSql('ALTER TABLE recette_ingredient ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
