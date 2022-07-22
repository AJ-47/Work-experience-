<title> Album details </title>

<style>
h1 {
     color: white;
     text-align: center;
     font-size: 300%
}
body {
     background: black;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

p {
     color: white;
     font-size: 150%
}
</style>


<h1 > {{$album_details[0] ['album_name'] }}: album details </h1> 

<body>

<img src =  {{$album_details[0] ['URL'] }}
style = vertical-align:middle 
height = 400 width = 400>
<br>
<hr>
<p style = text-align:center> 
The {{$album_details[0] ['album_name']}} album costs was released in {{$album_details[0] ['rel_date']}} by 
{{$album_details[0] ['artist']}} with help from {{$album_details[0] ['rec_label']}} and costs <strong> just £{{number_format($album_details[0]['price'], 2)}}</strong>, 
Catalogue number: {{$album_details[0] ['ct_no']}}
</p>

</body>
