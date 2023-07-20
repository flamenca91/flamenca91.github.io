<!DOCTYPE HTML>
<html lang="en">
<head>

  <title>Classical CD's and Dvd's</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.addEventListener('submit', function() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
      var formData = new FormData();

      checkboxes.forEach(function(checkbox) {
        formData.append('item[]', checkbox.value);
      });

      fetch('shoppingcart.php', {
        method: 'POST',
        body: formData
      })
      .then(function(response) {
        // Handle the response if needed
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
    });
  });
</script>

<body>
<!-- header with image link -->
<div style="background-color: #00222A;">
    <table>
      <tr>
        <td>
          <a href="index.php"><img src="https://cdn.discordapp.com/attachments/1081053312775889007/1086413142743068802/cropped.jpg" alt="image description" width="450" height="200"></a>
        </td>
        <td style="text-align: right; color: grey">
          333 S Twin Oaks Valley Rd, San Marcos, CA 92096<br>
          <a href="tel:+18583828890"><span style="color: lightblue;">+1 (858) 382-8890</span></a>
        </td>
      </tr>
    </table>
  </div>
    
  <!-- search bar and navigation links -->
  <table style = "background-color: white">
    <tr>
        <td><input style="margin-left: 8px;" type = "text" id = "searchbar"><input type = "submit" value = "Search" style ="margin-left: 6px; height: 34px; width: 75px; border-color: black; border-radius: 5px; border-width: 1px; font-size: 20px; background-color: lightgrey"></td>
        <td>
            <span style="display: flex; justify-content: right;">
                <div class="dropdown">
                  <a href="#"><img style="width: 29%; background-color: white; " src="https://media.discordapp.net/attachments/1081053312775889007/1098800015897530368/profile.png" alt="profile" class="profileIcon"></a>
                  <div class="dropdown-content">
                    <a href="account.html">Account</a>
                    <a href="signin.php">Login</a>
                    <a href="signup.php">Sign up</a>
                  </div>
                </div>
                <div class="dropdown">
                <a href="shoppingcart.php"><img style="width: 30%; background-color: white;" src="https://media.discordapp.net/attachments/1081053312775889007/1098802071618199623/cart.png" alt="profile" class="profileIcon"></a>
              </div>
            <img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2016/05/instagram-logo.png" alt="Instagram logo" height= "100px" width = "98px" style="height: 30px; margin-right: 50px; margin-left: -50px;"/>
            <img src="https://img.freepik.com/premium-vector/blue-social-media-logo_197792-1759.jpg?w=2000" alt="fb logo" height = "20px" width = "48px" style="height: 30px; margin-left: -10px; margin-right: 10px;">
          </span>
          </td>
      </tr>   
    </table>
    
   <!-- navigation menu with select elements -->
  <p style="background: linear-gradient(#00222A, red); text-align: left; margin: 0; line-height: 2.5">
    <select onchange="window.location.href=this.value"; style = "background: linear-gradient(grey, lightgrey)">
      <option value="">CDs/DVDs</option>
      <option value="classicalcds_dvds.php">Classical</option>
      <option value="popcds_dvds.php">Pop</option>
      <option value="rockcdsanddvds.php">Rock &amp; Metal</option>
      <option value="reggaecds_dvds.php">Reggae</option>
    </select>
    <select onchange="window.location.href=this.value;" style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Records</option>
      <option value="recordplayers.php">Record Players</option>
      <option value="records.php">Vinyls</option>
    </select>
    <select onchange="window.location.href=this.value;" style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Merchandise</option>
      <option value="shirtandhoodies.php">Shirts &amp; Hoodies</option>
      <option value="accessories.php">Accessories</option>
    </select>
    <select onchange="window.location.href=this.value;"  style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Instruments</option>
      <option value="guitars.php">Guitars</option>
      <option value="drums.php">Drums</option>
      <option value="pianos.php">Pianos &amp; Keyboards</option>
    </select>
    <select onchange="window.location.href=this.value;"  style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Specials</option>
      <option value="specials.php">NoteSpecials</option>
    </select>
    <br>
  </p>
  <!-- Classical Cd's and Dvd's -->

  <!-- Classical Cd's -->
  <form action="shoppingcart.php" method="post">
    <fieldset style="border: transparent;">
    <h2 class="title" id = "CCd's">Classical CDs</h2>
        <div class="row" style="display: flex;">
            <div class="col-3">
                <img src="classicalcd1.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Alliance Beethoven: Symphony No 5</h4>
                <input type="checkbox" name="item[]" value="alliance_beethoven" <?php if (isset($_POST['item']) && in_array('alliance_beethoven', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $25.00</p>
            </div>
            <div class="col-3">
                <img src="classicalcd2.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Alliance Igor Stravinsky - Stravinsky Conducts Stravinsky: Firebird</h4>
                <input type="checkbox" name="item[]" value="alliance_stravinsky" <?php if (isset($_POST['item']) && in_array('alliance_stravinsky', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $22.00</p>
            </div>
            <div class="col-3">
                <img src="classicalcd3.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Alliance Maria Callas - La Traviata (1953 Studio Recording)</h4>
                <input type="checkbox" name="item[]" value="alliance_maria_callas" <?php if (isset($_POST['item']) && in_array('alliance_maria_callas', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $45.00</p>
            </div>
            <div class="col-3">
                <img src="classicalcd4.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Alliance DeBussy - Debussy</h4>
                <input type="checkbox" name="item[]" value="alliance_debussy" <?php if (isset($_POST['item']) && in_array('alliance_debussy', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $20.00</p>
            </div>
        </div>
    </fieldset>

<!-- Classical Dvd's -->
    <fieldset style="border: transparent;">
      <h2 class="title" id = "CDVD's">Classical DVDs</h2>
        <div class="row" style="display: flex;">
            <div class="col-3">
                <img src="classicaldvd1.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Discovering Masterpieces of Classical Music: Mozart's Symphony No. 41</h4>
                <input type="checkbox" name="item[]" value="mozart_symphony" <?php if (isset($_POST['item']) && in_array('mozart_symphony', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$9.99</p>
            </div>
            <div class="col-3">
                <img src="classicaldvd2.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Bond - Live at the Royal Albert Hall</h4>
                <input type="checkbox" name="item[]" value="bond_live" <?php if (isset($_POST['item']) && in_array('bond_live', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$30.00</p>
            </div>
            <div class="col-3">
                <img src="classicaldvd3.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Sarah Brightman - La Luna (Live in Concert)</h4>
                <input type="checkbox" name="item[]" value="sarah_live" <?php if (isset($_POST['item']) && in_array('sarah_live', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$24.00</p>
            </div>
            <div class="col-3">
                <img src="classicaldvd4.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Andre Rieu: A Celebration of Music</h4>
                <input type="checkbox" name="item[]" value="andre_celeb" <?php if (isset($_POST['item']) && in_array('andre_celeb', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$19.99</p>
            </div>
        </div>
        <input type="submit" value="Add to Cart">
    </fieldset>
</form>
    <br>
<div class="footer">
  <footer>
    <div class="footer-links">
      <a href="#">Contact Us</a>
      <a href="faq.php">FAQ</a>
    </div>
    </footer> 
</div>      
   </body>
   </html>
