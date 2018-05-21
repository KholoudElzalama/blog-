<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
{{ Html::style('website/assests/view.css') }}
{{ Html::style('css/parsley.css') }}

{{ Html::script('website/assests/view.js') }}
{{ Html::script('js/parsley.min.js') }}

</head>
<body id="main_body" >

	<img id="top" src="top.png" alt="">
	<div id="form_container">

		<h1>Create post</h1>
		{!! Form::open(['route' => 'post.store' ,'method'=>'post', 'class'=>'appnitro','data-parsley-validate'=>'']) !!}



		<div class="form_description">
      <h2>Create post</h2>
			<p>Please fill the form to creat post</p>
		</div>
		<ul >

		<li id="li_1" >
			{{Form::label('title','Title : ',['class'=>'description'])}}

		<div>
			{{Form::text('title',null,['class'=>'element text medium','required'=>'','maxlength'=>'4'])}}

		</div>
		</li>
		<li id="li_2" >
		{{Form::label('body','Enter Body : ',['class'=>'description'])}}
		<div>
			{{Form::textarea('body',null,['class'=>'element textarea medium','required'=>''])}}

		</div>
		</li>

					<li class="buttons">
			    {{Form::submit('submit',['class'=>'button_text'])}}


		</li>
			</ul>
	{!! Form::close() !!}

	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
