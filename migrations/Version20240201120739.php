<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201120739 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE ingredient_recette DROP FOREIGN KEY FK_488C68562CBBAF3E');
        // $this->addSql('ALTER TABLE ingredient_recette DROP FOREIGN KEY FK_488C68562D1731E9');
        // $this->addSql('DROP INDEX IDX_488C68562D1731E9 ON ingredient_recette');
        // $this->addSql('DROP INDEX IDX_488C68562CBBAF3E ON ingredient_recette');
        // // $this->addSql('ALTER TABLE ingredient_recette DROP id_recette_id, DROP id_ingredient_id');
        // $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3C2CBBAF3E');
        // $this->addSql('DROP INDEX IDX_43B9FE3C2CBBAF3E ON step');
        // $this->addSql('ALTER TABLE step DROP id_recette_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient_recette ADD id_recette_id INT NOT NULL, ADD id_ingredient_id INT NOT NULL');
        $this->addSql('ALTER TABLE ingredient_recette ADD CONSTRAINT FK_488C68562CBBAF3E FOREIGN KEY (id_recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE ingredient_recette ADD CONSTRAINT FK_488C68562D1731E9 FOREIGN KEY (id_ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('CREATE INDEX IDX_488C68562D1731E9 ON ingredient_recette (id_ingredient_id)');
        $this->addSql('CREATE INDEX IDX_488C68562CBBAF3E ON ingredient_recette (id_recette_id)');
        $this->addSql('ALTER TABLE step ADD id_recette_id INT NOT NULL');
        $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3C2CBBAF3E FOREIGN KEY (id_recette_id) REFERENCES recette (id)');
        $this->addSql('CREATE INDEX IDX_43B9FE3C2CBBAF3E ON step (id_recette_id)');
    }
}
