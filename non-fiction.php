<!DOCTYPE html>
<html>
<head>
<style>
mark { 
    background-color: white;
    
	opacity: 0.5;
}


body{
 /*background-color:rgb(0, 0, 0);*/
 font-size: 22px;
 text-align: center;
}
h1 {
    background-color: rgb(51, 51, 51);
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(56, 56, 46);
    position: fixed;
    top: 0;
    width: 100%;
	 
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:rgb(98, 98, 80);
}
.active {
    background-color:green;
}

.center {
    position:absolute;
    top: 12%;
    left: 50%;
    transform: translate(-50%, -50%);
     color:white;
	font-size: 90px;
	 font-family:  "Brush Script MT",cursive;
}
/* 5,40,50,10*/
p {
    padding: 1cm 4cm 1cm 3cm;
}

div.relative {
    position: relative;
}

div.absolute {
    position: absolute;
    left: 200px;
    width: 300px;
    height: 170px;
    border: 3px solid blue;
} 
table { 
  width: 70%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
tr:hover {
          background-color: #ffff99;
    }
</style>

<body>
<ul>
  <li><a  href="fiction_final.php">Fiction</a></li>
  <li><a class="active" href="non-fiction.php">Non Fiction</a></li>
   <li style="float:center"><a href="logout.php">Logout</a></li>
</ul>

<h2><div class="center">Non-Fiction</div></h2>


<div class="w3-content w3-display-container">
 <img class="mySlides" src="img/3.jpg"  style="width:100%; height:600px;">
  <img class="mySlides" src="img/1.jpg"    style="width:100%; height:600px;">
   <img class="mySlides" src="img/2.jpg"   style="width:100%; height:600px;">
<img class="mySlides" src="img/4.jpg"     style="width:100%; height:600px;">    
</div>

Here we go with the most informative Non-fictions!</h4><br>
Click on the book covers for online reading!<br>


<table align="center">
<tr>
<td>
<a href="http://lgnavigators.weebly.com/uploads/5/8/5/2/58521739/i_am_malala_%E2%80%93_how_one_girl_stood_up_for_education_and_changed_the_world__young_readers_edition_.pdf" title="When the Taliban took control of the Swat Valley in Pakistan, one girl spoke out.">
<img src="img/malala.jpg" style="width:170px;height:200px;"></a>
</td>
<td>
I am Malala : the girl who stood up for education and was shot by the Taliban 
<p>Author:	Yousafzai Malala, 1997</p>
Genre: nonfiction
</td>
</tr>

<tr>
<td>
<a href="http://www.lequydonhanoi.edu.vn/upload_images/S%C3%A1ch%20ngo%E1%BA%A1i%20ng%E1%BB%AF/Rich%20Dad%20Poor%20Dad.pdf" title=" It advocates the importance of financial independence and building wealth through investing">
<img src="img/richpoor.jpg" style="width:170px;height:200px;"></a></td><td>
Rich Dad Poor Dad
<p>Author: Robert Kiyosaki</p>
Genres: Self-help, Personal finance, Entrepreneurship, Investment, Economics
</td>
</tr>



<tr>
<td>
<a href="http://www.fisica.net/relatividade/stephen_hawking_a_brief_history_of_time.pdf" title="From the Big Bang to Black Holes is a popular-science book on cosmology by British physicist Stephen Hawking">
<img src="img/history.jpg" style="width:170px; height:200px;"></a></td><td>
A Brief History of Time
<p>Authors: Stephen Hawking, Vladimír Karas</p>
Genre: Popular science

</td>
</tr>

<tr>
<td>
<a href="http://marketcurry.yolasite.com/resources/The%20Monk%20Who%20Sold%20His%20Ferrari-%20Robin%20Sharma.pdf" title="A renowned inspirational book, The Monk Who Sold His Ferrari is a revealing story that offers the readers a simple yet profound way to live life">
<img src="img/monk.jpg" style="width:170px; height:200px;"></a> </td><td>
The Monk Who Sold His Ferrari 
<p>Author: Robin Sharma</p>
Genre:Inspirational
</td>
</tr>


<tr>
<td>
<a href="http://newheadway.weebly.com/uploads/4/3/3/6/43369237/388453_1411397848.pdf" title="Candid conversations with top leaders around the world on how they approached pitvotal moments in their careers. ">
<img src="img/nofear.jpg" style="width:170px; height:200px;"></a></td><td>
With No Fear of Failure: Recapturing Your Dreams Through Creative Enterprise
<p>Authors: Tom Fatjo, Keith Miller</p>
Genre:leadership
</td>
</tr>


<tr>
<td>
<a href="https://www.depts.ttu.edu/upwardbound/books/the-7-habits-ofhighly-effective-people.pdf"title="Habits are powerful forces in our lives. They determine our level of effectiveness or ineffectiveness">
<img src="img/habits.jpg" style="width:170px; height:200px;"></a></td><td>
The 7 Habits of Highly Effective People
<p>Author: Stephen Covey</p>
Genre: nonfiction
</td>
</tr>

<tr>
<td>
<a href="https://docs.google.com/file/d/0B_6ICKE_et3uTlJTNGVBajFVWlU/edit" title="In Outliers, Gladwell examines the factors that contribute to high levels of success">
<img src="img/outliers.jpg" style="width:170px; height:200px;"></a></td><td>
Outliers
<p>Author: Malcolm Gladwell</p>
Genre: nonfiction
</td>
</tr>


<tr>
<td>
<a href="http://scholarworks.gsu.edu/cgi/viewcontent.cgi?article=1024&context=communication_theses" title=" A Practical Guide for Improving Communication and Getting What You Want in Your Relationships ">
<img src="img/menmars.jpg" style="width:170px; height:200px;"></a></td><td>
Men Are from Mars, Women Are from Venus
<p>Author: John Gray</p>
Genres: Non-fiction, Psychology, Self-help
</td>
</tr>


<tr>
<td>
<a href="http://images.kw.com/docs/2/1/2/212345/1285134779158_htwfaip.pdf" title="Get out of a mental rut, think new thoughts, acquire new visions, discover new ambitions">
<img src="img/influence.jpg" style="width:170px; height:200px;"></a></td><td>
How to Win Friends and Influence People
<p>Author: Dale Carnegie</p>
Genres: Self-help, Non-fiction
</td>
</tr>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
}
</script>
</body>
</html>