<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#a {
    font-family: Arial, Helvetica, sans-serif;
     background-size: cover;
    background-image: url("pic.jpg");
    position: absolute;
    left: 200px;top: 150px;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.c {
    
    position:relative;
     LEFT:400px;top:-110px; 
    overflow:hidden;
    display: inline-block;
    font-size: 15px;
   padding: 0 22px;

    
}

/* Style the topnav links */
.c a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.c a:hover {
    background-color: #2f2f31;
    color:  rgb(179, 209, 70);
}
</style>
</head>
<body id="a">
   <div class="c">
  <a href="version1.0.html"><b>HOME</b></a>
  <a href="#"><b>DATABASE</b></a>
  <a href="#"><b>FAMILY TREE</b></a>
</div>

<h3 style="text-align: left;">Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <input type="text" id="lname" name="country" placeholder="Your Country">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

