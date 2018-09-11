<title>{{$data->name}}</title>
<meta name="description" content="{{$data->name}}">
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:title" content="{{$data->name}}" />
<meta property="og:site_name" content="{{'http://'.Request::getHost()}}" />
<meta property="og:type" content="article" />
<meta property="og:image:url" content="{{'http://'.Request::getHost().'/assets/images/'.$data->icon}}" />
<meta property="og:image" content="{{'http://'.Request::getHost().'/assets/images/'.$data->icon}}" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="400" />
<meta property="og:description" content="." />