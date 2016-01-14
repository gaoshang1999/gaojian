
<h1>{{ $user->user_name}}: </h1>

    <p> 您发布的{{ $recom->demand->recruit_corporation }}公司的职位{{ $recom->demand->post_name }} 收到一个新的人才推荐，推荐人：{{ $recom->user->user_name }}. </p>
     
     <p>人才详细信息， 姓名：{{ $recom->talent->name }},  所在公司：{{ $recom->talent->last_corporation }}, 职级 : {{$recom->talent-> job_level_1 }}</p>
     
    <p> 该邮件为系统自动发送邮件，请勿回复。 </p>
     
     
    <p> 高荐 </p>
    
   <p> {{ date('Y-m-d H:i:s')}} </p>