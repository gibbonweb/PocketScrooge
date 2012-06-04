{% extends base %}

{% block headStuff %}
	{% parentblock %}
{% endblock %}

{% block pageTitle %}PocketScrooge{% endblock %}

{% block appMenu %}
	{% parentblock %}
			<li><a href="#current">Dieser Monat</a></li>
            <li><a href="#settings">Einstellungen</a></li>
{% endblock %}

{% block appViews %}
<div id="current" title="Dieser Monat" class="panel">
</div>

<form id="settings" title="Einstellungen" class="panel" method="POST" action="{% url action/usettings %}">

</form>

{% endblock %}
