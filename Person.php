<html>
<head>
   <title>Person</title>
  <style>
      .table {
      border:solid;
      width:50%;
      margin-bottom:100px;
      }
  </style>
</head>
<body>
    <div class="container" align="center">
        <img  src="Industryyyy.jpg" />
    </div>
  
    <h3 style="color:red ; margin-left:100px">Visitor Information</h3>
    <hr />
    <form action="processVist.php" method="post">
    <table class="table" align="center">
        <tr>
              <td>First name:</td>
              <td><input type="text" placeholder="input firstname" name="firstname" /></td>
        </tr>
         <tr>
              <td>Last name:</td>          
              <td><input type="text" placeholder="input lastname" name="lastname" /></td>
        </tr>
         <tr>
              <td>Gender:</td>          
              <td><select name="gender">
                  <option>Male</option>
                  <option>Female</option>
                  </select></td>
        </tr>
         <tr>
              <td>Telephone:</td>          
              <td><input type="number" placeholder="input number phone" name="telephone" /></td>
        </tr>
         <tr>
              <td>Email:</td>          
              <td><input type="email" placeholder="input email" name="email" /></td>
        </tr>
          <tr>
              <td>You are in :</td>
              <td>
                 
            <fieldset>
    
            <div>
              <input type="radio" id="europe" name="live" value="Europe"  checked/>
              <label for="europe">Europe</label>

              <input type="radio" id="africa" name="live" value="Africa" />
              <label for="africa">Africa</label><br />

              <input type="radio" id="australia" name="live" value="Australia" />
              <label for="australia">Australia</label>
                <input type="radio" id="asia" name="live" value="Asia" />
              <label for="asia">Asia</label>
                <input type="radio" id="america" name="live" value="America" />
              <label for="america">America</label>
            </div>
   
          </fieldset>

          
              </td>
          </tr>
          <tr>
              <td>What are your hobbies:</td>
              <td>
            <input type="checkbox" id="swimming" name="hobbies[]" value="Swimming">
            <label for="swimming"> Swimming</label>
            <input type="checkbox" id="cooking" name="hobbies[]" value="Cooking">
            <label for="cooking"> Cooking</label>
            <input type="checkbox" id="shopping" name="hobbies[]" value="Shopping">
            <label for="shopping">Shopping</label>
            <input type="checkbox" id="sport" name="hobbies[]" value="Sport">
            <label for="sport">Sport</label><br>
            <input type="checkbox" id="dance" name="hobbies[]" value="Dance">
            <label for="dance">Dance</label>
            <input type="checkbox" id="sing" name="hobbies[]" value="Sing">
            <label for="sing">Sing</label>
              </td>
          </tr>
        <tr>
            <td>Decription</td>
            <td><textarea cols="50" rows="10" name="decription"></textarea></td>
        </tr>
        <tr>
           
            <td colspan="2" align="center">
                <button type="submit" value="Register">Register</button>
               <button type="submit" value="View">
        <a href="http://localhost:8098/Assignment/Search.php">Back</a>
    </button>
            </td>
        </tr>

    </table>
        </form>
   
</body>

</html>
