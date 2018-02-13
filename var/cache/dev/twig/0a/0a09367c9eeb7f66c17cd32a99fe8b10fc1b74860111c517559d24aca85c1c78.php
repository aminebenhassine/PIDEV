<?php

/* @Club/Default/afficheclub.html.twig */
class __TwigTemplate_3b346148d31c3402da99ae9632b66e0d2d2f3830146b1eeae36c27d68a1c0b66 extends Twig_Template
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
        $__internal_e2022f8ba1def9cffee6e756a7a5831a7eda991ded2c9e51b1a431edda1ab2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2022f8ba1def9cffee6e756a7a5831a7eda991ded2c9e51b1a431edda1ab2d2->enter($__internal_e2022f8ba1def9cffee6e756a7a5831a7eda991ded2c9e51b1a431edda1ab2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/afficheclub.html.twig"));

        $__internal_031b74cf49d2f0097e9ff65f03c4e699a66a7121b8494d3ed3ee5e6067cf20b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031b74cf49d2f0097e9ff65f03c4e699a66a7121b8494d3ed3ee5e6067cf20b0->enter($__internal_031b74cf49d2f0097e9ff65f03c4e699a66a7121b8494d3ed3ee5e6067cf20b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/afficheclub.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->loadTemplate("admin/partial/header.html.twig", "@Club/Default/afficheclub.html.twig", 4)->display($context);
        // line 5
        echo "</head>

<body class=\"no-skin\">
";
        // line 8
        $this->loadTemplate("admin/partial/body_list_club.html.twig", "@Club/Default/afficheclub.html.twig", 8)->display($context);
        // line 9
        $this->loadTemplate("admin/partial/script.html.twig", "@Club/Default/afficheclub.html.twig", 9)->display($context);
        // line 10
        echo "</body>
</html>
";
        
        $__internal_e2022f8ba1def9cffee6e756a7a5831a7eda991ded2c9e51b1a431edda1ab2d2->leave($__internal_e2022f8ba1def9cffee6e756a7a5831a7eda991ded2c9e51b1a431edda1ab2d2_prof);

        
        $__internal_031b74cf49d2f0097e9ff65f03c4e699a66a7121b8494d3ed3ee5e6067cf20b0->leave($__internal_031b74cf49d2f0097e9ff65f03c4e699a66a7121b8494d3ed3ee5e6067cf20b0_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/afficheclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  39 => 9,  37 => 8,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% include \"admin/partial/header.html.twig\" %}
</head>

<body class=\"no-skin\">
{% include \"admin/partial/body_list_club.html.twig\" %}
{% include \"admin/partial/script.html.twig\" %}
</body>
</html>
", "@Club/Default/afficheclub.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\afficheclub.html.twig");
    }
}
