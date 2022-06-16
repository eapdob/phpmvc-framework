<?php

namespace app\core;

/**
 * Class DbModel
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
abstract class DbModel extends Model
{
    abstract public function tableName(): string;

    abstract public function attributes(): array;

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statement = Application::$app->db->prepare("INSERT INTO " . $tableName . "(" . implode(',', $attributes) . ") VALUES(" . implode(',', $params) . ")");
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();
        return true;
    }
}