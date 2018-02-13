<?php

/* @Spotted/CRUD/ajout.html.twig */
class __TwigTemplate_e4f6a12bda06a99a94061b99893f1e059487e42f78dee03ccc1fd2adb4d5a6fc extends Twig_Template
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
        $__internal_d1c1b4a9e8779eaa7332287c36fa2e10ca6897e32352485f364b42d1431d4ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c1b4a9e8779eaa7332287c36fa2e10ca6897e32352485f364b42d1431d4ef1->enter($__internal_d1c1b4a9e8779eaa7332287c36fa2e10ca6897e32352485f364b42d1431d4ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/ajout.html.twig"));

        $__internal_ae008926b8099dbac16b3ab73ae34eddff53b1283ad7d077355734c4f91a2008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae008926b8099dbac16b3ab73ae34eddff53b1283ad7d077355734c4f91a2008->enter($__internal_ae008926b8099dbac16b3ab73ae34eddff53b1283ad7d077355734c4f91a2008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/ajout.html.twig"));

        // line 1
        echo "<h1>Ajout Spotted</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "image", array()), 'row');
        echo " 
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_d1c1b4a9e8779eaa7332287c36fa2e10ca6897e32352485f364b42d1431d4ef1->leave($__internal_d1c1b4a9e8779eaa7332287c36fa2e10ca6897e32352485f364b42d1431d4ef1_prof);

        
        $__internal_ae008926b8099dbac16b3ab73ae34eddff53b1283ad7d077355734c4f91a2008->leave($__internal_ae008926b8099dbac16b3ab73ae34eddff53b1283ad7d077355734c4f91a2008_prof);

    }

    public function getTemplateName()
    {
        return "@Spotted/CRUD/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Ajout Spotted</h1>

{{ form_start(form) }}
{{ form_row(form.image) }} 
{{ form_end(form) }}", "@Spotted/CRUD/ajout.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\SpottedBundle\\Resources\\views\\CRUD\\ajout.html.twig");
    }
}
