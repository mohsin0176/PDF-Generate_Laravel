<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PDF</title>
	<meta http-equiv="Content-Type" content="text/html ;charset=utf-8"/>
	<style type="text/css">
		p{
			color: red;
		}
		h1{
			font-size: 70px;
			color: #ccc;
		}
		table
		{

			border-top: 5px solid #666;
		}
		.page-break
		{
			page-break-after:always;
		}
	</style>

</head>
<body>



<h1>{{$title}}</h1>
<p>{{$total}}</p>

@foreach($products as $product)
<p>{{$product}}</p>
@endforeach

<table style="width: 100%;">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>ADDRESS</th>
  </tr>
  <tr>
    <td>100</td>
    <td>MM.Islam</td>
    <td>Savar</td>
  </tr>
  <tr>
    <td>101</td>
    <td>MS.JAHIN</td>
    <td>Polli</td>
  </tr>
  <tr>
    <td>102</td>
    <td>RAJIB</td>
    <td>Kalikaiur</td>
  </tr>
  <tr>
    <td>103</td>
    <td>MTK JAYUI</td>
    <td>Jamshing</td>
  </tr>
  <tr>
    <td>104</td>
    <td>MN SHAHEED</td>
    <td>Noya Dilli</td>
  </tr>
  <tr>
    <td>105</td>
    <td>JK JAHIN</td>
    <td>Kurgaon</td>
  </tr>
</table>
</body>
</html>