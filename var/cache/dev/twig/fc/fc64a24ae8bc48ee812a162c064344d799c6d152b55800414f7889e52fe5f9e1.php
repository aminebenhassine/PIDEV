<?php

/* admin/partial/top-header.html.twig */
class __TwigTemplate_3fc6daae1f5dbd0ab3edb6f57bb12db8e0764def57539cbe88bc1b1af9db95ed extends Twig_Template
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
        $__internal_78b7b271928a3f07d0e38d52c913477d4b0c1ab8922e15a1dc9952cd02d86afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b7b271928a3f07d0e38d52c913477d4b0c1ab8922e15a1dc9952cd02d86afd->enter($__internal_78b7b271928a3f07d0e38d52c913477d4b0c1ab8922e15a1dc9952cd02d86afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/top-header.html.twig"));

        $__internal_827879fe2cd15b14b477b45f58f2763c224f9bf6bf27fafd431e2179e3d67e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827879fe2cd15b14b477b45f58f2763c224f9bf6bf27fafd431e2179e3d67e1f->enter($__internal_827879fe2cd15b14b477b45f58f2763c224f9bf6bf27fafd431e2179e3d67e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/top-header.html.twig"));

        // line 1
        echo "

<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
\t<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
\t\t<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
\t\t\t<span class=\"sr-only\">Toggle sidebar</span>

\t\t\t<span class=\"icon-bar\"></span>

\t\t\t<span class=\"icon-bar\"></span>

\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>

\t\t<div class=\"navbar-header pull-left\">
\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t<small>
\t\t\t\t\t<i class=\"fa fa-leaf\"></i>
\t\t\t\t\tAce Admin
\t\t\t\t</small>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t<li class=\"grey dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-tasks\"></i>
\t\t\t\t\t\t<span class=\"badge badge-grey\">4</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check\"></i>
\t\t\t\t\t\t\t4 Tasks to complete
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Software Update</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">65%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:65%\" class=\"progress-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Hardware Upgrade</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">35%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Unit Testing</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">15%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Bug Fixes</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">90%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-striped active\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tSee tasks with details
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"purple dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs btn-primary fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"green dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar.png\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar3.png\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar4.png\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar2.png\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar5.png\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\tSee all messages
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"light-blue dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"assets/images/avatars/user.jpg\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\tJason
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-power-off\"></i>
\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div><!-- /.navbar-container -->
</div>";
        
        $__internal_78b7b271928a3f07d0e38d52c913477d4b0c1ab8922e15a1dc9952cd02d86afd->leave($__internal_78b7b271928a3f07d0e38d52c913477d4b0c1ab8922e15a1dc9952cd02d86afd_prof);

        
        $__internal_827879fe2cd15b14b477b45f58f2763c224f9bf6bf27fafd431e2179e3d67e1f->leave($__internal_827879fe2cd15b14b477b45f58f2763c224f9bf6bf27fafd431e2179e3d67e1f_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/top-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
\t<div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
\t\t<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
\t\t\t<span class=\"sr-only\">Toggle sidebar</span>

\t\t\t<span class=\"icon-bar\"></span>

\t\t\t<span class=\"icon-bar\"></span>

\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>

\t\t<div class=\"navbar-header pull-left\">
\t\t\t<a href=\"index.html\" class=\"navbar-brand\">
\t\t\t\t<small>
\t\t\t\t\t<i class=\"fa fa-leaf\"></i>
\t\t\t\t\tAce Admin
\t\t\t\t</small>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t<li class=\"grey dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-tasks\"></i>
\t\t\t\t\t\t<span class=\"badge badge-grey\">4</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check\"></i>
\t\t\t\t\t\t\t4 Tasks to complete
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Software Update</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">65%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:65%\" class=\"progress-bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Hardware Upgrade</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">35%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Unit Testing</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">15%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Bug Fixes</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">90%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-striped active\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tSee tasks with details
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"purple dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs btn-primary fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"green dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar.png\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar3.png\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar4.png\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar2.png\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/avatars/avatar5.png\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\tSee all messages
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li class=\"light-blue dropdown-modal\">
\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"assets/images/avatars/user.jpg\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\tJason
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-power-off\"></i>
\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div><!-- /.navbar-container -->
</div>", "admin/partial/top-header.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\top-header.html.twig");
    }
}
