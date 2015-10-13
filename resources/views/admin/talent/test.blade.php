<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>


<form   method="post" id="search-form" action="{{ url('/admin/talent/testApi') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<textarea type="text/plain" id="resume" name="resume" rows="5" width="300px"> 姓名 测试  
 手机 13312345678 
</textarea>
<br/>
<input type="submit" name="" value="提交">
</form>

</body>
</html>