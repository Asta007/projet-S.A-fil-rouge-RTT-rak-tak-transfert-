<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190803122254 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, prestataire_id INT NOT NULL, compte_associe_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, cni INT NOT NULL, status VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649BE3DB2B7 (prestataire_id), UNIQUE INDEX UNIQ_8D93D649C0EFE32 (compte_associe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestataires (id INT AUTO_INCREMENT NOT NULL, matricule VARCHAR(255) NOT NULL, denomination VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, contacte INT NOT NULL, email VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, prestataire_id INT NOT NULL, intitule VARCHAR(255) NOT NULL, solde INT NOT NULL, INDEX IDX_CFF65260BE3DB2B7 (prestataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transactions (id INT AUTO_INCREMENT NOT NULL, caissier_id INT NOT NULL, date DATE NOT NULL, type_de_transaction VARCHAR(255) NOT NULL, montant INT NOT NULL, INDEX IDX_EAA81A4CB514973B (caissier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataires (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C0EFE32 FOREIGN KEY (compte_associe_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataires (id)');
        $this->addSql('ALTER TABLE transactions ADD CONSTRAINT FK_EAA81A4CB514973B FOREIGN KEY (caissier_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transactions DROP FOREIGN KEY FK_EAA81A4CB514973B');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649BE3DB2B7');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260BE3DB2B7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C0EFE32');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE prestataires');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE transactions');
    }
}
