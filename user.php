<?php
    use Rakit\Validation\Validator;

    $data = $_SERVER["REQUEST_METHOD"] === "POST"
        ? $_POST
        : null;

    $rules = [
        "first_name" => "required|min:2|max:15",
        "last_name" => "required|min:2|max:15",
        "email" => "email",
        "password" => "required|min:8",
        "password_confirmation" => "required|same:password"
    ];
    
    $errorMessages = [];
    $formSubmittedSuccessfully = false;

    if ($data) {
        $validator = new Validator();

        $validation = $validator->make(
            inputs: $data, rules: $rules
        );

        $validation->validate();

        if ( $validation->fails() ) {
            $errorMessages = $validation->errors()->firstOfAll();
        } else {
            $formSubmittedSuccessfully = true;
        }

        
    }

    



    

    