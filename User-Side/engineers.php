
<?php require_once "controllerUserData.php";?>  <!-- It is used for unique session for particular user in all web pages-->
<!DOCTYPE html>
<html>
<head>

    <!-- Add company icon image in website-->
        <link rel="shortcut icon" href="images/smnew-br.png" type="image/x-icon">
    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Seemaira's - View Supplements Details </title>
</head>
<body>

<?php include 'header.php'; ?>  <!--including header file, for providing Login/Signup/Logout options-->

<div class="container">
<div class="row">
<div class="col-md-3" >
<img src="images/<%=imagename%>" alt="" style="width:100%"/>
</div>
<div class="col-md-6" >
<table class="table table-stripped table-bordered">
<thead>
<tr>
<th colspan="2"  class="text-center"><h3> Product Details </h3></th>

</tr>
</thead>
<tbody>

<tr>
<td>Category</td>
<td> </td>
</tr>

<tr>
<td>Brand</td>
<td><%=brand%></td>
</tr>

<tr>
<td>Product Name</td>
<td><%=productname%></td>
</tr>

<tr>
<td>Weight</td>
<td><%=weight%></td>
</tr>

<tr>
<td>Full Discription </td>
<td><%=fdiscription%></td>
</tr>
<tr>

</tbody>
</table>


</div>
<div class="col-md-3 text-center" >
<form action="add_cart.jsp" method="post">                  <!--Form starts-->
<input type="hidden" name="product_id" value="<%=id%>"/>
<input type="hidden" name="weight" value="<%=weight%>"/>
<input type="hidden" name="productname" value="<%=productname%>"/>
<input type="hidden" name="price" value="<%=price%>"/>
<h2><%=productname%>&nbsp;<br/>
<%=category%></h2>

<h3><%=price%>&nbsp;INR</h3>
<input type="submit" name="submit" class="btn btn-danger" value="Buy Now" style="width:100%; font-size: 20px; height: 50px;">
</form>     <!--Form ends-->
</div>

</div>
</div>
<?php include 'footer.php'; ?>  <!--including footer file-->
</body>
</html>

