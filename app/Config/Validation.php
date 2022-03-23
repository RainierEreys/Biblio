<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $rules = [
            "name" => "required|min_length[3]|max_length[30]",
            "lastname" => "required|min_length[3]|max_length[30]",
            "id_number" => "required|is_natural|min_length[7]|max_length[8]",
            "username" => "required|alpha_numeric|min_length[3]|max_length[20]",
            "email" => "required|valid_email",
            "phone" => "required|is_natural|exact_length[11]",
            "password" => "required|min_length[8]",
            "confirm_password" => "required|matches[password]",
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
