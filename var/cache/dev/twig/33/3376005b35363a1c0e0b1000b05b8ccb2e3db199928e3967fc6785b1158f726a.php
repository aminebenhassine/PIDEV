<?php

/* admin/partial/body.html.twig */
class __TwigTemplate_869e2599898a699862730c985fd21ace3b588924b71fc57dad2f34703494f6d3 extends Twig_Template
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
        $__internal_ec7dbe4d9b7ec1696e8213abecabf5019a5625528d562fd3038abee52083222a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7dbe4d9b7ec1696e8213abecabf5019a5625528d562fd3038abee52083222a->enter($__internal_ec7dbe4d9b7ec1696e8213abecabf5019a5625528d562fd3038abee52083222a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body.html.twig"));

        $__internal_8d718dd74415fe38fb25ec83ee12e838718bf0e2059a95a0ff7a9eb88688bf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d718dd74415fe38fb25ec83ee12e838718bf0e2059a95a0ff7a9eb88688bf67->enter($__internal_8d718dd74415fe38fb25ec83ee12e838718bf0e2059a95a0ff7a9eb88688bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("admin/partial/top-header.html.twig", "admin/partial/body.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"main-container ace-save-state\" id=\"main-container\">
\t<script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
\t</script>

    ";
        // line 9
        $this->loadTemplate("admin/partial/sidebar.html.twig", "admin/partial/body.html.twig", 9)->display($context);
        // line 10
        echo "
\t<div class=\"main-content\">
\t\t<div class=\"main-content-inner\">
";
        // line 13
        $this->loadTemplate("admin/partial/breadcrumbs.html.twig", "admin/partial/body.html.twig", 13)->display($context);
        // line 14
        echo "


\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"ace-settings-container\" id=\"ace-settings-container\">
\t\t\t\t\t<div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog bigger-130\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<select id=\"skin-colorpicker\" class=\"hide\">
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>&nbsp; Choose Skin</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-add-container\">
\t\t\t\t\t\t\t\t\tInside
\t\t\t\t\t\t\t\t\t<b>.container</b>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /.pull-left -->

\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /.pull-left -->
\t\t\t\t\t</div><!-- /.ace-settings-box -->
\t\t\t\t</div><!-- /.ace-settings-container -->
<div class=\"page-header\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tTableau de bord
\t\t\t\t\t\t
\t\t\t\t\t</h1>
\t\t\t\t</div><!-- /.page-header -->
\t\t\t\t    ";
        // line 90
        $this->loadTemplate("admin/partial/content.html.twig", "admin/partial/body.html.twig", 90)->display($context);
        // line 91
        echo "

</div>
</div>
</div>


    ";
        // line 98
        $this->loadTemplate("admin/partial/footer.html.twig", "admin/partial/body.html.twig", 98)->display($context);
        // line 99
        echo "




\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t</a>
</div><!-- /.main-container -->


";
        
        $__internal_ec7dbe4d9b7ec1696e8213abecabf5019a5625528d562fd3038abee52083222a->leave($__internal_ec7dbe4d9b7ec1696e8213abecabf5019a5625528d562fd3038abee52083222a_prof);

        
        $__internal_8d718dd74415fe38fb25ec83ee12e838718bf0e2059a95a0ff7a9eb88688bf67->leave($__internal_8d718dd74415fe38fb25ec83ee12e838718bf0e2059a95a0ff7a9eb88688bf67_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 99,  136 => 98,  127 => 91,  125 => 90,  47 => 14,  45 => 13,  40 => 10,  38 => 9,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include \"admin/partial/top-header.html.twig\" %}

<div class=\"main-container ace-save-state\" id=\"main-container\">
\t<script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
\t</script>

    {% include \"admin/partial/sidebar.html.twig\" %}

\t<div class=\"main-content\">
\t\t<div class=\"main-content-inner\">
{% include \"admin/partial/breadcrumbs.html.twig\" %}



\t\t\t<div class=\"page-content\">
\t\t\t\t<div class=\"ace-settings-container\" id=\"ace-settings-container\">
\t\t\t\t\t<div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog bigger-130\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<select id=\"skin-colorpicker\" class=\"hide\">
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
\t\t\t\t\t\t\t\t\t\t<option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>&nbsp; Choose Skin</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-add-container\">
\t\t\t\t\t\t\t\t\tInside
\t\t\t\t\t\t\t\t\t<b>.container</b>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /.pull-left -->

\t\t\t\t\t\t<div class=\"pull-left width-50\">
\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"ace-settings-item\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- /.pull-left -->
\t\t\t\t\t</div><!-- /.ace-settings-box -->
\t\t\t\t</div><!-- /.ace-settings-container -->
<div class=\"page-header\">
\t\t\t\t\t<h1>
\t\t\t\t\t\tTableau de bord
\t\t\t\t\t\t
\t\t\t\t\t</h1>
\t\t\t\t</div><!-- /.page-header -->
\t\t\t\t    {% include \"admin/partial/content.html.twig\" %}


</div>
</div>
</div>


    {% include \"admin/partial/footer.html.twig\" %}





\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t</a>
</div><!-- /.main-container -->


", "admin/partial/body.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\body.html.twig");
    }
}
