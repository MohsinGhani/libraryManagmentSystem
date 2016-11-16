<div class="container">
<?php
    echo heading('Add New Book',1,'class="h1_content"') . "<hr><center>";
    foreach($result as $row)
        {
            echo form_open('staffHome/updateBook');

            $bookLabel   =  form_label('Book: ','book');
            $bookField   =  form_input('book',$row->bookName) . "<br>";
            $this->table->add_row($bookLabel , $bookField);

            echo form_hidden('id',$row->id);

            $authorLabel = form_label('Author: ','author');
            $authorName  = form_input('author',$row->authorName) . "<br>";
            $this->table->add_row($authorLabel, $authorName);

            $quantityLabel  =  form_label('Quantity: ','quantity');
            $quantity       =  form_input('quantity',$row->quantity) . "<br>";
            $this->table->add_row($quantityLabel, $quantity);

            $updateBtn =  form_submit('submit','Update','class="btn btn-primary btn-sm"');
            $this->table->add_row($updateBtn);
            echo $this->table->generate();
            echo form_close();
        }
        echo "</center>";
?>
</div>