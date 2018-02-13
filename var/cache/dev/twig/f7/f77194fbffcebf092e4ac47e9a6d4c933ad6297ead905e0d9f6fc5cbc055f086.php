<?php

/* @User/register.html.twig */
class __TwigTemplate_0e180515d54c7a28305cb7f13554ba4ce2d9e37ddb34200386a73a7a84e084e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30df24936af797681b323285eb7d7831dfc380412e16125df9819fc0f996c4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30df24936af797681b323285eb7d7831dfc380412e16125df9819fc0f996c4c3->enter($__internal_30df24936af797681b323285eb7d7831dfc380412e16125df9819fc0f996c4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/register.html.twig"));

        $__internal_401c1d875b20c787230afe1c6227aa66a671b1d71b02c548bc441af8a910df49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401c1d875b20c787230afe1c6227aa66a671b1d71b02c548bc441af8a910df49->enter($__internal_401c1d875b20c787230afe1c6227aa66a671b1d71b02c548bc441af8a910df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >

<head>
    <meta charset=\"UTF-8\">
    <title>Register</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>


    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style_login.css"), "html", null, true);
        echo "\">

</head>

<body>

<div id=\"particles-js\"></div>
<body class=\"login\">
<div class=\"container\">
    <div class=\"login-container-wrapper clearfix\">
        <div class=\"logo\">
            <i class=\"fa fa-sign-in\"></i>
        </div>
        <div class=\"welcome\"><strong>Welcome,</strong> please Sign-up</div>

        ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "
    </div>


</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>



<script  src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/index_login.js"), "html", null, true);
        echo "\"></script>




</body>

</html>
";
        
        $__internal_30df24936af797681b323285eb7d7831dfc380412e16125df9819fc0f996c4c3->leave($__internal_30df24936af797681b323285eb7d7831dfc380412e16125df9819fc0f996c4c3_prof);

        
        $__internal_401c1d875b20c787230afe1c6227aa66a671b1d71b02c548bc441af8a910df49->leave($__internal_401c1d875b20c787230afe1c6227aa66a671b1d71b02c548bc441af8a910df49_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5f19f40d626b202672557125f18ac33910d831d34bf24c94cc8d906d3033180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f19f40d626b202672557125f18ac33910d831d34bf24c94cc8d906d3033180->enter($__internal_b5f19f40d626b202672557125f18ac33910d831d34bf24c94cc8d906d3033180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f8a5dae4c5221853c525a553b06702eccdbd270ab713d85eb71931afc29afa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8a5dae4c5221853c525a553b06702eccdbd270ab713d85eb71931afc29afa1->enter($__internal_0f8a5dae4c5221853c525a553b06702eccdbd270ab713d85eb71931afc29afa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_0f8a5dae4c5221853c525a553b06702eccdbd270ab713d85eb71931afc29afa1->leave($__internal_0f8a5dae4c5221853c525a553b06702eccdbd270ab713d85eb71931afc29afa1_prof);

        
        $__internal_b5f19f40d626b202672557125f18ac33910d831d34bf24c94cc8d906d3033180->leave($__internal_b5f19f40d626b202672557125f18ac33910d831d34bf24c94cc8d906d3033180_prof);

    }

    public function getTemplateName()
    {
        return "@User/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  74 => 41,  60 => 29,  58 => 28,  40 => 13,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" >

<head>
    <meta charset=\"UTF-8\">
    <title>Register</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>


    <link rel=\"stylesheet\" href=\"{{ asset('css/style_login.css') }}\">

</head>

<body>

<div id=\"particles-js\"></div>
<body class=\"login\">
<div class=\"container\">
    <div class=\"login-container-wrapper clearfix\">
        <div class=\"logo\">
            <i class=\"fa fa-sign-in\"></i>
        </div>
        <div class=\"welcome\"><strong>Welcome,</strong> please Sign-up</div>

        {% block fos_user_content %}{% endblock %}

    </div>


</div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>



<script  src=\"{{ asset('js/index_login.js') }}\"></script>




</body>

</html>
", "@User/register.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\register.html.twig");
    }
}
