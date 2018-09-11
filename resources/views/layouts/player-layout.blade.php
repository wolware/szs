<title>{{$data->firstname.' '.$data->lastname}}</title>
<meta name="description" content="{{$data->firstname.' '.$data->lastname}}">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:title" content="{{$data->firstname.' '.$data->lastname}}" />
<meta property="og:site_name" content="{{'http://'.Request::getHost()}}" />
<meta property="og:type" content="article" />
<meta property="og:image:url" content="{{'http://'.Request::getHost().'/images/avatars/'.$data->avatar}}" />
<meta property="og:image" content="{{'http://'.Request::getHost().'/images/avatars/'.$data->avatar}}" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="400" />
<meta property="og:description" content="." />