<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191210233601 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, name_event VARCHAR(30) NOT NULL, date_event DATE NOT NULL, start_hour_event TIME NOT NULL, end_hour_event TIME NOT NULL, location_event VARCHAR(75) NOT NULL, maxplayer_event INT NOT NULL, subplayer_event INT NOT NULL, min_age_event INT DEFAULT NULL, max_age_event INT DEFAULT NULL, check_avg_age_event TINYINT(1) NOT NULL, description_event VARCHAR(255) DEFAULT NULL, first_name_leader_event VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE postal_code_user postal_code_user INT DEFAULT NULL, CHANGE address_user address_user VARCHAR(75) DEFAULT NULL, CHANGE birthday_user birthday_user DATE DEFAULT NULL, CHANGE phone_user phone_user INT DEFAULT NULL, CHANGE picture_user picture_user VARCHAR(100) DEFAULT NULL, CHANGE biography_user biography_user VARCHAR(255) DEFAULT NULL, CHANGE story_user story_user VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE event');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE postal_code_user postal_code_user INT DEFAULT NULL, CHANGE address_user address_user VARCHAR(75) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE birthday_user birthday_user DATE DEFAULT \'current_timestamp()\' NOT NULL, CHANGE phone_user phone_user INT DEFAULT NULL, CHANGE picture_user picture_user VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE biography_user biography_user VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE story_user story_user VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
