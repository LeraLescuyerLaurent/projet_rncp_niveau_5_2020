<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200523210628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact CHANGE lu lu TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AE85F12B8');
        $this->addSql('DROP INDEX IDX_5F9E962AE85F12B8 ON comments');
        $this->addSql('ALTER TABLE comments ADD post_id_id INT DEFAULT NULL, DROP post_id');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AE85F12B8 FOREIGN KEY (post_id_id) REFERENCES posts (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962AE85F12B8 ON comments (post_id_id)');
        $this->addSql('ALTER TABLE posts CHANGE online online TINYINT(1) DEFAULT NULL, CHANGE slider slider TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AE85F12B8');
        $this->addSql('DROP INDEX IDX_5F9E962AE85F12B8 ON comments');
        $this->addSql('ALTER TABLE comments ADD post_id INT DEFAULT NULL, DROP post_id_id');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AE85F12B8 FOREIGN KEY (post_id) REFERENCES posts (id)');
        $this->addSql('CREATE INDEX IDX_5F9E962AE85F12B8 ON comments (post_id)');
        $this->addSql('ALTER TABLE contact CHANGE lu lu TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE posts CHANGE online online TINYINT(1) DEFAULT \'NULL\', CHANGE slider slider TINYINT(1) DEFAULT \'NULL\'');
    }
}
