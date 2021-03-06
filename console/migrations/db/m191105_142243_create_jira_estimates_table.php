<?php

use console\components\BaseDbMigration;

/**
 * Handles the creation of table `{{%jira_estimates}}`.
 */
class m191105_142243_create_jira_estimates_table extends BaseDbMigration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jira_estimates}}', [
            'id'         => $this->primaryKey(),
            'value'      => $this->string(64)->unique()->notNull(),
            'name'       => $this->string(64)->unique()->notNull(),
            'descr'      => $this->string(255)->null(),
            'order_by'   => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'enabled'    => $this->tinyInteger(1)->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jira_estimates}}');
    }
}
