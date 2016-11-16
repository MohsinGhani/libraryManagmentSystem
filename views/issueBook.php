<div class="container">
<?php
    echo heading('Issue Book',1,'class="h1_content"') . "<hr><center>";
    foreach($result as $row)
        {
            echo form_open('books/issueBookData');

            echo form_hidden('id',$row->id);
            echo form_hidden('book',$row->bookName);
            echo form_hidden('author',$row->authorName);
            echo form_hidden('quantity',$row->quantity - 1);
 
            $nameLabel = form_label('Your Name: ','name');
            $studentName  = form_input('name') . "<br>";
            $this->table->add_row($nameLabel, $studentName);

            $contactLabel = form_label('Contact Number: ','contact');
            $contact  = form_input('contact') . "<br>";
            $this->table->add_row($contactLabel, $contact);

            $returnLabel = form_label('Return Date: ','return');
            $return  = form_input('return') . "<br>";
            $this->table->add_row($returnLabel, $return);

            //$quantityLabel  =  form_label('Quantity: ','quantity');
            //$quantity =   $row->quantity;
            //$this->table->add_row($quantityLabel, $quantity);

            $updateBtn =  form_submit('submit','Submit','class="btn btn-primary btn-sm"');
            $this->table->add_row($updateBtn);
            echo $this->table->generate();
            echo form_close();
        }
        echo "<br>" . validation_errors();
        echo "</center>";
?>
</div>