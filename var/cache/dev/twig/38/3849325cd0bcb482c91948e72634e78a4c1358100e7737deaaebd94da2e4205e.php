<?php

/* admin/partial/header.html.twig */
class __TwigTemplate_73bf4f58912a451466b7124a8f8d32df12ac1d3e774a0604d44ad7ce6519ecee extends Twig_Template
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
        $__internal_0aa60cac11ccb50fd5cc8c4cd9fc2370ba2762b5f5edb78e5459a71b52d41440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa60cac11ccb50fd5cc8c4cd9fc2370ba2762b5f5edb78e5459a71b52d41440->enter($__internal_0aa60cac11ccb50fd5cc8c4cd9fc2370ba2762b5f5edb78e5459a71b52d41440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/header.html.twig"));

        $__internal_fda24938e92c792d612e6cf4196e33c0b094fba2e7719b2fe343014695855799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda24938e92c792d612e6cf4196e33c0b094fba2e7719b2fe343014695855799->enter($__internal_fda24938e92c792d612e6cf4196e33c0b094fba2e7719b2fe343014695855799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/header.html.twig"));

        // line 1
        echo "  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>Dashboard - Ace Admin</title>

    <meta name=\"description\" content=\"overview &amp; stats\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->";
        
        $__internal_0aa60cac11ccb50fd5cc8c4cd9fc2370ba2762b5f5edb78e5459a71b52d41440->leave($__internal_0aa60cac11ccb50fd5cc8c4cd9fc2370ba2762b5f5edb78e5459a71b52d41440_prof);

        
        $__internal_fda24938e92c792d612e6cf4196e33c0b094fba2e7719b2fe343014695855799->leave($__internal_fda24938e92c792d612e6cf4196e33c0b094fba2e7719b2fe343014695855799_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  91 => 38,  83 => 33,  74 => 27,  68 => 24,  64 => 23,  59 => 21,  53 => 18,  47 => 15,  39 => 10,  35 => 9,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>Dashboard - Ace Admin</title>

    <meta name=\"description\" content=\"overview &amp; stats\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}\" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fonts.googleapis.com.css') }}\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace.min.css') }}\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-part2.min.css') }}\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-skins.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-rtl.min.css') }}\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ace-ie.min.css') }}\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"{{ asset('assets/js/ace-extra.min.js') }}\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"{{ asset('assets/js/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/respond.min.js') }}\"></script>
    <![endif]-->", "admin/partial/header.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\header.html.twig");
    }
}
