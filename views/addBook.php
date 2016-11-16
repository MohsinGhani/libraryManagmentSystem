<div class="container">
<?php
    echo heading('Add New Book',1,'class="h1_content"');
    echo "<center>";
    echo form_open('staffHome/getBookData');
    $namelabel = form_label('Book Name: ','book_name');
    $nameAttribute = array('name'=>'book_name', 'class'=>'stuInputField');
    $nameField =  form_input($nameAttribute) . "<br>";
    $this->table->add_row( $namelabel , $nameField);

    $authorLabel = form_label('Author Name: ','author_name');
    $attribute = array('name'=>'author_name', 'class'=>'stuInputField');
    $authorField = form_input($attribute);
    $this->table->add_row($authorLabel, $authorField);

    $quantityLabel = form_label('Book Quantity: ','quantity');
    $attribute = array('name'=>'quantity', 'class'=>'stuInputField');
    $quantityField = form_input($attribute);
    $this->table->add_row($quantityLabel, $quantityField);

    $submitBtn = form_submit('submit','Add Now','class="loginBtn"');
    $this->table->add_row($submitBtn);

    //$submitBtn = form_submit('register','Registration','class="registerBtn"');
    //$this->table->add_row($submitBtn);

    echo $this->table->generate();
    echo form_close();
    echo validation_errors();
    echo "</center>";

?>


</div>