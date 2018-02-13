<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_445c210ffb83e3a21e9544cd8d4d55c30f284d085e62ac2235a0ebcaf77791f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/register.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/register.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a3f93dd06abe5eb77d788a5094fec0334a5c921fcd7be1f73c05d8c8d287418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3f93dd06abe5eb77d788a5094fec0334a5c921fcd7be1f73c05d8c8d287418->enter($__internal_6a3f93dd06abe5eb77d788a5094fec0334a5c921fcd7be1f73c05d8c8d287418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5031b5faafd8c4b780dec0635da4cbcd6988e6f5cfd239147acbf3e8663c6e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031b5faafd8c4b780dec0635da4cbcd6988e6f5cfd239147acbf3e8663c6e1f->enter($__internal_5031b5faafd8c4b780dec0635da4cbcd6988e6f5cfd239147acbf3e8663c6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3f93dd06abe5eb77d788a5094fec0334a5c921fcd7be1f73c05d8c8d287418->leave($__internal_6a3f93dd06abe5eb77d788a5094fec0334a5c921fcd7be1f73c05d8c8d287418_prof);

        
        $__internal_5031b5faafd8c4b780dec0635da4cbcd6988e6f5cfd239147acbf3e8663c6e1f->leave($__internal_5031b5faafd8c4b780dec0635da4cbcd6988e6f5cfd239147acbf3e8663c6e1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5b912b2b5752c8b7c898ccc63eba8ea52e44a921c1fdcfb582c939c4cd3e705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b912b2b5752c8b7c898ccc63eba8ea52e44a921c1fdcfb582c939c4cd3e705->enter($__internal_e5b912b2b5752c8b7c898ccc63eba8ea52e44a921c1fdcfb582c939c4cd3e705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8bf8a3afa13de092330adc1adaf6172e7d973f4a38add08838f8c034c6fd256e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf8a3afa13de092330adc1adaf6172e7d973f4a38add08838f8c034c6fd256e->enter($__internal_8bf8a3afa13de092330adc1adaf6172e7d973f4a38add08838f8c034c6fd256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8bf8a3afa13de092330adc1adaf6172e7d973f4a38add08838f8c034c6fd256e->leave($__internal_8bf8a3afa13de092330adc1adaf6172e7d973f4a38add08838f8c034c6fd256e_prof);

        
        $__internal_e5b912b2b5752c8b7c898ccc63eba8ea52e44a921c1fdcfb582c939c4cd3e705->leave($__internal_e5b912b2b5752c8b7c898ccc63eba8ea52e44a921c1fdcfb582c939c4cd3e705_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/register.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
