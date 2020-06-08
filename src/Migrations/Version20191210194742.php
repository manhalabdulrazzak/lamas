<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191210194742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD name_user VARCHAR(30) NOT NULL, ADD firstname_user VARCHAR(30) NOT NULL, ADD city_user VARCHAR(30) NOT NULL, ADD postal_code_user INT DEFAULT NULL, ADD address_user VARCHAR(75) DEFAULT NULL, ADD birthday_user DATE DEFAULT NULL, ADD phone_user INT DEFAULT NULL, ADD picture_user VARCHAR(100) DEFAULT NULL, ADD picture_user_check TINYINT(1) NOT NULL, ADD rank_user INT NOT NULL, ADD biography_user VARCHAR(255) DEFAULT NULL, ADD story_user VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP name_user, DROP firstname_user, DROP city_user, DROP postal_code_user, DROP address_user, DROP birthday_user, DROP phone_user, DROP picture_user, DROP picture_user_check, DROP rank_user, DROP biography_user, DROP story_user, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
