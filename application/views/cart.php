<table class="table table-hover">
<tr >

          <th>id</th>
<th>Book Name</th>
<th>Book Price</th>
<th>Book Desc</th>
<th>Book Image</th>
<th>action</th>
</tr>
<?php

foreach($book as $row)
{?>
<tr>
<td><?=$row->id?></td>
<td><?=$row->BookName?></td>
<td><?=$row->BookPrice?></td>
<td><?=$row->BookDesc?></td>
<td><a href="<?=base_url()?>uploads/<?=$row->BookImage ?>"><img width="40" src="<?=base_url()?>./uploads/<?=$row->BookImage?>"></a></td>

<?PHP
}
?>