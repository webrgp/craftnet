<?php

namespace craftnet\oauthserver\records;

use craft\db\ActiveRecord;

class RefreshToken extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the database table the model is associated with.
     *
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%oauthserver_refresh_tokens}}';
    }
}
