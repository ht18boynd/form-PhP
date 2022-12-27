<html>
<head>
    <title>Search </title>
</head>
<body>
    <div class="container" align="center">
        <img  src="Industryyyy.jpg" />
    </div>
    <div style="margin-left:100px">
    <h3 style="color:red ">Search Visiter</h3>
        <h4><a href="http://localhost:8098/Assignment/Person.php">Create new</a></h4>
        <form>
            FirstName: <input name="name" />
            <input type="submit" name="btnSearch" value="Search" />(Type First name Visitor and Click Search button)

    </form>
    </div>
    <hr />
    <table align="center" style="boder:solid 1px ; width:60%">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Gender</th>
                <th>Telephone</th>
                <th>email</th>
                <th>You're in</th>
                <th>Hobbies</th>
                <th>Description</th>
            </tr>

        </thead>
        <tbody>
        <?php

        $link = mysqli_connect('localhost','root','','visiterdb')or die ('Data connect fail!');
        $sql = "select id, firstname,lastname,gender,telephone,email,youarein,hobbies,decription from visiter";

        if (isset($_GET['btnSearch']))
        {
            $name = $_GET['name'];
            $name = '%'.$name.'%';
            $sql .=" where firstname like '$name'";
        }
        $result = mysqli_query($link , $sql);
        if (!$result)
        {
        	die("data access error");
        }
        if (mysqli_num_rows($result) >0)
        {
        	while($row = mysqli_fetch_array($result))
            {
                //-1
        ?>
       
      <tr>
          <td><?php echo $row[0]?></td>
          <td>
              <?php echo $row[1]?>
          </td>
          <td>
              <?php echo $row[2]?>
          </td>
          <td>
              <?php echo $row[3]?>
          </td>
          <td>
              <?php echo $row[4]?>
          </td>
          <td>
              <?php echo $row[5]?>
          </td>
          <td>
              <?php echo $row[6]?>
          </td>
          <td>
              <?php echo $row[7]?>
          </td>
          <td>
              <?php echo $row[8]?>
          </td>


      </tr>
                
        <?php
        // -1
            }
        }else{
        //-2
          ?>
        <tr>
            <td colspan="9">Nodata</td>
        </tr>
        <?php
        //-2
        }
     
        ?>
      
           


        </tbody>
    </table>

</body>
</html>