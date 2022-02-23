<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
 
    
<!----side Menu-->
<section id="menu">

<div class="logo">
    <img src="assets/images/logo.png" />
    <h2>Dashboard</h2>
</div>

<div class="items">
    <li><i class="fa-solid fa-chart-pie"></i> <a href="index.html">Dashboard</a></li>
    <li><i class="fa-brands fa-uikit"></i>   <a href="index.html">Users</a></li>
    <li><i class="fa-solid fa-table"></i> <a href="products.html">Products</a></li>
    <li><i class="fa-solid fa-rectangle-list"></i> <a href="sales.html">Sales</a></li>
    <li><i class="fa-brands fa-cc-visa"></i> <a href="add_product.html">Add product</a></li>
    <li><i class="fa-solid fa-burger"></i> <a href="contact.html">Contact</a></li>
    <li><i class="fa-solid fa-circle"></i> <a href="help.html">Help</a></li>
</div>

</section>

<!----Interface-->
<section id="interface">
<div class="navigation">
    <!--search-->
    <div class="n1">
    <div >
            <i class="fas fa-bars" id="menu-btn"></i>
        </div>
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <form>
                <input type="text" placeholder="Search"/>
            </form>
        </div>
    </div>
    <!--profile-->
    <div class="profile">
        <i class="fa-solid fa-bell"></i>
        <img src="assets/images/profile1.jpg"/>
    </div>
</div>

<!--title-->
<h5 class="i-name">Dashboard</h5>


<!--Cards-->
<div class="values">
    <div class="val-box">
        <i class="fas fa-users"></i>
      <div>
   <h3>8,255</h3>
   <span>Users</span> 
     </div>
    </div>

    <div class="val-box">
        <i class="fas fa-users"></i>
      <div>
   <h3>8,255</h3>
   <span>Users</span> 
     </div>
    </div>


    <div class="val-box">
        <i class="fas fa-users"></i>
      <div>
   <h3>8,255</h3>
   <span>Users</span> 
     </div>
    </div>


    <div class="val-box">
        <i class="fas fa-users"></i>
      <div>
   <h3>8,255</h3>
   <span>Users</span> 
     </div>
    </div>
</div>
<br/>
<!--table-->
<div class="board">
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>Title</td>
                <td>Status</td>
                <td>Role</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="people">
                    <img src="assets/images/profile1.jpg"/>
                    <div class="people-description">
                        <h5>Jhon</h5>
                        <p>jhon@ali.com</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>Network Engineer</h5>
                </td>

                <td class="active">
                    <p>active</p>
                </td>

                <td class="role">
                 <p>employee</p>
                </td>

                <td class="edit">
                    <p><a href="#">edit</a></p>
                </td>
            </tr>

       


            <tr>
                <td class="people">
                    <img src="assets/images/profile4.jpg"/>
                    <div class="people-description">
                        <h5>Sara</h5>
                        <p>sara@ali.com</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>Network Engineer</h5>
                </td>

                <td class="active">
                    <p>active</p>
                </td>

                <td class="role">
                 <p>employee</p>
                </td>

                <td class="edit">
                    <p><a href="#">edit</a></p>
                </td>
            </tr>


            <tr>
                <td class="people">
                    <img src="assets/images/profile2.jpg"/>
                    <div class="people-description">
                        <h5>salma</h5>
                        <p>salma@ali.com</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>Network Engineer</h5>
                </td>

                <td class="active">
                    <p>active</p>
                </td>

                <td class="role">
                 <p>employee</p>
                </td>

                <td class="edit">
                    <p><a href="#">edit</a></p>
                </td>
            </tr>


            <tr>
                <td class="people">
                    <img src="assets/images/profile3.jpg"/>
                    <div class="people-description">
                        <h5>mohammed</h5>
                        <p>mohammed@ali.com</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>Network Engineer</h5>
                </td>

                <td class="active">
                    <p>active</p>
                </td>

                <td class="role">
                 <p>employee</p>
                </td>

                <td class="edit">
                    <p><a href="#">edit</a></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 


<script>
    $('#menu-btn').click(function(){
      
        $('#menu').toggleClass('active');
    });
</script>
</body>
</html>