<?php

/* admin/partial/sidebar.html.twig */
class __TwigTemplate_c1e1b94f64ba86d3ff75197712f03fe972410b94dfdb57820f03671673e5b94c extends Twig_Template
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
        $__internal_20cc2d834c8458bf2c723699fa47befeccd466afbbf91cbe6d31cc177f51f662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20cc2d834c8458bf2c723699fa47befeccd466afbbf91cbe6d31cc177f51f662->enter($__internal_20cc2d834c8458bf2c723699fa47befeccd466afbbf91cbe6d31cc177f51f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/sidebar.html.twig"));

        $__internal_f29c83a16992f7ace532f75d2c28920b69bcbe9eca5186d57592a58415200635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29c83a16992f7ace532f75d2c28920b69bcbe9eca5186d57592a58415200635->enter($__internal_f29c83a16992f7ace532f75d2c28920b69bcbe9eca5186d57592a58415200635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/sidebar.html.twig"));

        // line 1
        echo "
<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
\t<script type=\"text/javascript\">
        try{ace.settings.loadState('sidebar')}catch(e){}
\t</script>

\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
\t\t<div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
\t\t\t<button class=\"btn btn-success\">
\t\t\t\t<i class=\"ace-icon fa fa-signal\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-info\">
\t\t\t\t<i class=\"ace-icon fa fa-pencil\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-warning\">
\t\t\t\t<i class=\"ace-icon fa fa-users\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t<i class=\"ace-icon fa fa-cogs\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t<span class=\"btn btn-danger\"></span>
\t\t</div>
\t</div><!-- /.sidebar-shortcuts -->

\t<ul class=\"nav nav-list\">
\t\t<li class=\"active\">
\t\t\t<a href=\"index.html\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Tableau de bord  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>


\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Annonces  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>

\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Clubs  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t<i class=\"menu-icon fa fa-tag\"></i>
\t\t\t\t<span class=\"menu-text\"> Gestion Club </span>

\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>

\t\t\t<ul class=\"submenu\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_ajout");
        echo "\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tAjout Club
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>



\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_affiche");
        echo "\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tList Club
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>







\t\t\t</ul>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Evénements  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>



\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Photo copies  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>

\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> SPOTTED  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>



\t\t<li class=\"\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t<i class=\"menu-icon fa fa-tag\"></i>
\t\t\t\t<span class=\"menu-text\"> More Pages </span>

\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>

\t\t\t<ul class=\"submenu\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tUser Profile
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tInbox
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"pricing.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tPricing Tables
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"invoice.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tInvoice
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"timeline.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tTimeline
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"search.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tSearch Results
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"email.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tEmail Templates
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tLogin &amp; Register
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t</ul><!-- /.nav-list -->

\t<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
\t\t<i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
\t</div>
</div>";
        
        $__internal_20cc2d834c8458bf2c723699fa47befeccd466afbbf91cbe6d31cc177f51f662->leave($__internal_20cc2d834c8458bf2c723699fa47befeccd466afbbf91cbe6d31cc177f51f662_prof);

        
        $__internal_f29c83a16992f7ace532f75d2c28920b69bcbe9eca5186d57592a58415200635->leave($__internal_f29c83a16992f7ace532f75d2c28920b69bcbe9eca5186d57592a58415200635_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 88,  103 => 77,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"sidebar\" class=\"sidebar responsive ace-save-state\">
\t<script type=\"text/javascript\">
        try{ace.settings.loadState('sidebar')}catch(e){}
\t</script>

\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
\t\t<div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
\t\t\t<button class=\"btn btn-success\">
\t\t\t\t<i class=\"ace-icon fa fa-signal\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-info\">
\t\t\t\t<i class=\"ace-icon fa fa-pencil\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-warning\">
\t\t\t\t<i class=\"ace-icon fa fa-users\"></i>
\t\t\t</button>

\t\t\t<button class=\"btn btn-danger\">
\t\t\t\t<i class=\"ace-icon fa fa-cogs\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t<span class=\"btn btn-danger\"></span>
\t\t</div>
\t</div><!-- /.sidebar-shortcuts -->

\t<ul class=\"nav nav-list\">
\t\t<li class=\"active\">
\t\t\t<a href=\"index.html\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Tableau de bord  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>


\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Annonces  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>

\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Clubs  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t<i class=\"menu-icon fa fa-tag\"></i>
\t\t\t\t<span class=\"menu-text\"> Gestion Club </span>

\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>

\t\t\t<ul class=\"submenu\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"{{ path('club_ajout') }}\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tAjout Club
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>



\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"{{ path('club_affiche') }}\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tList Club
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>







\t\t\t</ul>
\t\t</li>
\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Evénements  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>



\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> Photo copies  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>

\t\t<li class=\"\">
\t\t\t<a href=\"#\">
\t\t\t\t<i class=\"menu-icon fa fa-tachometer\"></i>
\t\t\t\t<span class=\"menu-text\"> SPOTTED  </span>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>
\t\t</li>



\t\t<li class=\"\">
\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t<i class=\"menu-icon fa fa-tag\"></i>
\t\t\t\t<span class=\"menu-text\"> More Pages </span>

\t\t\t\t<b class=\"arrow fa fa-angle-down\"></b>
\t\t\t</a>

\t\t\t<b class=\"arrow\"></b>

\t\t\t<ul class=\"submenu\">
\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tUser Profile
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tInbox
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"pricing.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tPricing Tables
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"invoice.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tInvoice
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"timeline.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tTimeline
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"search.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tSearch Results
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"email.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tEmail Templates
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>

\t\t\t\t<li class=\"\">
\t\t\t\t\t<a href=\"login.html\">
\t\t\t\t\t\t<i class=\"menu-icon fa fa-caret-right\"></i>
\t\t\t\t\t\tLogin &amp; Register
\t\t\t\t\t</a>

\t\t\t\t\t<b class=\"arrow\"></b>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>

\t</ul><!-- /.nav-list -->

\t<div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
\t\t<i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
\t</div>
</div>", "admin/partial/sidebar.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\sidebar.html.twig");
    }
}
