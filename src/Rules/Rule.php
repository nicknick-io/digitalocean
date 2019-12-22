<?php
namespace NickNickIO\Digitalocean\Rules;

class Rule
{

    /**
     * Array of errors.
     * @var array
     */
    public $errors = [];

    /**
     * Rule properties.
     * @var array
     */
    public $rules = [];

    /**
     * Rule constructor.
     * @param array $properties
     * @throws \Exception
     */
    public function __construct(array $properties = [])
    {
        $this->check($properties);

        if (count($this->errors) > 0) {
            throw new \Exception(get_called_class() . ' : ' . $this->errors[0]);
        }
    }

    /**
     * @param array $properties
     */
    private function check(array $properties = [])
    {
        foreach($this->rules as $field => $rules)
        {
            $rules = explode('|', $rules);
            foreach($rules as $rule) {
                if (in_array($field, array_keys($properties))) {
                    $this->rule($properties, $field, $rule);
                }
            }
        }
    }

    private function rule($properties, $field, $rule)
    {
        $exploded_rule = explode(':', $rule);
        $rule = $exploded_rule[0];

        switch ($rule)
        {
            case 'when':

                $values = explode(',', $exploded_rule[1]);
                $parent_field = array_shift($values);

                $parent_value = $properties[$parent_field];
                dd($parent_value, $values, $field, array_keys($properties));
                if (in_array($parent_value, $values) && !in_array($field, array_keys($properties))) {
                    $this->errors[] = "{$field} is required when {$parent_field} has the values " . implode(', ', $values);
                }
                break;


            case 'type':

                $values = explode(',', $exploded_rule[1]);

                if (is_array($values) && count($values) == 1) {
                    $values = $values[0];
                }

                if (gettype($properties[$field]) != $values) {
                    $this->errors[] = "{$field} must be of type " . implode('or ', $values) . ", " . gettype($properties[$field]) . " given.";
                }
                break;

            case 'nullable':
                break;
        }
    }

}