<div class="container">
<?php
    echo anchor('registration','Add Student');
    echo heading('Students List',1,'class="h1_content"');
    // $template = array(
    //     'table_open' => '<table class="stuListTable" align="center">',
    // );
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
);
    $this->table->set_template($template);
    $this->table->set_heading('S.no', 'Name', 'Email', 'Password');
    
    $i=1;
    foreach($result as $row)
    {   
        $id   = $row['id'];
        $name = $row['stuName'];
        $email= $row['stuEmail'];
        $pass = $row['stuPass'];
        $this->table->add_row($i, $name, $email, $pass);
        $i++;
        
    }
    echo $this->table->generate();
?>
</div>