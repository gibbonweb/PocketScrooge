{% extends base %}

{% block headStuff %}
	{% parentblock %}
		<script type="text/javascript">
			/*google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = new google.visualization.DataTable();
				data.addColumn('date','Tag');
				data.addColumn('number','Off');
				data.addColumn('number','Deff');
				
				{% for units in user.unitreports %}
		data.addRow({% autoescape off %}[new Date({{units.mtime}}), {{units.off}}, {{units.deff}}]{% endautoescape %});

				{% endfor %}
				var options = {
					isStacked: true,
					legend: 'bottom'		
				};

			
				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			}*/
		</script>
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
