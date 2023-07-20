<!DOCTYPE HTML>
<html lang="en">
<head>

  <title>Rock and Metal CD's and Dvd's</title>
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
                    <a href="signin.html">Login</a>
                    <a href="signup.html">Sign up</a>
                  </div>
                </div>
              <div class="dropdown">
                <a href="shoppingcart.html"><img style="width: 30%; background-color: white;" src="https://media.discordapp.net/attachments/1081053312775889007/1098802071618199623/cart.png" alt="profile" class="profileIcon"></a>
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
      <option value="classicalcds_dvds.html">Classical</option>
      <option value="popcds_dvds.html">Pop</option>
      <option value="rockcdsanddvds.html">Rock &amp; Metal</option>
      <option value="reggaecds_dvds.html">Reggae</option>
    </select>
    <select onchange="window.location.href=this.value;" style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Records</option>
      <option value="recordplayers.html">Record Players</option>
      <option value="records.html">Vinyls</option>
    </select>
    <select onchange="window.location.href=this.value;" style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Merchandise</option>
      <option value="shirtandhoodies.html">Shirts &amp; Hoodies</option>
      <option value="accessories.html">Accessories</option>
    </select>
    <select onchange="window.location.href=this.value;"  style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Instruments</option>
      <option value="guitars.html">Guitars</option>
      <option value="drums.html">Drums</option>
      <option value="pianos.html">Pianos &amp; Keyboards</option>
    </select>
    <select onchange="window.location.href=this.value;"  style = "background: linear-gradient(grey, lightgrey)">
      <option value="">Specials</option>
      <option value="specials.html">NoteSpecials</option>
    </select>
    <br>
  </p>
 <!-- Rock and Metals CD's and Dvd's -->

 <!-- Rock and Metal Cd's -->
 <form action="shoppingcart.php" method="post">
    <fieldset style="border: transparent;">
    <h2 class="title" id = "RMCD's">Rock and Metal CDs</h2>
        <div class="row" style="display: flex;">
            <div class="col-3">
                <img src="rockcd1.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Pink Floyd- The Dark Side Of the Moon LP</h4>
                <input type="checkbox" name="item[]" value="pink_floyd" <?php if (isset($_POST['item']) && in_array('pink_floyd', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$29.99</p>
            </div>
            <div class="col-3">
                <img src="rockcd2.jpg" alt="" style="width: 75%; height: auto;">
                <h4>The Jimi Hendrix Experience - Electric Ladyland Vinyl LP</h4>
                <input type="checkbox" name="item[]" value="jimi_hndrx" <?php if (isset($_POST['item']) && in_array('jimi_hndrx', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$30.99</p>
            </div>
            <div class="col-3">
                <img src="rockcd3.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Black Sabbath - Master Of Reality Deluxe Edition 2LP 180 Gram Vinyl</h4>
                <input type="checkbox" name="item[]" value="black_sabbath" <?php if (isset($_POST['item']) && in_array('black_sabbath', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $33.00</p>
            </div>
            <div class="col-3">
                <img src="rockcd4.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Metallica - Kill 'Em All Vinyl LP (180 Gram Vinyl)</h4>
                <input type="checkbox" name="item[]" value="metallica" <?php if (isset($_POST['item']) && in_array('metallica', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $48.00</p>
            </div>
        </div>
    </fieldset>


 <!-- Rock and Metal Dvd's -->
 <fieldset style="border: transparent;">
    <h2 class="title" id = "RMDVD's">Rock and Metal DVDs</h2>
        <div class="row" style="display: flex;">
            <div class="col-3">
                <img src="rockdvd1.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Rush: Exit Stage Left</h4>
                <input type="checkbox" name="item[]" value="rush_live" <?php if (isset($_POST['item']) && in_array('rush_live', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$11.99</p>
            </div>
            <div class="col-3">
                <img src="rockdvd2.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Stevie Ray Vaughan & Double Trouble - Live at the El Mocambo 1983</h4>
                <input type="checkbox" name="item[]" value="steve_dt_live" <?php if (isset($_POST['item']) && in_array('steve_dt_live', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price:$16.00</p>
            </div>
            <div class="col-3">
                <img src="rockdvd3.jpg" alt="" style="width: 75%; height: auto;">
                <h4>The Doors: Live at the Bowl '68</h4>
                <input type="checkbox" name="item[]" value="thedoors_live" <?php if (isset($_POST['item']) && in_array('thedoors_live', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $12.00</p>
            </div>
            <div class="col-3">
                <img src="rockdvd4.jpg" alt="" style="width: 75%; height: auto;">
                <h4>Led Zeppelin: The Song Remains the Same</h4>
                <input type="checkbox" name="item[]" value="led_zeppelin" <?php if (isset($_POST['item']) && in_array('led_zeppelin', $_POST['item'])) echo 'checked'; ?>>
                <p class="red">Price: $28.00</p>
            </div>
        </div>
        <input type="submit" value="Add to Cart">
    </fieldset>
</form>

<div class="footer">
  <footer>
    <div class="footer-links">
      <a href="#">Contact Us</a>
      <a href="faq.html">FAQ</a>
    </div>
    </footer> 
</div>           

   </body>
   </html>
