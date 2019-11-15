<?php

namespace common\modules\telegram\queries;

/**
 * This is the ActiveQuery class for [[\common\modules\telegram\records\TelegramUpdate]].
 *
 * @see \common\modules\telegram\records\TelegramUpdate
 */
class TelegramUpdateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\modules\telegram\records\TelegramUpdate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\modules\telegram\records\TelegramUpdate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}