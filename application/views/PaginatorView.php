<<<<<<< HEAD
<div style ="text-align: center" >
<?php foreach ($data2 as $val){
        echo  " ".$val;
      }
?>
=======


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
>>>>>>> 6428d6e0b38d1e5f99710c52d0a8a741d5a0e5c2
</div>
