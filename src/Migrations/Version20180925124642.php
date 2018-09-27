<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925124642 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D19B6B5FBA');
        $this->addSql('DROP INDEX IDX_723705D19B6B5FBA ON transaction');
        $this->addSql('ALTER TABLE transaction ADD arrival_account_id INT NOT NULL, CHANGE account_id departure_account_id INT NOT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D145C5A72E FOREIGN KEY (departure_account_id) REFERENCES account (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1CCB7EF31 FOREIGN KEY (arrival_account_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_723705D145C5A72E ON transaction (departure_account_id)');
        $this->addSql('CREATE INDEX IDX_723705D1CCB7EF31 ON transaction (arrival_account_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D145C5A72E');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1CCB7EF31');
        $this->addSql('DROP INDEX IDX_723705D145C5A72E ON transaction');
        $this->addSql('DROP INDEX IDX_723705D1CCB7EF31 ON transaction');
        $this->addSql('ALTER TABLE transaction ADD account_id INT NOT NULL, DROP departure_account_id, DROP arrival_account_id');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D19B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_723705D19B6B5FBA ON transaction (account_id)');
    }
}
