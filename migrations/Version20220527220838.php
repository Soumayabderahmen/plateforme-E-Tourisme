<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527220838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pays_offres');
        $this->addSql('ALTER TABLE grille_tarifaire ADD prix_enfant DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pays_offres (pays_id INT NOT NULL, offres_id INT NOT NULL, INDEX IDX_77AC6215A6E44244 (pays_id), INDEX IDX_77AC62156C83CD9F (offres_id), PRIMARY KEY(pays_id, offres_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pays_offres ADD CONSTRAINT FK_77AC6215A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pays_offres ADD CONSTRAINT FK_77AC62156C83CD9F FOREIGN KEY (offres_id) REFERENCES offres (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE grille_tarifaire DROP prix_enfant');
    }
}
