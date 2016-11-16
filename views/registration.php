<div class="container">
<?php
    echo heading('Registration Form',1,'class="h1_content"');
    echo "<hr> <center>";
    echo form_open('registration');
    $namelabel = form_label('Name: ','name');
    $nameAttribute = array('name'=>'name', 'class'=>'stuInputField');
    $nameField =  form_input($nameAttribute) . "<br>";
    $this->table->add_row( $namelabel , $nameField);

    $namelabel = form_label('Email: ','email');
    $nameAttribute = array('type'=>'email','name'=>'email', 'class'=>'stuInputField');
    $nameField =  form_input($nameAttribute) . "<br>";
    $this->table->add_row( $namelabel , $nameField);

    $namelabel = form_label('Password: ','name');
    $nameAttribute = array('type'=>'password','name'=>'pass', 'class'=>'stuInputField');
    $nameField =  form_input($nameAttribute) . "<br>";
    $this->table->add_row( $namelabel , $nameField);

    

    $registerBtn = form_submit('submit','Submit','class="btn btn-primary btn-sm"');
    $this->table->add_row($registerBtn);

    //$submitBtn = form_submit('register','Registration','class="registerBtn"');
    //$this->table->add_row($submitBtn);

    echo $this->table->generate();
    echo form_close() . "<br>";
    echo validation_errors();
    echo "</center>";

?>


</div>