<!doctype html>
<html>
	<head>
		<title>{{title}} - {% block pageTitle %}{% endblock %}</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
   		<link rel="stylesheet" href="{% url lib/iui/web-app/iui/iui.css %}" type="text/css" />
   		<link rel="stylesheet" href="{% url lib/iui/web-app/iui/t/default/default-theme.css %}" type="text/css"/>
		<script type="application/x-javascript" src="{% url lib/iui//web-app/iui/iui.js %}"></script>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<link href="{% viewurl css/main.css %}" rel="stylesheet" />
		{% block headStuff %}
		{% endblock %}
	</head>
	<body>
		<div class="toolbar">
			<h1 id="pageTitle">{{title}}</h1>
			<a id="backButton" class="button" href="#"></a>
		</div>

		<ul id="index" title="PocketScrooge" selected="true">
		{% block appMenu %}
			<li><a href="#capture">Erfassung</a>
		{% endblock %}
		</ul>

		{% block appViews %}{% endblock %}
	</body>
    <script src="{% url lib/zepto/src/zepto.js %}" type="text/javascript" />
</html>
