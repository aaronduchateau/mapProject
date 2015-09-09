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
        @{{#xIf accountType "===" "timber"}}
            <h3 class="custom-text-brand"><img src="{{ URL::asset('/images/icon-map-new.png') }}" style="width:20px;margin-top:-4px;"/> TimberChopper&#0153;</h3>  
        @{{/xIf}}
        @{{#xIf accountType "===" "standard"}}
            <h3 class="custom-text-brand" style="font-weight:200;letter-spacing: 0px;"><img src="{{ URL::asset('/images/frog_logo.png') }}" style="width: 35px;margin-top: -1px;margin-right: -5px;margin-left: 9px;"/> LotHopper&#0153;</h3>  
        @{{/xIf}}
        
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
Handlebars.registerHelper('xIf', function (lvalue, operator, rvalue, options) {

    var operators, result;

    if (arguments.length < 3) {
        throw new Error("Handlerbars Helper 'compare' needs 2 parameters");
    }

    if (options === undefined) {
        options = rvalue;
        rvalue = operator;
        operator = "===";
    }

    operators = {
        '==': function (l, r) { return l == r; },
        '===': function (l, r) { return l === r; },
        '!=': function (l, r) { return l != r; },
        '!==': function (l, r) { return l !== r; },
        '<': function (l, r) { return l < r; },
        '>': function (l, r) { return l > r; },
        '<=': function (l, r) { return l <= r; },
        '>=': function (l, r) { return l >= r; },
        'typeof': function (l, r) { return typeof l == r; }
    };

    if (!operators[operator]) {
        throw new Error("'xIf' doesn't know the operator " + operator);
    }

    result = operators[operator](lvalue, rvalue);

    if (result) {
        return options.fn(this);
    } else {
        return options.inverse(this);
    }
});
//reference at https://github.com/wycats/handlebars.js/issues/616
</script>