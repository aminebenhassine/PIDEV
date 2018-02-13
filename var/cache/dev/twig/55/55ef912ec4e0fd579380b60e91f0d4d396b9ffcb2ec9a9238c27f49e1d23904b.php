<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_faba8faa7f0056a9da90989b85d80932bf4b72fa5001e1337a846281f19bab3d extends Twig_Template
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
        $__internal_78b874be3c3f743f941dd0ee6b0650165512405cfc78af5b0c3772b6961af385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b874be3c3f743f941dd0ee6b0650165512405cfc78af5b0c3772b6961af385->enter($__internal_78b874be3c3f743f941dd0ee6b0650165512405cfc78af5b0c3772b6961af385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_c4f95fd45a9d51751bd5047ef54a2690c7f6d4503993d77074fb79a92c6558f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f95fd45a9d51751bd5047ef54a2690c7f6d4503993d77074fb79a92c6558f1->enter($__internal_c4f95fd45a9d51751bd5047ef54a2690c7f6d4503993d77074fb79a92c6558f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    <div>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_end');
        echo "
<center >    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-lg btn-block\" >Register</button>    </div>
</center>";
        
        $__internal_78b874be3c3f743f941dd0ee6b0650165512405cfc78af5b0c3772b6961af385->leave($__internal_78b874be3c3f743f941dd0ee6b0650165512405cfc78af5b0c3772b6961af385_prof);

        
        $__internal_c4f95fd45a9d51751bd5047ef54a2690c7f6d4503993d77074fb79a92c6558f1->leave($__internal_c4f95fd45a9d51751bd5047ef54a2690c7f6d4503993d77074fb79a92c6558f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    <div>
{{ form_end(form) }}
<center >    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-lg btn-block\" >Register</button>    </div>
</center>", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
