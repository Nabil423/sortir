<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230913081609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE campus ADD sortie_id INT NOT NULL');
        $this->addSql('ALTER TABLE campus ADD CONSTRAINT FK_9D096811CC72D953 FOREIGN KEY (sortie_id) REFERENCES sortie (id)');
        $this->addSql('CREATE INDEX IDX_9D096811CC72D953 ON campus (sortie_id)');
        $this->addSql('ALTER TABLE user ADD users_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64967B3B43D FOREIGN KEY (users_id) REFERENCES campus (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64967B3B43D ON user (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE campus DROP FOREIGN KEY FK_9D096811CC72D953');
        $this->addSql('DROP INDEX IDX_9D096811CC72D953 ON campus');
        $this->addSql('ALTER TABLE campus DROP sortie_id');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64967B3B43D');
        $this->addSql('DROP INDEX IDX_8D93D64967B3B43D ON `user`');
        $this->addSql('ALTER TABLE `user` DROP users_id');
    }
}
