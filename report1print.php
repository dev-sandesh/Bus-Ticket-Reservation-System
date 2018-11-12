

<html>

<head>

<style>


body{
    background-image: url("1600.jpg");
    }

    ul.a{
      list-style-type: none;
      margin-top: 0;
      padding: 0;
      overflow: hidden;
      background: linear-gradient(#141E30,#243B55 );
      border-radius: 5px;
      opacity: 0.8;

      }

    .a li a{
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 18px 25px;
          text-decoration: none;
          font-size: 110%;
      }
      li a:hover
      {
        background-color: #b4b9c1;
        color: white;
      }

    ul.b
  {   float: left;
      font-size: 110%;
      list-style-type: none;
      margin-left: 10px;
      margin-top: 120px;
      padding: 10px;
      height: 490px;
      width: 200px;
      background: linear-gradient(#141E30,#243B55 );
      border-top-right-radius:  1em;
      border-bottom-right-radius: 1em;
      opacity: 0.9;

  }

 .b li a{
      float:right;
      position: relative;
      color: #edf3ff;
      padding: 15px 16px;
      text-decoration: none;
      font-size: 16px;
      font-family: "Open Sans", arial;
 }
.unibody
 {
   float: left;
   margin-top: 90px;
   background: #FFFFFF;
   margin-left: 80px;
   height: auto;
  overflow: scroll;
   padding: 50px;
   width: 1000px;
   text-align: center;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   border-radius: 0.5em;
  opacity: 0.9;


 }


 table {
   width: 100%;
    font-size: 130%;
   max-width: 1000px;
   height: 320px;
   border-collapse: collapse;
   border: 1px solid #38678f;
   margin: 50px auto;
   background: white;
 }

 th {
   background-color: #034f84;
   height: 54px;
   width: 25%;
   font-weight: lighter;
   text-shadow: 0 1px 0 #38678f;
   color: white;
   border: 1px solid #38678f;
   box-shadow: inset 0px 1px 2px #568ebd;
   transition: all 0.2s;

 }
 tr {
   border-bottom: 1px solid #cccccc;
 }


 #inline
 {
     text-align:center;
 }
 #nav, #unibody
 {
     display:inline-block;
 }

td{
	text-align:center;
}
/* The Modal (background) */

@media print {
    .container {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        opacity: 1;
        line-height: 18px;
    }
}
</style>
</head>


<body onload="window.print()">



<!--



<script="text/JavaScript">

function printDiv(container) {
     var printContents = document.getElementById(container).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

-->

    <div style="width: 1250px;  height: 650px;" class="unibody">
      <div class="container" margin-top: 5px; >
      <?php
      require 'connect.php';
      $date=date("Y/m");
      $arr2=array();
      $arr2=explode("/",$date);
      $month=$arr2[1];
      $monthName = date('F', mktime(0, 0, 0, $month, 10));
        echo "<h3>Transaction Report for the month $monthName </h3>";
      $arr=array('username'=>array(),'dtransaction'=>array(),'via'=>array(),'credit'=>array(),'debit'=>array(),'balance'=>array());
      $sql="select * from `transactions` ";
      $arr1=array();
        $j=0;
        if ($q_run=mysql_query($sql))
        {
          $i=0;
          while($row=mysql_fetch_assoc($q_run))
          {
            $arr['username'][$i]=$row['username'];
            $arr['dtransaction'][$i]=$row['dtransaction'];
            $arr['via'][$i]=$row['via'];
            $arr['credit'][$i]=$row['credit'];
            $arr['debit'][$i]=$row['debit'];
            $arr['balance'][$i++]=$row['balance'];
          }
        ?>
        <table class="HeavyTable">
          <thead>
            <th>username</th>
            <th>dtransaction</th>
            <th>via</th>
            <th>debit</th>
            <th>credit</th>
            <th>balance</th>
          </thead>
          <tbody>
        <?php
        while(mysql_num_rows($q_run)>$j+1)
        {
          $j++;
          $arr1=explode("-",$arr['dtransaction'][$j]);
          $x=$arr1[0]."-".$arr1[1];
          $finish = date("Y/m",strtotime($x));
          if($finish==$date)
            {
              ?>


                  <tr>
                    <td><?php echo $arr['username'][$j];?></td>
                    <td><?php echo $arr['dtransaction'][$j];?></td>
                    <td><?php echo $arr['via'][$j];?></td>
                    <td><?php echo $arr['credit'][$j];?></td>
                    <td><?php echo $arr['debit'][$j];?></td>
                    <td><?php echo $arr['balance'][$j];?></td>
                  </tr>

              <?php
            }
        }

      }
       ?>



















      	   </tbody>
      </table>
          </div>
          <form action="file3.php" method="post">
          <input type="submit" value="back">
          </form>
      </div>


      </body>
      </html>
