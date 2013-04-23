

<div style ="text-align: center" >
<a href = '<?php echo $data2['<<']; ?>' > << </a>
<a href = '<?php echo $data2['<']; ?>' > < </a>

<?php if (array_key_exists('...1', $data2)){?>
<a>...</a>
<?php } ?>

<?php

 $data3 = array_keys ($data2);
  foreach($data3 as $val){
      if (is_int($val)){ ?> 
         <a href = '<?php echo $data2[$val]; ?>' > <?php echo $val; ?> </a>
    <?php  }
  }
?>

<?php if (array_key_exists('...2', $data2)){?>
<a>...</a>
<?php } ?>

<a href = '<?php echo $data2['>']; ?>' > > </a>
<a href = '<?php echo $data2['>>']; ?>' > >> </a>
</div>
