<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919190501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sortie_user DROP FOREIGN KEY FK_8A67684AA76ED395');
        $this->addSql('ALTER TABLE sortie_user DROP FOREIGN KEY FK_8A67684ACC72D953');
        $this->addSql('DROP TABLE sortie_user');
        $this->addSql('ALTER TABLE sortie DROP FOREIGN KEY FK_3C3FD3F26AB213CC');
        $this->addSql('ALTER TABLE sortie DROP FOREIGN KEY FK_3C3FD3F2D5E86FF');
        $this->addSql('ALTER TABLE sortie DROP FOREIGN KEY FK_3C3FD3F2D936B2FA');
        $this->addSql('DROP INDEX IDX_3C3FD3F2D5E86FF ON sortie');
        $this->addSql('DROP INDEX IDX_3C3FD3F26AB213CC ON sortie');
        $this->addSql('DROP INDEX IDX_3C3FD3F2D936B2FA ON sortie');
        $this->addSql('ALTER TABLE sortie ADD duree INT NOT NULL, ADD nomb_inscrip_max INT NOT NULL, ADD info_sortie VARCHAR(255) NOT NULL, DROP etat_id, DROP lieu_id, DROP organisateur_id, DROP durée, DROP infos_sortie, DROP état');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64967B3B43D');
        $this->addSql('DROP INDEX IDX_8D93D64967B3B43D ON user');
        $this->addSql('ALTER TABLE user ADD prénom VARCHAR(255) NOT NULL, DROP users_id, DROP pseudo, DROP prenom, CHANGE telephone telephone INT NOT NULL, CHANGE `admin` administrateur TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sortie_user (sortie_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_8A67684ACC72D953 (sortie_id), INDEX IDX_8A67684AA76ED395 (user_id), PRIMARY KEY(sortie_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE sortie_user ADD CONSTRAINT FK_8A67684AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sortie_user ADD CONSTRAINT FK_8A67684ACC72D953 FOREIGN KEY (sortie_id) REFERENCES sortie (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sortie ADD etat_id INT NOT NULL, ADD lieu_id INT NOT NULL, ADD organisateur_id INT NOT NULL, ADD infos_sortie VARCHAR(255) NOT NULL, ADD état VARCHAR(255) NOT NULL, DROP duree, DROP nomb_inscrip_max, CHANGE info_sortie durée VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE sortie ADD CONSTRAINT FK_3C3FD3F26AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sortie ADD CONSTRAINT FK_3C3FD3F2D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE sortie ADD CONSTRAINT FK_3C3FD3F2D936B2FA FOREIGN KEY (organisateur_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_3C3FD3F2D5E86FF ON sortie (etat_id)');
        $this->addSql('CREATE INDEX IDX_3C3FD3F26AB213CC ON sortie (lieu_id)');
        $this->addSql('CREATE INDEX IDX_3C3FD3F2D936B2FA ON sortie (organisateur_id)');
        $this->addSql('ALTER TABLE user ADD users_id INT NOT NULL, ADD prenom VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE prénom pseudo VARCHAR(255) NOT NULL, CHANGE administrateur `admin` TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64967B3B43D FOREIGN KEY (users_id) REFERENCES campus (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D93D64967B3B43D ON user (users_id)');
    }
}
