<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" href="./styles/product_style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>teleprint.lk</title>
</head>
<body>
    <div class="row">
        <div class="col" id="image">
            <div class="container">
            <img src="../images/pc8.jpg" width="100%" >
        </div>
        
        </div>
        <div class="col" id="details">
           <div class="container">
            <h1>Hp 15S Du3022Tu – i3</h1>
            <ul>
                <li>Intel Core i3 11th Gen</li>
                <li>4GB Ram</li>
                <li>1TB Hard Drive</li>
                <li>15.6″ FHD</li>
                <li>Windows 10 Home</li>
                <li>Office Home & Studen</li>
            </ul>
           
        </div>
        <div class="container" id="price" >
            <h1>Rs. 200,000.00</h1>
          <a href=""><i class="material-icons" style="font-size:21px;color:white;display: flex;justify-content: center;" >favorite</i>Add to Favorites</a>

        </div>
        </div>
        
        
    </div>
    <div class="row1">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'desc')" id="defaultOpen">Description</button>
        <button class="tablinks" onclick="openTab(event, 'specs')">Specification</button>
          
          
      
      </div>
      
      <div id="desc" class="tabcontent">
        <img src="../images/desc.jpg" width="80%">
      </div>
      
      <div id="specs" class="tabcontent">
        <h5><b>Processor</b></h5>
        <h5>Intel Core i5-11300H</h5><br>
        <h5><b>Ram</b></h5>
        <h5>8GB DDR4 Ram</h5><br>
        <h5><b>Harddisk</b></h5>
        <h5>1TB Hard Disk + 256GB SSD NVME</h5><br>
        <h5><b>Display</b></h5>
        <h5>15.6″ FHD (1920 x 1080) 144Hz IPS Pane</h5><br>
        <h5><b>Keyboard</b></h5>
        <h5>4-Zone RGB Keyboard</h5><br>
        <h5><b>Operating System</b></h5>
        <h5>Windows 10 64Bit Pre-installed</h5><br>
        <h5><b>Weight</b></h5>
        <h5>2.2KG, 55Whrs  </h5><br>
        <h5><b>Free</b></h5>
        <h5>Gaming Backpack</h5><br>
      </div>
      
      </div>
    </div>
      
      <script>
      function openTab(evt, tabSt) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabSt).style.display = "block";
        evt.currentTarget.className += " active";
      }
          document.getElementById("defaultOpen").click();
      </script>
    
</body>
</html>