<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200308100431 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Scheduling CHANGE period period INT NOT NULL COMMENT \'\'\'none\'\',\'\'daily\'\',\'\'weekly\'\',\'\'monthly\'\' - 1,2,3,4\', CHANGE parametr parametr INT NOT NULL COMMENT \'\'\'power\'\',\'\'brightness\'\' - 1,2\', CHANGE value value INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Scheduling CHANGE period period INT DEFAULT 0 NOT NULL COMMENT \'\'\'none\'\',\'\'daily\'\',\'\'weekly\'\',\'\'monthly\'\' - 1,2,3,4\', CHANGE parametr parametr INT DEFAULT 0 NOT NULL COMMENT \'\'\'power\'\',\'\'brightness\'\' - 1,2\', CHANGE value value INT DEFAULT 0 NOT NULL');
    }
}
