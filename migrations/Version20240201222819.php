<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201222819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE favorites (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_recette_id INT NOT NULL, INDEX IDX_E46960F579F37AE5 (id_user_id), INDEX IDX_E46960F52CBBAF3E (id_recette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE favorites ADD CONSTRAINT FK_E46960F579F37AE5 FOREIGN KEY (id_user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE favorites ADD CONSTRAINT FK_E46960F52CBBAF3E FOREIGN KEY (id_recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE favourites DROP FOREIGN KEY FK_7F07C5012CBBAF3E');
        $this->addSql('ALTER TABLE favourites DROP FOREIGN KEY FK_7F07C50179F37AE5');
        $this->addSql('DROP TABLE favourites');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE favourites (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_recette_id INT NOT NULL, INDEX IDX_7F07C50179F37AE5 (id_user_id), INDEX IDX_7F07C5012CBBAF3E (id_recette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE favourites ADD CONSTRAINT FK_7F07C5012CBBAF3E FOREIGN KEY (id_recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE favourites ADD CONSTRAINT FK_7F07C50179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE favorites DROP FOREIGN KEY FK_E46960F579F37AE5');
        $this->addSql('ALTER TABLE favorites DROP FOREIGN KEY FK_E46960F52CBBAF3E');
        $this->addSql('DROP TABLE favorites');
    }
}
