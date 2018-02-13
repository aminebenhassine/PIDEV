<?php

/* admin/partial/script.html.twig */
class __TwigTemplate_c3a17f464518c5a34454c22952d8ea9e566e6d95f5200bc5b3065736eb9d5f94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_935786022bc9f8a09b8d91de9de93085cc41688d78893a788687485a6ad4dc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935786022bc9f8a09b8d91de9de93085cc41688d78893a788687485a6ad4dc4f->enter($__internal_935786022bc9f8a09b8d91de9de93085cc41688d78893a788687485a6ad4dc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/script.html.twig"));

        $__internal_78f3db12c117e215d4fbb2c1f3499a7ad3aca70eca203ffa68424b2cb253d158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f3db12c117e215d4fbb2c1f3499a7ad3aca70eca203ffa68424b2cb253d158->enter($__internal_78f3db12c117e215d4fbb2c1f3499a7ad3aca70eca203ffa68424b2cb253d158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/script.html.twig"));

        // line 1
        echo "
\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sparkline.index.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\tvar size = parseInt(\$(this).data('size')) || 50;
\t\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\t\tbarColor: barColor,
\t\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\t\tscaleColor: false,
\t\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000,
\t\t\t\t\t\tsize: size
\t\t\t\t\t});
\t\t\t\t})
\t\t\t
\t\t\t\t\$('.sparkline').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
\t\t\t\t\t\$(this).sparkline('html',
\t\t\t\t\t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\ttagValuesAttribute:'data-values',
\t\t\t\t\t\t\t\t\t\ttype: 'bar',
\t\t\t\t\t\t\t\t\t\tbarColor: barColor ,
\t\t\t\t\t\t\t\t\t\tchartRangeMin:\$(this).data('min') || 0
\t\t\t\t\t\t\t\t\t });
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
\t\t\t  //but sometimes it brings up errors with normal resize event handlers
\t\t\t  \$.resize.throttleWindow = false;
\t\t\t
\t\t\t  var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
\t\t\t  var data = [
\t\t\t\t{ label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
\t\t\t\t{ label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
\t\t\t\t{ label: \"ad campaigns\",  data: 8.2, color: \"#AF4E96\"},
\t\t\t\t{ label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
\t\t\t\t{ label: \"other\",  data: 10, color: \"#FEE074\"}
\t\t\t  ]
\t\t\t  function drawPieChart(placeholder, data, position) {
\t\t\t \t  \$.plot(placeholder, data, {
\t\t\t\t\tseries: {
\t\t\t\t\t\tpie: {
\t\t\t\t\t\t\tshow: true,
\t\t\t\t\t\t\ttilt:0.8,
\t\t\t\t\t\t\thighlight: {
\t\t\t\t\t\t\t\topacity: 0.25
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstroke: {
\t\t\t\t\t\t\t\tcolor: '#fff',
\t\t\t\t\t\t\t\twidth: 2
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstartAngle: 2
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: position || \"ne\", 
\t\t\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\t\t\tmargin:[-30,15]
\t\t\t\t\t}
\t\t\t\t\t,
\t\t\t\t\tgrid: {
\t\t\t\t\t\thoverable: true,
\t\t\t\t\t\tclickable: true
\t\t\t\t\t}
\t\t\t\t })
\t\t\t }
\t\t\t drawPieChart(placeholder, data);
\t\t\t
\t\t\t /**
\t\t\t we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
\t\t\t so that's not needed actually.
\t\t\t */
\t\t\t placeholder.data('chart', data);
\t\t\t placeholder.data('draw', drawPieChart);
\t\t\t
\t\t\t
\t\t\t  //pie chart tooltip example
\t\t\t  var \$tooltip = \$(\"<div class='tooltip top in'><div class='tooltip-inner'></div></div>\").hide().appendTo('body');
\t\t\t  var previousPoint = null;
\t\t\t
\t\t\t  placeholder.on('plothover', function (event, pos, item) {
\t\t\t\tif(item) {
\t\t\t\t\tif (previousPoint != item.seriesIndex) {
\t\t\t\t\t\tpreviousPoint = item.seriesIndex;
\t\t\t\t\t\tvar tip = item.series['label'] + \" : \" + item.series['percent']+'%';
\t\t\t\t\t\t\$tooltip.show().children(0).text(tip);
\t\t\t\t\t}
\t\t\t\t\t\$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
\t\t\t\t} else {
\t\t\t\t\t\$tooltip.hide();
\t\t\t\t\tpreviousPoint = null;
\t\t\t\t}
\t\t\t\t
\t\t\t });
\t\t\t
\t\t\t\t/////////////////////////////////////
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$tooltip.remove();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\tvar d1 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td1.push([i, Math.sin(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d2 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td2.push([i, Math.cos(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d3 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.2) {
\t\t\t\t\td3.push([i, Math.tan(i)]);
\t\t\t\t}
\t\t\t\t
\t\t\t
\t\t\t\tvar sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
\t\t\t\t\$.plot(\"#sales-charts\", [
\t\t\t\t\t{ label: \"Domains\", data: d1 },
\t\t\t\t\t{ label: \"Hosting\", data: d2 },
\t\t\t\t\t{ label: \"Services\", data: d3 }
\t\t\t\t], {
\t\t\t\t\thoverable: true,
\t\t\t\t\tshadowSize: 0,
\t\t\t\t\tseries: {
\t\t\t\t\t\tlines: { show: true },
\t\t\t\t\t\tpoints: { show: true }
\t\t\t\t\t},
\t\t\t\t\txaxis: {
\t\t\t\t\t\ttickLength: 0
\t\t\t\t\t},
\t\t\t\t\tyaxis: {
\t\t\t\t\t\tticks: 10,
\t\t\t\t\t\tmin: -2,
\t\t\t\t\t\tmax: 2,
\t\t\t\t\t\ttickDecimals: 3
\t\t\t\t\t},
\t\t\t\t\tgrid: {
\t\t\t\t\t\tbackgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tborderColor:'#555'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('.tab-content')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\t//var w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('.dialogs,.comments').ace_scroll({
\t\t\t\t\tsize: 300
\t\t\t    });
\t\t\t\t
\t\t\t\t
\t\t\t\t//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
\t\t\t\t//so disable dragging when clicking on label
\t\t\t\tvar agent = navigator.userAgent.toLowerCase();
\t\t\t\tif(ace.vars['touch'] && ace.vars['android']) {
\t\t\t\t  \$('#tasks').on('touchstart', function(e){
\t\t\t\t\tvar li = \$(e.target).closest('#tasks li');
\t\t\t\t\tif(li.length == 0)return;
\t\t\t\t\tvar label = li.find('label.inline').get(0);
\t\t\t\t\tif(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
\t\t\t\t  });
\t\t\t\t}
\t\t\t
\t\t\t\t\$('#tasks').sortable({
\t\t\t\t\topacity:0.8,
\t\t\t\t\trevert:true,
\t\t\t\t\tforceHelperSize:true,
\t\t\t\t\tplaceholder: 'draggable-placeholder',
\t\t\t\t\tforcePlaceholderSize:true,
\t\t\t\t\ttolerance:'pointer',
\t\t\t\t\tstop: function( event, ui ) {
\t\t\t\t\t\t//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
\t\t\t\t\t\t\$(ui.item).css('z-index', 'auto');
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$('#tasks').disableSelection();
\t\t\t\t\$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
\t\t\t\t\tif(this.checked) \$(this).closest('li').addClass('selected');
\t\t\t\t\telse \$(this).closest('li').removeClass('selected');
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t//show the dropdowns on top or bottom depending on window height and menu position
\t\t\t\t\$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
\t\t\t\t\tvar offset = \$(this).offset();
\t\t\t
\t\t\t\t\tvar \$w = \$(window)
\t\t\t\t\tif (offset.top > \$w.scrollTop() + \$w.innerHeight() - 100) 
\t\t\t\t\t\t\$(this).addClass('dropup');
\t\t\t\t\telse \$(this).removeClass('dropup');
\t\t\t\t});
\t\t\t
\t\t\t})
\t\t</script>";
        
        $__internal_935786022bc9f8a09b8d91de9de93085cc41688d78893a788687485a6ad4dc4f->leave($__internal_935786022bc9f8a09b8d91de9de93085cc41688d78893a788687485a6ad4dc4f_prof);

        
        $__internal_78f3db12c117e215d4fbb2c1f3499a7ad3aca70eca203ffa68424b2cb253d158->leave($__internal_78f3db12c117e215d4fbb2c1f3499a7ad3aca70eca203ffa68424b2cb253d158_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  90 => 31,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  55 => 20,  47 => 15,  39 => 10,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script src=\"{{ asset('assets/js/jquery-2.1.4.min.js') }}\"></script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script src=\"{{ asset('assets/js/jquery-1.11.3.min.js') }}\"></script>
<![endif]-->
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"{{ asset('assets/js/excanvas.min.js') }}\"></script>
\t\t<![endif]-->
\t\t<script src=\"{{ asset('assets/js/jquery-ui.custom.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.easypiechart.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.sparkline.index.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.flot.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.flot.pie.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/jquery.flot.resize.min.js') }}\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"{{ asset('assets/js/ace-elements.min.js') }}\"></script>
\t\t<script src=\"{{ asset('assets/js/ace.min.js') }}\"></script>

\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\tvar size = parseInt(\$(this).data('size')) || 50;
\t\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\t\tbarColor: barColor,
\t\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\t\tscaleColor: false,
\t\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\t\tanimate: ace.vars['old_ie'] ? false : 1000,
\t\t\t\t\t\tsize: size
\t\t\t\t\t});
\t\t\t\t})
\t\t\t
\t\t\t\t\$('.sparkline').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
\t\t\t\t\t\$(this).sparkline('html',
\t\t\t\t\t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\ttagValuesAttribute:'data-values',
\t\t\t\t\t\t\t\t\t\ttype: 'bar',
\t\t\t\t\t\t\t\t\t\tbarColor: barColor ,
\t\t\t\t\t\t\t\t\t\tchartRangeMin:\$(this).data('min') || 0
\t\t\t\t\t\t\t\t\t });
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
\t\t\t  //but sometimes it brings up errors with normal resize event handlers
\t\t\t  \$.resize.throttleWindow = false;
\t\t\t
\t\t\t  var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
\t\t\t  var data = [
\t\t\t\t{ label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
\t\t\t\t{ label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
\t\t\t\t{ label: \"ad campaigns\",  data: 8.2, color: \"#AF4E96\"},
\t\t\t\t{ label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
\t\t\t\t{ label: \"other\",  data: 10, color: \"#FEE074\"}
\t\t\t  ]
\t\t\t  function drawPieChart(placeholder, data, position) {
\t\t\t \t  \$.plot(placeholder, data, {
\t\t\t\t\tseries: {
\t\t\t\t\t\tpie: {
\t\t\t\t\t\t\tshow: true,
\t\t\t\t\t\t\ttilt:0.8,
\t\t\t\t\t\t\thighlight: {
\t\t\t\t\t\t\t\topacity: 0.25
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstroke: {
\t\t\t\t\t\t\t\tcolor: '#fff',
\t\t\t\t\t\t\t\twidth: 2
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstartAngle: 2
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: position || \"ne\", 
\t\t\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\t\t\tmargin:[-30,15]
\t\t\t\t\t}
\t\t\t\t\t,
\t\t\t\t\tgrid: {
\t\t\t\t\t\thoverable: true,
\t\t\t\t\t\tclickable: true
\t\t\t\t\t}
\t\t\t\t })
\t\t\t }
\t\t\t drawPieChart(placeholder, data);
\t\t\t
\t\t\t /**
\t\t\t we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
\t\t\t so that's not needed actually.
\t\t\t */
\t\t\t placeholder.data('chart', data);
\t\t\t placeholder.data('draw', drawPieChart);
\t\t\t
\t\t\t
\t\t\t  //pie chart tooltip example
\t\t\t  var \$tooltip = \$(\"<div class='tooltip top in'><div class='tooltip-inner'></div></div>\").hide().appendTo('body');
\t\t\t  var previousPoint = null;
\t\t\t
\t\t\t  placeholder.on('plothover', function (event, pos, item) {
\t\t\t\tif(item) {
\t\t\t\t\tif (previousPoint != item.seriesIndex) {
\t\t\t\t\t\tpreviousPoint = item.seriesIndex;
\t\t\t\t\t\tvar tip = item.series['label'] + \" : \" + item.series['percent']+'%';
\t\t\t\t\t\t\$tooltip.show().children(0).text(tip);
\t\t\t\t\t}
\t\t\t\t\t\$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
\t\t\t\t} else {
\t\t\t\t\t\$tooltip.hide();
\t\t\t\t\tpreviousPoint = null;
\t\t\t\t}
\t\t\t\t
\t\t\t });
\t\t\t
\t\t\t\t/////////////////////////////////////
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$tooltip.remove();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\tvar d1 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td1.push([i, Math.sin(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d2 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td2.push([i, Math.cos(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d3 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.2) {
\t\t\t\t\td3.push([i, Math.tan(i)]);
\t\t\t\t}
\t\t\t\t
\t\t\t
\t\t\t\tvar sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
\t\t\t\t\$.plot(\"#sales-charts\", [
\t\t\t\t\t{ label: \"Domains\", data: d1 },
\t\t\t\t\t{ label: \"Hosting\", data: d2 },
\t\t\t\t\t{ label: \"Services\", data: d3 }
\t\t\t\t], {
\t\t\t\t\thoverable: true,
\t\t\t\t\tshadowSize: 0,
\t\t\t\t\tseries: {
\t\t\t\t\t\tlines: { show: true },
\t\t\t\t\t\tpoints: { show: true }
\t\t\t\t\t},
\t\t\t\t\txaxis: {
\t\t\t\t\t\ttickLength: 0
\t\t\t\t\t},
\t\t\t\t\tyaxis: {
\t\t\t\t\t\tticks: 10,
\t\t\t\t\t\tmin: -2,
\t\t\t\t\t\tmax: 2,
\t\t\t\t\t\ttickDecimals: 3
\t\t\t\t\t},
\t\t\t\t\tgrid: {
\t\t\t\t\t\tbackgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tborderColor:'#555'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('.tab-content')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\t//var w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('.dialogs,.comments').ace_scroll({
\t\t\t\t\tsize: 300
\t\t\t    });
\t\t\t\t
\t\t\t\t
\t\t\t\t//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
\t\t\t\t//so disable dragging when clicking on label
\t\t\t\tvar agent = navigator.userAgent.toLowerCase();
\t\t\t\tif(ace.vars['touch'] && ace.vars['android']) {
\t\t\t\t  \$('#tasks').on('touchstart', function(e){
\t\t\t\t\tvar li = \$(e.target).closest('#tasks li');
\t\t\t\t\tif(li.length == 0)return;
\t\t\t\t\tvar label = li.find('label.inline').get(0);
\t\t\t\t\tif(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
\t\t\t\t  });
\t\t\t\t}
\t\t\t
\t\t\t\t\$('#tasks').sortable({
\t\t\t\t\topacity:0.8,
\t\t\t\t\trevert:true,
\t\t\t\t\tforceHelperSize:true,
\t\t\t\t\tplaceholder: 'draggable-placeholder',
\t\t\t\t\tforcePlaceholderSize:true,
\t\t\t\t\ttolerance:'pointer',
\t\t\t\t\tstop: function( event, ui ) {
\t\t\t\t\t\t//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
\t\t\t\t\t\t\$(ui.item).css('z-index', 'auto');
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$('#tasks').disableSelection();
\t\t\t\t\$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
\t\t\t\t\tif(this.checked) \$(this).closest('li').addClass('selected');
\t\t\t\t\telse \$(this).closest('li').removeClass('selected');
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t//show the dropdowns on top or bottom depending on window height and menu position
\t\t\t\t\$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
\t\t\t\t\tvar offset = \$(this).offset();
\t\t\t
\t\t\t\t\tvar \$w = \$(window)
\t\t\t\t\tif (offset.top > \$w.scrollTop() + \$w.innerHeight() - 100) 
\t\t\t\t\t\t\$(this).addClass('dropup');
\t\t\t\t\telse \$(this).removeClass('dropup');
\t\t\t\t});
\t\t\t
\t\t\t})
\t\t</script>", "admin/partial/script.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\script.html.twig");
    }
}
