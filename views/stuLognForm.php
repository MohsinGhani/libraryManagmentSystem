<div class="container">
<?php
    echo heading('Student Login',1,'class="h1_content"');
    echo "<hr> <center>";
    echo form_open('verify/login');
    $namelabel = form_label('Student Name: ','stu_name');
    $nameAttribute = array('name'=>'stu_name', 'class'=>'stuInputField');
    $nameField =  form_input($nameAttribute) . "<br>";
    $this->table->add_row( $namelabel , $nameField);

    $passLabel = form_label('Student Password: ','stu_pass');
    $nameAttribute = array('type'=>'password','name'=>'stu_pass', 'class'=>'stuInputField');
    $passField = form_input($nameAttribute);
    $this->table->add_row($passLabel, $passField);

    $submitBtn = form_submit('login','Login','class="btn btn-primary btn-sm"');
    $this->table->add_row($submitBtn);

    //$submitBtn = form_submit('register','Registration','class="registerBtn"');
    //$this->table->add_row($submitBtn);

    echo $this->table->generate();
    echo form_close();
    echo "</center>";

?>


</div>