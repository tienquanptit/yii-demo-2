<?php

use yii\db\Migration;

class m170411_013334_book extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'cate' => $this->integer()->notNull()->defaultValue(0),
            'slug' => $this->string()->notNull()->unique(),
            'image' => $this->string(),
            'desc' => $this->string(), //mô tả ngắn
            'content' => $this-> text()->notNull(),
            'price' => $this->integer()->notNull()->defaultValue(0), //gia

            'quantity' => $this->integer()->notNull()->defaultValue(0), // so luong
            'author' => $this->string(100), //tacgia
            'page' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),

            'publish_at' => $this->integer()->notNull(), //ngay xuat ban
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%book}}');
    }
}
