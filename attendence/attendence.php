<html>
  <head>
    <meta charset="utf-8">
    <link href="..\css\allentry.css" rel="stylesheet" type="text/css">
    <title>Attendence Detail</title>
  </head>
  <body>
    <div id='admin'>
    <abb title="Go to homepage"><a class='faculty' href="../index.php">Homepage</a></abb>
    </div>
    <?php
    include("../dbconnection.php");
    $id=$_REQUEST['sid'];
    $qre='SELECT * FROM `student`';
   $run=mysqli_query($con,$qre);
   $rno=0;
   $count=0;
   $present=0;
   if($run==true)
   {
     while($data=mysqli_fetch_assoc($run))
     {
       if($id==$data['id'])
       {
        ?>
        <h1 align="Center">Name : <?php echo $data['name'];
        ?><br><br> Rollno : <?php echo $data['rollno']; ?> </h1><?php
         $rno==1;
       }
     }
     $qre2='SELECT * FROM `attendence`';
    $run2=mysqli_query($con,$qre2);
    if($run2==true)
    {
      ?>
    <div id='table'>
        <table>
        <tr>
         <th>Date</th>
         <th>Detail</th>
        </tr>

      <?php
      while($data2=mysqli_fetch_assoc($run2))
      {
        if($id==$data2['sid'])
        {
          $count++;
        ?>
        <tr>
             <th><?php print_r($data2['date']); ?></th>
             <?php
             if($data2['pa']==1)
             {
                $present++;
             ?>
             <th><?php echo "Present"?></th>
            <?php
            }
            ?>
            <?php
            if($data2['pa']==0)
            {

            ?>
            <th><?php echo "absent"?></th>
            <?php
            }
            ?>
            </tr>
        <?php
        }
      }
     ?><h1 align="center">Attendence : <?php echo($present/$count*100);?>%</h1><?php
    }
   }
     ?>
  </body>
</html>
