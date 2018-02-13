<?php

/* :default:test.html.twig */
class __TwigTemplate_9ee65b30abb1ff2057cfddbb16e868a3f391c13bcab5b53c211edb4e07d1c242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b0c1194037b04a2b1f272dd726cc9cd308fff2bf415bb1acafb70fe6a634d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0c1194037b04a2b1f272dd726cc9cd308fff2bf415bb1acafb70fe6a634d3d->enter($__internal_6b0c1194037b04a2b1f272dd726cc9cd308fff2bf415bb1acafb70fe6a634d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        $__internal_933153c5fdf4f4a3c7409f6423bc5bbbfe9521ab234cca07cb90c2ea74e8a614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933153c5fdf4f4a3c7409f6423bc5bbbfe9521ab234cca07cb90c2ea74e8a614->enter($__internal_933153c5fdf4f4a3c7409f6423bc5bbbfe9521ab234cca07cb90c2ea74e8a614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 121
        echo "</head>
<body>

<div class=\"section-header\">
    ";
        // line 125
        $this->displayBlock('header', $context, $blocks);
        // line 149
        echo "</div>
<div id=\"content\">";
        // line 150
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

</body>
<div class=\"section-footer\">
    ";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 159
        echo "</div>
</html>";
        
        $__internal_6b0c1194037b04a2b1f272dd726cc9cd308fff2bf415bb1acafb70fe6a634d3d->leave($__internal_6b0c1194037b04a2b1f272dd726cc9cd308fff2bf415bb1acafb70fe6a634d3d_prof);

        
        $__internal_933153c5fdf4f4a3c7409f6423bc5bbbfe9521ab234cca07cb90c2ea74e8a614->leave($__internal_933153c5fdf4f4a3c7409f6423bc5bbbfe9521ab234cca07cb90c2ea74e8a614_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fe0e48d0cbe5a21f511c2b1fe943bb47a76ded9cc3eb6a2839f3a91660130da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe0e48d0cbe5a21f511c2b1fe943bb47a76ded9cc3eb6a2839f3a91660130da->enter($__internal_5fe0e48d0cbe5a21f511c2b1fe943bb47a76ded9cc3eb6a2839f3a91660130da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba6f12705ff360875653402320e828709e6eee5de9dea71929e14772b8c067fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6f12705ff360875653402320e828709e6eee5de9dea71929e14772b8c067fd->enter($__internal_ba6f12705ff360875653402320e828709e6eee5de9dea71929e14772b8c067fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>

    ";
        // line 12
        $this->displayBlock('style', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('script', $context, $blocks);
        // line 119
        echo "
    ";
        
        $__internal_ba6f12705ff360875653402320e828709e6eee5de9dea71929e14772b8c067fd->leave($__internal_ba6f12705ff360875653402320e828709e6eee5de9dea71929e14772b8c067fd_prof);

        
        $__internal_5fe0e48d0cbe5a21f511c2b1fe943bb47a76ded9cc3eb6a2839f3a91660130da->leave($__internal_5fe0e48d0cbe5a21f511c2b1fe943bb47a76ded9cc3eb6a2839f3a91660130da_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = array())
    {
        $__internal_36e7914a828ecc83125409d30ebb47a367259c8395d34979dc571cab1e34d5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e7914a828ecc83125409d30ebb47a367259c8395d34979dc571cab1e34d5d4->enter($__internal_36e7914a828ecc83125409d30ebb47a367259c8395d34979dc571cab1e34d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_3dcbf9fea554bacfdf7b47061606be5d580a135a8c424800a5173f309d62cd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcbf9fea554bacfdf7b47061606be5d580a135a8c424800a5173f309d62cd6a->enter($__internal_3dcbf9fea554bacfdf7b47061606be5d580a135a8c424800a5173f309d62cd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "    <meta charset=\"utf-8\" />
    ";
        
        $__internal_3dcbf9fea554bacfdf7b47061606be5d580a135a8c424800a5173f309d62cd6a->leave($__internal_3dcbf9fea554bacfdf7b47061606be5d580a135a8c424800a5173f309d62cd6a_prof);

        
        $__internal_36e7914a828ecc83125409d30ebb47a367259c8395d34979dc571cab1e34d5d4->leave($__internal_36e7914a828ecc83125409d30ebb47a367259c8395d34979dc571cab1e34d5d4_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c2536f567eea2ee02872eff22b110fa1f7fc1a47bd022dac19cefe5c88dabc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2536f567eea2ee02872eff22b110fa1f7fc1a47bd022dac19cefe5c88dabc2->enter($__internal_9c2536f567eea2ee02872eff22b110fa1f7fc1a47bd022dac19cefe5c88dabc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3d2b126447650c8ddba2d9554455838fe54b73db2b27caaa1a15828a8e5487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d2b126447650c8ddba2d9554455838fe54b73db2b27caaa1a15828a8e5487b->enter($__internal_d3d2b126447650c8ddba2d9554455838fe54b73db2b27caaa1a15828a8e5487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Etudiant 12";
        
        $__internal_d3d2b126447650c8ddba2d9554455838fe54b73db2b27caaa1a15828a8e5487b->leave($__internal_d3d2b126447650c8ddba2d9554455838fe54b73db2b27caaa1a15828a8e5487b_prof);

        
        $__internal_9c2536f567eea2ee02872eff22b110fa1f7fc1a47bd022dac19cefe5c88dabc2->leave($__internal_9c2536f567eea2ee02872eff22b110fa1f7fc1a47bd022dac19cefe5c88dabc2_prof);

    }

    // line 12
    public function block_style($context, array $blocks = array())
    {
        $__internal_bc9e6d0fe7dc958cff919b30b6d14aa22a8df419443848e2150126a22da3287e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9e6d0fe7dc958cff919b30b6d14aa22a8df419443848e2150126a22da3287e->enter($__internal_bc9e6d0fe7dc958cff919b30b6d14aa22a8df419443848e2150126a22da3287e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_31a1909ba4bb2eb7788a91c53528d5843f79878006a1d0bef89bb41e9df961b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a1909ba4bb2eb7788a91c53528d5843f79878006a1d0bef89bb41e9df961b9->enter($__internal_31a1909ba4bb2eb7788a91c53528d5843f79878006a1d0bef89bb41e9df961b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 13
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <style>
                    .middlebarmenu {
                            vertical-align: middle;
                            padding-top: 43px;
                            /* display: table-column-group; */
                    }

                    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
                    .snip1189 {
                            font-family: 'Raleway', Arial, sans-serif;
                            text-align: center;
                            text-transform: uppercase;
                            font-weight: 500;
                            letter-spacing: 1px;
                    }
                    .snip1189 * {
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                    }
                    .snip1189 li {
                            display: inline-block;
                            list-style: outside none none;
                            margin: 0 1em;
                            padding: 0;
                    }
                    .snip1189 a {
                            padding: 0.5em 0.8em;
                            margin: 0.2em 0;
                            display: block;
                            color: rgb(115, 16, 9);
                            position: relative;
                            text-decoration: none;
                    }
                    .snip1189 a:before,
                    .snip1189 a:after {
                            height: 14px;
                            width: 14px;
                            position: absolute;
                            content: '';
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                            opacity: 0;
                    }
                    .snip1189 a:before {
                            left: 0;
                            top: 0;
                            border-left: 3px solid #c0392b;
                            border-top: 3px solid #c0392b;
                            -webkit-transform: translate(100%, 50%);
                            transform: translate(100%, 50%);
                    }
                    .snip1189 a:after {
                            right: 0;
                            bottom: 0;
                            border-right: 3px solid #c0392b;
                            border-bottom: 3px solid #c0392b;
                            -webkit-transform: translate(-100%, -50%);
                            transform: translate(-100%, -50%);
                    }
                    .snip1189 a:hover,
                    .snip1189 .current a {
                            color: brown;
                    }
                    .snip1189 a:hover:before,
                    .snip1189 .current a:before,
                    .snip1189 a:hover:after,
                    .snip1189 .current a:after {
                            -webkit-transform: translate(0%, 0%);
                            transform: translate(0%, 0%);
                            opacity: 1;
                    }
                    /* Demo purposes only */

            </style>
    ";
        
        $__internal_31a1909ba4bb2eb7788a91c53528d5843f79878006a1d0bef89bb41e9df961b9->leave($__internal_31a1909ba4bb2eb7788a91c53528d5843f79878006a1d0bef89bb41e9df961b9_prof);

        
        $__internal_bc9e6d0fe7dc958cff919b30b6d14aa22a8df419443848e2150126a22da3287e->leave($__internal_bc9e6d0fe7dc958cff919b30b6d14aa22a8df419443848e2150126a22da3287e_prof);

    }

    // line 97
    public function block_script($context, array $blocks = array())
    {
        $__internal_3c472e53148ab180a4670d25c099a57cf3e8fbcc00845fd7fb11f115c264397b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c472e53148ab180a4670d25c099a57cf3e8fbcc00845fd7fb11f115c264397b->enter($__internal_3c472e53148ab180a4670d25c099a57cf3e8fbcc00845fd7fb11f115c264397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_c5acc9f52b024f8dcde622e43eefc57a382860a38c6e70584a32098d38ddf2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5acc9f52b024f8dcde622e43eefc57a382860a38c6e70584a32098d38ddf2a6->enter($__internal_c5acc9f52b024f8dcde622e43eefc57a382860a38c6e70584a32098d38ddf2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 98
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/uisearch.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/SmoothScroll.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/numscroller-1.0.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

            <script>
            </script>





    ";
        
        $__internal_c5acc9f52b024f8dcde622e43eefc57a382860a38c6e70584a32098d38ddf2a6->leave($__internal_c5acc9f52b024f8dcde622e43eefc57a382860a38c6e70584a32098d38ddf2a6_prof);

        
        $__internal_3c472e53148ab180a4670d25c099a57cf3e8fbcc00845fd7fb11f115c264397b->leave($__internal_3c472e53148ab180a4670d25c099a57cf3e8fbcc00845fd7fb11f115c264397b_prof);

    }

    // line 125
    public function block_header($context, array $blocks = array())
    {
        $__internal_1319af85446282cbd40fb864fa777d92a128bd9cd5bc057e5d62deb2f9dd29bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1319af85446282cbd40fb864fa777d92a128bd9cd5bc057e5d62deb2f9dd29bc->enter($__internal_1319af85446282cbd40fb864fa777d92a128bd9cd5bc057e5d62deb2f9dd29bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d2f39569b8010e4e28837abfac45e6deeb2faf0d128c3e60509715af987ed037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f39569b8010e4e28837abfac45e6deeb2faf0d128c3e60509715af987ed037->enter($__internal_d2f39569b8010e4e28837abfac45e6deeb2faf0d128c3e60509715af987ed037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 126
        echo "            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/abcd.png"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app");
        echo "\">Home</a></li>
                                            <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_homepage");
        echo "\">Annonces</a></li>
                                            <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\">Events</a></li>
                                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_homepage");
        echo "\">Club</a></li>
                                            <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_homepage");
        echo "\">Docs</a></li>
                                            <li><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("spotted_homepage");
        echo "\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    ";
        
        $__internal_d2f39569b8010e4e28837abfac45e6deeb2faf0d128c3e60509715af987ed037->leave($__internal_d2f39569b8010e4e28837abfac45e6deeb2faf0d128c3e60509715af987ed037_prof);

        
        $__internal_1319af85446282cbd40fb864fa777d92a128bd9cd5bc057e5d62deb2f9dd29bc->leave($__internal_1319af85446282cbd40fb864fa777d92a128bd9cd5bc057e5d62deb2f9dd29bc_prof);

    }

    // line 150
    public function block_content($context, array $blocks = array())
    {
        $__internal_8fd25a2a049945e0e0801a91be5473def1dc27d0137a1828ede615dc317ad80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd25a2a049945e0e0801a91be5473def1dc27d0137a1828ede615dc317ad80e->enter($__internal_8fd25a2a049945e0e0801a91be5473def1dc27d0137a1828ede615dc317ad80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1eb75b4849d2129fa7a679529802381aa7421340e88d2a00c808e43c14f6662c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb75b4849d2129fa7a679529802381aa7421340e88d2a00c808e43c14f6662c->enter($__internal_1eb75b4849d2129fa7a679529802381aa7421340e88d2a00c808e43c14f6662c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1eb75b4849d2129fa7a679529802381aa7421340e88d2a00c808e43c14f6662c->leave($__internal_1eb75b4849d2129fa7a679529802381aa7421340e88d2a00c808e43c14f6662c_prof);

        
        $__internal_8fd25a2a049945e0e0801a91be5473def1dc27d0137a1828ede615dc317ad80e->leave($__internal_8fd25a2a049945e0e0801a91be5473def1dc27d0137a1828ede615dc317ad80e_prof);

    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f651c609de528c82ce21890995b5c6cdb26a51301d08d3c851052ae0242743a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f651c609de528c82ce21890995b5c6cdb26a51301d08d3c851052ae0242743a9->enter($__internal_f651c609de528c82ce21890995b5c6cdb26a51301d08d3c851052ae0242743a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_161de945fca2cae978e4e9455061df50934aa4a66d70e8ea198a7a634223ba28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161de945fca2cae978e4e9455061df50934aa4a66d70e8ea198a7a634223ba28->enter($__internal_161de945fca2cae978e4e9455061df50934aa4a66d70e8ea198a7a634223ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 155
        echo "        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    ";
        
        $__internal_161de945fca2cae978e4e9455061df50934aa4a66d70e8ea198a7a634223ba28->leave($__internal_161de945fca2cae978e4e9455061df50934aa4a66d70e8ea198a7a634223ba28_prof);

        
        $__internal_f651c609de528c82ce21890995b5c6cdb26a51301d08d3c851052ae0242743a9->leave($__internal_f651c609de528c82ce21890995b5c6cdb26a51301d08d3c851052ae0242743a9_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  427 => 155,  418 => 154,  401 => 150,  380 => 138,  376 => 137,  372 => 136,  368 => 135,  364 => 134,  360 => 133,  353 => 129,  348 => 126,  339 => 125,  319 => 109,  315 => 108,  311 => 107,  307 => 106,  303 => 105,  299 => 104,  295 => 103,  291 => 102,  287 => 101,  283 => 100,  279 => 99,  276 => 98,  267 => 97,  179 => 18,  175 => 17,  171 => 16,  167 => 15,  163 => 14,  158 => 13,  149 => 12,  131 => 10,  120 => 7,  111 => 6,  100 => 119,  98 => 97,  95 => 96,  93 => 12,  88 => 10,  85 => 9,  83 => 6,  80 => 5,  71 => 4,  60 => 159,  58 => 154,  51 => 150,  48 => 149,  46 => 125,  40 => 121,  38 => 4,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}

    {% block meta %}
    <meta charset=\"utf-8\" />
    {% endblock %}

            <title>{% block title %}Espace Etudiant 12{% endblock %} </title>

    {% block style %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/lightbox.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flexslider.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <style>
                    .middlebarmenu {
                            vertical-align: middle;
                            padding-top: 43px;
                            /* display: table-column-group; */
                    }

                    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
                    .snip1189 {
                            font-family: 'Raleway', Arial, sans-serif;
                            text-align: center;
                            text-transform: uppercase;
                            font-weight: 500;
                            letter-spacing: 1px;
                    }
                    .snip1189 * {
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                    }
                    .snip1189 li {
                            display: inline-block;
                            list-style: outside none none;
                            margin: 0 1em;
                            padding: 0;
                    }
                    .snip1189 a {
                            padding: 0.5em 0.8em;
                            margin: 0.2em 0;
                            display: block;
                            color: rgb(115, 16, 9);
                            position: relative;
                            text-decoration: none;
                    }
                    .snip1189 a:before,
                    .snip1189 a:after {
                            height: 14px;
                            width: 14px;
                            position: absolute;
                            content: '';
                            -webkit-transition: all 0.35s ease;
                            transition: all 0.35s ease;
                            opacity: 0;
                    }
                    .snip1189 a:before {
                            left: 0;
                            top: 0;
                            border-left: 3px solid #c0392b;
                            border-top: 3px solid #c0392b;
                            -webkit-transform: translate(100%, 50%);
                            transform: translate(100%, 50%);
                    }
                    .snip1189 a:after {
                            right: 0;
                            bottom: 0;
                            border-right: 3px solid #c0392b;
                            border-bottom: 3px solid #c0392b;
                            -webkit-transform: translate(-100%, -50%);
                            transform: translate(-100%, -50%);
                    }
                    .snip1189 a:hover,
                    .snip1189 .current a {
                            color: brown;
                    }
                    .snip1189 a:hover:before,
                    .snip1189 .current a:before,
                    .snip1189 a:hover:after,
                    .snip1189 .current a:after {
                            -webkit-transform: translate(0%, 0%);
                            transform: translate(0%, 0%);
                            opacity: 1;
                    }
                    /* Demo purposes only */

            </style>
    {% endblock %}

    {% block script %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/uisearch.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/SmoothScroll.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/numscroller-1.0.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/nav.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/lightbox-plus-jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.flexslider.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/classie.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.js') }}\"></script>

            <script>
            </script>





    {% endblock %}

    {% endblock %}
</head>
<body>

<div class=\"section-header\">
    {% block header %}
            <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                            <div class=\"col-md-2\">
                                    <img src=\"{{ asset(\"images/abcd.png\") }}\">
                            </div>
                            <div class=\"col-md-8 middlebarmenu\">
                                    <ul class=\"snip1189\">
                                            <li class=\"current\"><a href=\"{{ path('app') }}\">Home</a></li>
                                            <li><a href=\"{{ path('annonce_homepage') }}\">Annonces</a></li>
                                            <li><a href=\"{{ path('evenement_homepage') }}\">Events</a></li>
                                            <li><a href=\"{{ path('club_homepage') }}\">Club</a></li>
                                            <li><a href=\"{{ path('store_homepage') }}\">Docs</a></li>
                                            <li><a href=\"{{ path('spotted_homepage') }}\">Spotted</a></li>

                                    </ul>
                            </div>
                            <div class=\"col-md-2\">C</div>
                    </div>
            </nav>



    {% endblock %}
</div>
<div id=\"content\">{% block content %}{% endblock %}</div>

</body>
<div class=\"section-footer\">
    {% block footer %}
        <div class=\"copyright-agile\">
            <p>© 2018 All rights reserved | Design by <a href=\"#\">Davinci Coders</a></p>
        </div>
    {% endblock %}
</div>
</html>", ":default:test.html.twig", "C:\\wamp64\\www\\pidev00\\app/Resources\\views/default/test.html.twig");
    }
}
