<?php

/* uploadBundle:Default:header.html.twig */
class __TwigTemplate_c708dcc2d3d66e669321bea2ab466fa0bed3392ddf4f2d6b924a281755c51b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84377d63e3aeb09ccbc6bc4b6b844f128f276b73656138be7ac4449c162aa21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84377d63e3aeb09ccbc6bc4b6b844f128f276b73656138be7ac4449c162aa21c->enter($__internal_84377d63e3aeb09ccbc6bc4b6b844f128f276b73656138be7ac4449c162aa21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
 
   ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script> 

</head>


<header>
    <h1>Symfony PHPUnit Demo</h1>
        <nav>
            <ul>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_homepage");
        echo "\"><li>Home</li></a>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_register");
        echo "\"><li>Register</li></a>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_view");
        echo "\"><li>List User</li></a>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_note");
        echo "\"><li>Add Note</li></a>
                 <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view_note");
        echo "\"><li>List Note</li></a>
            </ul>
        </nav>
    <div style=\"clear: both\"></div>
</header>
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

";
        
        $__internal_84377d63e3aeb09ccbc6bc4b6b844f128f276b73656138be7ac4449c162aa21c->leave($__internal_84377d63e3aeb09ccbc6bc4b6b844f128f276b73656138be7ac4449c162aa21c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1d5d64a17569331ed019778773f754360097c49f2a92be3d0d47bd3777e40d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d5d64a17569331ed019778773f754360097c49f2a92be3d0d47bd3777e40d2->enter($__internal_f1d5d64a17569331ed019778773f754360097c49f2a92be3d0d47bd3777e40d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1c6b05f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1c6b05f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1c6b05f_common_1.css");
            // line 11
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "1c6b05f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1c6b05f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1c6b05f_view_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "1c6b05f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1c6b05f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/1c6b05f.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
        
        $__internal_f1d5d64a17569331ed019778773f754360097c49f2a92be3d0d47bd3777e40d2->leave($__internal_f1d5d64a17569331ed019778773f754360097c49f2a92be3d0d47bd3777e40d2_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 13,  84 => 11,  79 => 6,  73 => 5,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 23,  31 => 14,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
 
   {% block stylesheets %}
            {% stylesheets
                '@uploadBundle/Resources/public/css/common.css'
                '@uploadBundle/Resources/public/css/view.css'
                filter='cssrewrite'
            %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
    {% endblock %}
  <script src=\"//code.jquery.com/jquery-1.12.4.js\"></script> 

</head>


<header>
    <h1>Symfony PHPUnit Demo</h1>
        <nav>
            <ul>
                <a href=\"{{path('upload_homepage')}}\"><li>Home</li></a>
                <a href=\"{{path('upload_register')}}\"><li>Register</li></a>
                <a href=\"{{path('upload_view')}}\"><li>List User</li></a>
                <a href=\"{{path('user_note')}}\"><li>Add Note</li></a>
                 <a href=\"{{path('view_note')}}\"><li>List Note</li></a>
            </ul>
        </nav>
    <div style=\"clear: both\"></div>
</header>
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

", "uploadBundle:Default:header.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/header.html.twig");
    }
}
