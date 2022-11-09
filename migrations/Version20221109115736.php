<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221109115736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE subject_category (subject_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_3E3159A923EDC87 (subject_id), INDEX IDX_3E3159A912469DE2 (category_id), PRIMARY KEY(subject_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE subject_category ADD CONSTRAINT FK_3E3159A923EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_category ADD CONSTRAINT FK_3E3159A912469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_subject DROP FOREIGN KEY FK_3C167E0412469DE2');
        $this->addSql('ALTER TABLE category_subject DROP FOREIGN KEY FK_3C167E0423EDC87');
        $this->addSql('DROP TABLE category_subject');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_subject (category_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_3C167E0412469DE2 (category_id), INDEX IDX_3C167E0423EDC87 (subject_id), PRIMARY KEY(category_id, subject_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE category_subject ADD CONSTRAINT FK_3C167E0412469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_subject ADD CONSTRAINT FK_3C167E0423EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_category DROP FOREIGN KEY FK_3E3159A923EDC87');
        $this->addSql('ALTER TABLE subject_category DROP FOREIGN KEY FK_3E3159A912469DE2');
        $this->addSql('DROP TABLE subject_category');
    }
}
