<?php $Table = ucfirst($table->en) ;?>

<pre>
$app->get('/admin/{{$table->en}}',  'Admin\{{$Table}}Controller@lists');
$app->get('/admin/{{$table->en}}/add',  'Admin\{{$Table}}Controller@add');
$app->post('/admin/{{$table->en}}/add',  'Admin\{{$Table}}Controller@add');
$app->get('/admin/{{$table->en}}/edit/{id}',  'Admin\{{$Table}}Controller@edit');
$app->post('/admin/{{$table->en}}/edit/{id}',  'Admin\{{$Table}}Controller@edit');
$app->post('/admin/{{$table->en}}/delete/{id}',  'Admin\{{$Table}}Controller@delete');
$app->get('/admin/{{$table->en}}/search', 'Admin\{{$Table}}Controller@search');
</pre>