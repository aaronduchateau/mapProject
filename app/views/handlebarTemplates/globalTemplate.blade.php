<script id="top-menu" type="text/x-handlebars-template">
	<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#0D6A92;">
      <div class="container" style="width:100%;">
        <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right" style="margin-top:-12px;">
            <li role="presentation" class="@{{menu.class}}"><a href="@{{menu.link}}">Menu</a></li>
            <li role="presentation" class="@{{dash.class}}"><a href="@{{dash.link}}">Dashboard</a></li>
            <li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Contact</a></li>
            <li role="presentation"><a href="{{ URL::asset('/users/logout')}}">Sign out (@{{emailHeld}})</a></li>
          </ul>
        </nav>
        <h3 class="custom-text-brand"><img src="{{ URL::asset('/images/icon-map-new.png') }}" style="width:20px;margin-top:-4px;"/> TimberChopper&#0153;</h3>
        </div>
      </div>
    </nav>
</script>
<script id="general-loader" type="text/x-handlebars-template">
<h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
  <img src="{{ URL::asset('images/loader.GIF')}}" style="width:32px;height:32px;">
  Loading Content...
</h4>
</script>
<script type="text/javascript">
Handlebars.registerHelper('currentDatePretty', function() {
    return (moment().format('MMMM Do YYYY'));
});
Handlebars.registerHelper('passedDatePretty', function(item) {
    return (moment(item).format('MMMM Do YYYY, h:mm a'));
});
</script>